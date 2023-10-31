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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About" ,
        "Name" => "Indillah Syihabudin" ,
        "Email" => "AdanAhmad551@gmail.com" ,
        "Image" => "KangAdan.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama" ,
            "slug" => "judul-post-pertama" ,
            "author" => "Adan Ahmad Erlangga" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos harum accusantium expedita culpa optio reprehenderit atque ducimus placeat pariatur id, blanditiis, inventore doloribus earum doloremque neque magnam laudantium libero! Quidem cupiditate esse voluptatum dolorem id hic nulla asperiores in beatae molestias recusandae natus ut facilis quibusdam voluptates, vero iure accusamus, eos voluptatem enim velit laudantium fugit optio. Illo voluptatibus harum quaerat fugiat ullam sed, aspernatur nulla amet quia mollitia doloribus, maiores quisquam ipsa reprehenderit eligendi alias officia sit illum quis veritatis, iusto deleniti est quod! Accusamus, facere asperiores, rerum, totam illo culpa amet repellendus aspernatur ratione molestiae dolor debitis?"
        ],
        [
            "title" => "judul post kedua" ,
            "slug" => "judul-post-kedua" ,
            "author" => "Indillah Syihabuddin" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos harum accusantium expedita culpa optio reprehenderit atque ducimus placeat pariatur id, blanditiis, inventore doloribus earum doloremque neque magnam laudantium libero! Quidem cupiditate esse voluptatum dolorem id hic nulla asperiores in beatae molestias recusandae natus ut facilis quibusdam voluptates, vero iure accusamus, eos voluptatem enim velit laudantium fugit optio. Illo voluptatibus harum quaerat fugiat ullam sed, aspernatur nulla amet quia mollitia doloribus, maiores quisquam ipsa reprehenderit eligendi alias officia sit illum quis veritatis, iusto deleniti est quod! Accusamus, facere asperiores, rerum, totam illo culpa amet repellendus aspernatur ratione molestiae dolor debitis?"
        ],
    ]; 

});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "judul post pertama" ,
            "slug" => "judul-post-pertama" ,
            "author" => "Adan Ahmad Erlangga" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos harum accusantium expedita culpa optio reprehenderit atque ducimus placeat pariatur id, blanditiis, inventore doloribus earum doloremque neque magnam laudantium libero! Quidem cupiditate esse voluptatum dolorem id hic nulla asperiores in beatae molestias recusandae natus ut facilis quibusdam voluptates, vero iure accusamus, eos voluptatem enim velit laudantium fugit optio. Illo voluptatibus harum quaerat fugiat ullam sed, aspernatur nulla amet quia mollitia doloribus, maiores quisquam ipsa reprehenderit eligendi alias officia sit illum quis veritatis, iusto deleniti est quod! Accusamus, facere asperiores, rerum, totam illo culpa amet repellendus aspernatur ratione molestiae dolor debitis?"
        ],
        [
            "title" => "judul post kedua" ,
            "slug" => "judul-post-kedua" ,
            "author" => "Indillah Syihabuddin" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos harum accusantium expedita culpa optio reprehenderit atque ducimus placeat pariatur id, blanditiis, inventore doloribus earum doloremque neque magnam laudantium libero! Quidem cupiditate esse voluptatum dolorem id hic nulla asperiores in beatae molestias recusandae natus ut facilis quibusdam voluptates, vero iure accusamus, eos voluptatem enim velit laudantium fugit optio. Illo voluptatibus harum quaerat fugiat ullam sed, aspernatur nulla amet quia mollitia doloribus, maiores quisquam ipsa reprehenderit eligendi alias officia sit illum quis veritatis, iusto deleniti est quod! Accusamus, facere asperiores, rerum, totam illo culpa amet repellendus aspernatur ratione molestiae dolor debitis?"
        ],
    ]; 


    $new_post= [] ;

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('posts', [
        "title" => "Single post",
        "post" => $new_post
    ]);

    return view('post', [
        "title" => "Single post"
    ]);
});
