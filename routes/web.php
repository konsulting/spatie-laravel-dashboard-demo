<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', '\\Spatie\\LaravelDashboard\\Http\\Controllers\\DashboardController@index')
    ->middleware(config('dashboard.auth_middleware', 'auth'));

Route::post('/webhook/github', '\\Spatie\\LaravelDashboard\\Http\\Controllers\\GitHubWebhookController@gitRepoReceivedPush');
