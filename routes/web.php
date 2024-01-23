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

    $comics = [
        'comic1' => [
            'thumb' => 'https://www.coverbrowser.com/image/action-comics/1-1.jpg',
            'price' => '$19.99',
            'series' => 'Action Comics',
            'type' => 'comic book',
        ],
        'comic2' => [
            'thumb' => 'https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg',
            'price' => '$3.99',
            'series' => 'American Vampire 1976',
            'type' => 'comic book',
        ],
        'comic3' => [
            'thumb' => 'https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg',
            'price' => '$16.99',
            'series' => 'Aquaman',
            'type' => 'graphic novel',
        ],
        'comic4' => [
            'thumb' => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
            'price' => "$2.99",
            'series' => "Batgirl",
            'type' => "comic book",
        ],
        'comic5' => [
            'thumb' => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
            'price' => "$3.99",
            'series' => "Batman",
            'type' => "comic book",
        ],
        'comic6' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
            'price' => "$2.99",
            'series' => "Batman Beyond",
            'type' => "comic book",
        ],
        'comic7' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
            'price' => "$3.99",
            'series' => "Batman/Superman",
            'type' => "comic book",
        ],
        'comic8' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Vol_2_1.jpg",
            'price' => "$4.99",
            'series' => "Batman/Superman Annual",
            'type' => "comic book",
        ],
        'comic9' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
            'price' => "$5.99",
            'series' => "Batman: The Joker War Zone",
            'type' => "comic book",
        ],
        'comic10' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
            'price' => "$6.99",
            'series' => "Batman: Three Jokers",
            'type' => "comic book",
        ],
        'comic11' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/f/f3/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
            'price' => "$4.99",
            'series' => "Batman: White Knight Presents: Harley Quinn",
            'type' => "comic book",
        ],
        'comic12' => [
            'thumb' => "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
            'price' => "$16.99",
            'series' => "Catwoman",
            'type' => "graphic novel",
        ],
    ];

    $quickLinks = [
        'digital-comics' => [
            'img' => 'images/buy-comics-digital-comics.png',
            'text' => 'DIGITAL COMICS'
        ],
        'merchandise' => [
            'img' => 'images/buy-comics-merchandise.png',
            'text' => 'DC MERCHANDISE'
        ],
        'subscription' => [
            'img' => 'images/buy-comics-subscriptions.png',
            'text' => 'SUBSCRIPTION'
        ],
        'comic-shop-locator' => [
            'img' => 'images/buy-comics-shop-locator.png',
            'text' => 'COMIC SHOP LOCATOR'
        ],
        'dc-power-visa' => [
            'img' => 'images/buy-dc-power-visa.svg',
            'text' => 'DC POWER VISA'
        ],
    ];
    return view('home', compact('links', 'comics', 'quickLinks'));
});
