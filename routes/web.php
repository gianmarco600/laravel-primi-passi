<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'title' => 'home page',
        'parag' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit perferendis accusamus placeat repudiandae. Beatae minima consequatur corrupti totam perferendis nam, porro est blanditiis corporis quae nostrum quasi quaerat officiis iusto.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit perferendis accusamus placeat repudiandae. Beatae minima consequatur corrupti totam perferendis nam, porro est blanditiis corporis quae nostrum quasi quaerat officiis iusto.'
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/contatti', function () {
    $data = [
        'title' => 'contatti',
        'nomi' => [
            'franco' => '435925043968',
            'pippo' => '345234534556',
            'alice'=>'325823049687'
            ]
    ];
    return view('contatti', $data);
})->name('contatti');

Route::get('/about', function () {
    $data = [
        'title' => 'about us',
        'parag' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.    Optio culpa voluptatem omnis id ad, laborum aliquid blanditiis aperiam ipsam explicabo sint veniam debitis deleniti modi voluptas saepe eum quae mollitia.'
    ];
    return view('about-us', $data);
})->name('about-us');