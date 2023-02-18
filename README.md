
# Laravel

Laravel is a project that allows you to create and save tags with TDD coding. It is an open-source framework written in PHP and uses the MIT license.

## Requirements

* PHP 8.0.2 or higher
* Guzzlehttp/guzzle 7.2 or higher
* Laravel/framework 9.19 or higher
* Laravel/sanctum 3.0 or higher
* Laravel/tinker 2.7 or higher 
* Fakerphp/faker 1.9.1 or higher 
* Laravel/pint 1.0 or higher 
* Laravel/sail 1.0.1 or higher 
* Mockery/mockery 1.4.4 or higher 
* Nunomaduro/collision 6.1 or higher 
* Phpunit/phpunit 9.5.10 or higher 
* Spatie/laravel-ignition 1.0 or higher 

 ## Autoloading

 * App\: app/ 
 * Database\Factories\: database/factories/ 
 * Database\Seeders\: database/seeders/  

 ## Autoloading (Dev)

 * Tests\: tests/  

 ## Scripts

 * post-autoload-dump - Illuminate\Foundation\ComposerScripts::postAutoloadDump, @php artisan package:discover --ansi  
 * post-update-cmd - @php artisan vendor:publish --tag=laravel-assets --ansi --force  
 * post-root-package-install - @php -r "file_exists('.env') || copy('.env.example', '.env');"  
 * post-create-project-cmd - @php artisan key:generate --ansi  

 ## Extra Configuration

 * laravel -> dont discover []  

 ## Configurations

 * optimize autoloader -> true  
 * preferred install -> dist  
 * sort packages -> true   
 * allow plugins -> pestphp / pest plugin -> true   

 ## Stability Settings

 * minimum stability -> stable   
 * prefer stable -> true
