<?php

namespace App\Services;

use App\Models\ProjectSetting;
use App\Support\MediaUrl;

class SiteBranding
{
    private ?array $branding = null;

    /**
     * Return the current website identity with safe local fallbacks.
     *
     * This service is request-scoped, so settings saved in the admin area are
     * picked up on the next page load without leaving stale branding in workers.
     */
    public function current(): array
    {
        if ($this->branding !== null) {
            return $this->branding;
        }

        $settings = ProjectSetting::query()
            ->whereIn('setting_key', ['shop_name', 'logo_url', 'favicon_url', 'contact'])
            ->pluck('setting_value', 'setting_key');

        $contact = $settings->get('contact');

        return $this->branding = [
            'name' => $this->textValue($settings->get('shop_name')) ?: config('app.name', 'Hương Sơn'),
            'logo_url' => $this->assetUrl($settings->get('logo_url'), 'assets/images/brand/HUONG_SON_logo.svg'),
            'admin_logo_url' => asset('assets/images/brand/HUONG_SON_logo.svg'),
            'favicon_url' => $this->assetUrl($settings->get('favicon_url'), 'assets/images/brand/favicon.svg'),
            'contact' => is_array($contact) ? $contact : [],
        ];
    }

    private function textValue(mixed $value): ?string
    {
        if (! is_string($value)) {
            return null;
        }

        $value = trim($value);

        return $value === '' ? null : $value;
    }

    private function assetUrl(mixed $value, string $fallback): string
    {
        return (string) MediaUrl::resolve($this->textValue($value), $fallback);
    }
}
