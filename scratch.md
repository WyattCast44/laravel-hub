# Github Webhooks

-   https://developer.github.com/v3/repos/hooks/#pubsubhubbub

```bash
curl -u "user" -i \
  https://api.github.com/hub \
  -F "hub.mode=subscribe" \
  -F "hub.topic=https://github.com/:owner/:repo/events/push" \
  -F "hub.callback=http://postbin.org/123"
```

# Package submitting

- Check if they own the package?
- Check if they are in the org?

<!-- ## Ideas

-   hub.com/username/template/version?

-   Users
-   Templates

    -   name \*
    -   description \*
    -   user \*
    -   url \*
    -   views \*
    -   downloads \*
    -   added \*
    -   updated \*

    -   tags
    -   favorites
    -   version

# Hub ideas

-   Package repo for discovery
-   Front end presets hooked into the config files
    -   Ex. frontend: tailwind/tailwind-auth, will look into the repo and pull out that front end scaffolding
-   Have lots of front end packages/configs

-   https://packagist.org/apidoc
-   https://developer.github.com/v3/repos/#list-your-repositories
-   https://laravel-news.com/category/laravel-packages
-   https://novapackages.com/
-   https://medium.com/@danielalvidrez/laravel-inspired-javascript-packages-9eb8fd1b3516
-   https://laravel.com/

# Types of packages

-   JS vs PHP
-   Official
-   Nova
-   Eloquent

# Palette

-   Make an interactiver cli command that asks you for the name of the project. Then asks you for the vendor name of the template. Then builds an interactive menu to seach published templates under that vendor -->