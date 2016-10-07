<?php namespace App\Mascame;


use Mascame\Artificer\Artificer;
use Mascame\Artificer\Plugin\AbstractPlugin;

class HelloWorldPlugin extends AbstractPlugin {

    public $version = '1.0';
    public $name = 'Hello World!';
    public $description = 'The Hello World Plugin';
    public $author = 'Marc Mascarell';
    public $thumbnail = ''; // url

    /**
     * Artificer does not know about your constructor so you
     * can inject any dependency you need
     */
    public function __construct() {

    }

    public function getRoutes() {
        \Route::get('hello-world', [
            'as' => 'admin.plugin.helloworld',
        ], function() {
            return "Hello World!";
        });
    }

    public function getMenu() {
        return [
            [
                'route'  => 'admin.plugin.helloworld',
                'title' => 'Hello world!',
                'icon'  => '<i class="fa fa-graduation-cap"></i>',
                'permissions' => [
                    'admin',
                    'user'
                ]
            ]
        ];
    }

    /**
     * This will be called if the plugin is installed
     */
    public function boot()
    {
    }

    /**
     * This will be called when plugin is installed
     */
    public function install() {
        // Maybe some table creation
    }

    /**
     * This will be called when plugin is uninstalled
     */
    public function uninstall() {
        // Maybe some table drop or cleanup
    }


}