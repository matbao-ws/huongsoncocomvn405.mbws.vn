import os, sys
HERE = os.path.dirname(os.path.abspath(__file__))
sys.path.insert(0, os.path.dirname(os.path.dirname(HERE)))
import scripts.articles.data_strategic_posts as d

print("Post count:", len(d.STRATEGIC_POSTS))
for p in d.STRATEGIC_POSTS:
    print(p['id'], p['slug'], "FAQs:", len(p['faqs']))
