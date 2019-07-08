### Linkedin API v2 integration for Laravel Framework

This package is a wrapper for [Rishats/linkedin-php](https://github.com/Rshats/linkedin-php).
You can view the documentation for php version [here](https://github.com/Rishats/laravel-linkedin-v2/blob/master/README.md). Don't forget to consult the oficial [LinkedIn API](https://developer.linkedin.com/) site.

### Installation on Laravel

##### Install with composer
```bash
composer require rishats/laravel-linkedin-v2
```

##### Publish config file (optional)
```
php artisan vendor:publish --provider="Rishats\LinkedIn\LinkedinServiceProviderV2"
```

### Usage

In order to use this API client (or any other LinkedIn clients) you have to [register your app](https://www.linkedin.com/developer/apps) 
with LinkedIn to receive an API key. Once you've registered your LinkedIn app, you will be provided with
an *API Key* and *Secret Key*, please fill this values on `linkedin-v2.php` config file.

####Basic Usage
 In developing...


#### Changelog

You can view the latest changes [here](https://github.com/Rishats/laravel-linkedin-v2/blob/master/CHANGELOG.md)
