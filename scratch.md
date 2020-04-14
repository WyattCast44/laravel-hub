
# Hub ideas

-   https://developer.github.com/v3/activity/starring/#star-a-repository-for-the-authenticated-user
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

# Composer

- `composer create-project [PACKAGE] [DESTINATION PATH] [--FLAGS]`
- https://getcomposer.org/doc/articles/scripts.md
- https://getcomposer.org/doc/articles/custom-installers.md

```php
// public function cachePackageReadme(Package $package)
// {
//     $name = $package->name;
//     $vendor = $package->vendor;

//     $response = $this->api('repo')->contents()->readme($vendor, $name);

//     $html = base64_decode($response['content']);

//     return $html;
// }

// /**
//  * TODO Submit PR to change the getHttpClientBuilder()
//  * method to public, or will have problems in the future
//  */
// public function http()
// {
//     $http = $this->client->getHttpClientBuilder();

//     $http->addHeaders(['Content-Length' => 0]);

//     return $http->getHttpClient();
// }

// Route::get('/test', function () {

//     $username = 'WyattCast44';
//     $repo = 'CLIFF';

//     $client = app('GitHub');

//     $res = $client->http()->put("/user/starred/WyattCast44/CLIFF");

//     $content = ResponseMediator::getContent($res);

//     dd($content);
// });

// Route::get('/test', function () {
//     $package = Package::first();
//     $client = app('GitHub');
//     $r = $client->cachePackageReadme($package);
//     $html = GitDown::parseAndCache($r);
//     return view('test', compact('html'));
// });

```