<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    //    \Session::put('me cago', 'en doto');
//    dd(\Session::all());

//    dd(get_parent_class(\Mascame\Artificer\ArtificerServiceProvider::class));
//
//    \App::register(new class(app()) extends \Illuminate\Support\ServiceProvider {
//        public function __construct($app)
//        {
//            $this->app = $app;
//        }
//
//        protected function publishes(array $paths, $group = null)
//        {
//            $class = static::class;
//
//            if (! array_key_exists($class, static::$publishes)) {
//                static::$publishes[$class] = [];
//            }
//
//            static::$publishes[$class] = array_merge(static::$publishes[$class], $paths);
//
//            if ($group) {
//                if (! array_key_exists($group, static::$publishGroups)) {
//                    static::$publishGroups[$group] = [];
//                }
//
//                static::$publishGroups[$group] = array_merge(static::$publishGroups[$group], $paths);
//            }
//        }
//    });
//    dd(app());
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
