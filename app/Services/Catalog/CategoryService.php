<?php

namespace App\Services\Catalog;

use App\Models\Category;
use App\Support\HtmlSanitizer;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Services\LanguageRegistry;
use App\Services\LocalizedSlugService;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public function __construct(
        private readonly \App\Services\CloudinaryService $cloudinaryService,
        private readonly HtmlSanitizer $htmlSanitizer,
        private readonly LocalizedSlugService $localizedSlugs,
        private readonly LanguageRegistry $languages,
    )
    {
    }
    public function create(array $data): Category
    {
        return DB::transaction(function () use ($data) {
            $category = Category::query()->create($this->payload($data));
            $this->localizedSlugs->sync($category, $this->localizedValues($data['slug'] ?? []), $category->getTranslations('name'));
            return $category->refresh();
        });
    }

    public function update(Category $category, array $data): Category
    {
        return DB::transaction(function () use ($category, $data) {
            $category->update($this->payload($data, $category));
            $this->localizedSlugs->sync($category, $this->localizedValues($data['slug'] ?? []), $category->getTranslations('name'));
            return $category->refresh();
        });
    }

    public function delete(Category $category): void
    {
        $category->delete();
    }

    public function reorder(array $ids, int $startOrder = 0): void
    {
        foreach (array_values($ids) as $index => $id) {
            Category::query()
                ->whereKey($id)
                ->update(['sort_order' => $startOrder + $index]);
        }
    }

    private function payload(array $data, ?Category $category = null): array
    {
        $name = $this->translationValue($data['name'] ?? null, $category, 'name');
        $submittedSlugs = $this->localizedValues($data['slug'] ?? []);
        $baseSlug = $submittedSlugs[$this->languages->defaultLocale()] ?? $submittedSlugs[app()->getLocale()] ?? ($name[$this->languages->defaultLocale()] ?? $name[$this->fallbackLocale()] ?? reset($name));
        $imageUrl = $this->imageUrl($data['image_file'] ?? null, $data['image_url'] ?? null, $category);

        $desc = $this->translationValue($data['description'] ?? null, $category, 'description');
        $metaTitle = $this->translationValue($data['meta_title'] ?? null, $category, 'meta_title');
        $metaDescription = $this->translationValue($data['meta_description'] ?? null, $category, 'meta_description');

        foreach ($name as $loc => $catName) {
            $isEn = $loc === 'en';
            if (empty($metaTitle[$loc]) && filled($catName)) {
                $metaTitle[$loc] = $isEn ? "{$catName} Genuine | Huong Son" : "{$catName} Chính Hãng | Công Ty Hương Sơn";
            }
            if (empty($metaDescription[$loc])) {
                $rawText = !empty($desc[$loc]) ? strip_tags($desc[$loc]) : '';
                $cleanText = trim(preg_replace('/\s+/', ' ', $rawText));
                if (filled($cleanText)) {
                    $metaDescription[$loc] = Str::limit($cleanText, 155);
                } elseif (filled($catName)) {
                    $metaDescription[$loc] = $isEn
                        ? "Genuine {$catName} distributed by Huong Son Co., Ltd. Best quality, on-site warranty and professional support."
                        : "Danh mục {$catName} phân phối chính hãng bởi Công ty Hương Sơn. Cam kết chất lượng, bảo hành tận nơi, dịch vụ chuyên nghiệp.";
                }
            }
        }

        return [
            'parent_id' => $data['parent_id'] ?? null,
            'name' => $name,
            'slug' => $this->uniqueSlug((string) $baseSlug, $category?->id),
            'description' => $desc,
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'image_url' => $imageUrl,
            'sort_order' => (int) ($data['sort_order'] ?? $category?->sort_order ?? 0),
            'is_active' => (bool) ($data['is_active'] ?? false),
            'is_draft' => (bool) ($data['is_draft'] ?? false),
        ];
    }

    private function imageUrl(?UploadedFile $file, ?string $selectedUrl, ?Category $category): ?string
    {
        if ($file) {
            return $this->cloudinaryService->uploadFile($file, 'categories');
        }

        return filled($selectedUrl) ? $selectedUrl : $category?->image_url;
    }

    private function translationValue(string|array|null $value, ?Category $category, string $attribute): array
    {
        $translations = $category?->getTranslations($attribute) ?? [];
        $locale = app()->getLocale() ?: $this->fallbackLocale();
        $fallbackLocale = $this->fallbackLocale();
        if (is_array($value)) {
            foreach ($value as $lang => $translation) {
                if ($this->languages->supports((string) $lang) && is_string($translation) && trim($translation) !== '') {
                    $translations[$lang] = $attribute === 'description' ? $this->htmlSanitizer->clean(trim($translation)) : trim($translation);
                }
            }
        } else {
            $value = is_string($value) ? trim($value) : '';
            if ($attribute === 'description') $value = $this->htmlSanitizer->clean($value);
            if ($value !== '') $translations[$locale] = $value;
            if ($locale !== $fallbackLocale && $value !== '' && empty($translations[$fallbackLocale])) $translations[$fallbackLocale] = $value;
        }

        return array_filter($translations, fn ($translation) => $translation !== null && $translation !== '');
    }

    private function fallbackLocale(): string
    {
        return $this->languages->fallbackLocale();
    }

    private function localizedValues(string|array|null $value): array
    {
        if (is_array($value)) return collect($value)->filter(fn ($item, $locale) => $this->languages->supports((string) $locale) && is_string($item) && trim($item) !== '')->map(fn (string $item) => trim($item))->all();
        return is_string($value) && trim($value) !== '' ? [app()->getLocale() => trim($value)] : [];
    }

    private function uniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $slug = Str::slug($value) ?: Str::random(8);
        $base = $slug;
        $counter = 2;

        while (Category::query()
            ->where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
            ->exists()) {
            $slug = $base.'-'.$counter++;
        }

        return $slug;
    }
}
