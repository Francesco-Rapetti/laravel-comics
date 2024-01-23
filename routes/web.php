<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links = [
        'link1' => [
            'url' => '#',
            'title' => 'CHARACTERS'
        ],
        'link2' => [
            'url' => '#',
            'title' => 'COMICS'
        ],
        'link3' => [
            'url' => '#',
            'title' => 'MOVIES'
        ],
        'link4' => [
            'url' => '#',
            'title' => 'TV'
        ],
        'link5' => [
            'url' => '#',
            'title' => 'GAMES'
        ],
        'link6' => [
            'url' => '#',
            'title' => 'COLLECTIBLES'
        ],
        'link7' => [
            'url' => '#',
            'title' => 'VIDEOS'
        ],
        'link8' => [
            'url' => '#',
            'title' => 'FANS'
        ],
        'link9' => [
            'url' => '#',
            'title' => 'NEWS'
        ],
        'link10' => [
            'url' => '#',
            'title' => 'SHOP'
        ],
    ];
    return view('home', compact('links'));
});
