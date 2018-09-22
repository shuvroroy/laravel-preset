<?php

namespace ShuvroRoy\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset as ConsolePreset;

class Preset extends ConsolePreset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::deleteDirectory();
        static::createDirectory();
        static::updateStyles();
        static::updateScripts();
        static::updateTemplates();
    }

    /**
     * Install the preset with auth.
     *
     * @return void
     */
    public static function installWithAuth()
    {
        static::install();
        static::updateWithAuthTemplates();
    }


    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'laravel-mix-purgecss' => '^2.2.3',
            'postcss-nesting' => '^7.0.0',
            'postcss-import' => '^12.0.0',
            'tailwindcss' => '^0.6.6',
        ] + Arr::except($packages, [
            'bootstrap',
            'jquery',
            'popper.js',
        ]);
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/tailwind-stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Delete the directory for the application.
     *
     * @return void
     */
    protected static function deleteDirectory()
    {
        tap(new Filesystem, function ($files) {
            $files->delete(resource_path('views/home.blade.php'));
            $files->delete(resource_path('views/welcome.blade.php'));
            $files->deleteDirectory(resource_path('views/layouts'));
            $files->deleteDirectory(resource_path('views/auth'));
            $files->deleteDirectory(resource_path('sass'));
            $files->delete(public_path('css/app.css'));
            $files->delete(public_path('js/app.js'));
        });
    }

    /**
     * Create the directory for the application.
     *
     * @return void
     */
    protected static function createDirectory()
    {
        tap(new Filesystem, function ($files) {
            if (! $files->isDirectory($directory = resource_path('css'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });
    }

    /**
     * Update the css files for the application.
     *
     * @return void
     */
    protected static function updateStyles()
    {
        copy(__DIR__.'/tailwind-stubs/resources/css/app.css', resource_path('css/app.css'));
    }

    /**
     * Update the js files for the application.
     *
     * @return void
     */
    protected static function updateScripts()
    {
        copy(__DIR__.'/tailwind-stubs/resources/js/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/tailwind-stubs/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    /**
     * Update the template files for the application.
     *
     * @return void
     */
    protected static function updateTemplates()
    {
        tap(new Filesystem, function ($files) {
            $files->copyDirectory(__DIR__.'/tailwind-stubs/resources/views', resource_path('views'));
            $files->deleteDirectory(resource_path('views/auth'));
            $files->delete(resource_path('views/home.blade.php'));
        });
    }

    /**
     * Update the template with auth files for the application.
     *
     * @return void
     */
    protected static function updateWithAuthTemplates()
    {
        file_put_contents(
            base_path('routes/web.php'),
            "\nAuth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        tap(new Filesystem, function ($files) {
            $files->copyDirectory(__DIR__.'/tailwind-stubs/resources/views', resource_path('views'));
        });
    }
}
