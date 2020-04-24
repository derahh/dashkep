<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));

        Route::group([
            'middleware' => ['api', 'cors'],
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
             //Add you routes here, for example:
             Route::apiResource('/dosen_tetap','DosenTetapController@index');
             Route::apiResource('/dosen_tidak_tetap','DosenTidakTetapController@index');
             Route::apiResource('/dosen_pembimbing','DosenPembimbingController@index');
             Route::apiResource('/dosen_industri','DosenIndustriController@index');
             Route::apiResource('/ewmp_dosen','EWMPDosenController@index');
             Route::apiResource('/rekognisi_dosen','RekognisiDosenController@index');
             Route::apiResource('/dosen_tetap/export','DosenTetapController@export_excel');
             Route::apiResource('/dosen_tidak_tetap/export','DosenTidakTetapController@export_excel');
             Route::apiResource('/dosen_pembimbing/export','DosenPembimbingController@export_excel');
             Route::apiResource('/dosen_industri/export','DosenIndustriController@export_excel');
             Route::apiResource('/ewmp_dosen/export','EWMPDosenController@export_excel');
             Route::apiResource('/rekognisi_dosen/export','RekognisiDosenController@export_excel');
             Route::apiResource('/dosen_tetap/create','DosenTetapController@store');
             Route::apiResource('/dosen_tidak_tetap/create','DosenTidakTetapController@store');
             Route::apiResource('/dosen_pembimbing/create','DosenPembimbingController@store');
             Route::apiResource('/dosen_industri/create','DosenIndustriController@store');
             Route::apiResource('/ewmp_dosen/create','EWMPDosenController@store');
             Route::apiResource('/rekognisi_dosen/create','RekognisiDosenController@store');
             Route::apiResource('/dosen_tetap/delete','DosenTetapController@destroy');
             Route::apiResource('/dosen_tidak_tetap/delete','DosenTidakTetapController@destroy');
             Route::apiResource('/dosen_pembimbing/delete','DosenPembimbingController@destroy');
             Route::apiResource('/dosen_industri/delete','DosenIndustriController@destroy');
             Route::apiResource('/ewmp_dosen/delete','EWMPDosenController@destroy');
             Route::apiResource('/rekognisi_dosen/delete','RekognisiDosenController@destroy');
             Route::apiResource('/dosen_tetap/update','DosenTetapController@update');
             Route::apiResource('/dosen_tidak_tetap/update','DosenTidakTetapController@update');
             Route::apiResource('/dosen_pembimbing/update','DosenPembimbingController@update');
             Route::apiResource('/dosen_industri/update','DosenIndustriController@update');
             Route::apiResource('/ewmp_dosen/update','EWMPDosenController@update');
             Route::apiResource('/rekognisi_dosen/update','RekognisiDosenController@update');
        });     
    }
}
