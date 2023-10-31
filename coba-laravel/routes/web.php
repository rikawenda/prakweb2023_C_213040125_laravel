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
        "title" => "About",
        "name" => "Rika Febriyanti E. Wenda",
        "email" => "rika14322@gmail.com",
        "image" => "wenda.jpg"
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Pelet Manjur Abang Geprek Bajak",
            "slug" => "judul-post-pertama",
            "author" => "Wenda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        [
            "title" => "Cintaku Kesruduk Peternak Banteng",
            "slug" => "judul-post-kedua",
            "author" => "Deby",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        [
            "title" => "M&V Cinta Mati Abadi 100%",
            "slug" => "judul-post-ketuga",
            "author" => "Vina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single posts
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Pelet Manjur Abang Geprek Bajak",
            "slug" => "judul-post-pertama",
            "author" => "Wenda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        [
            "title" => "Cintaku Kesruduk Peternak Banteng",
            "slug" => "judul-post-kedua",
            "author" => "Deby",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        [
            "title" => "M&V Cinta Mati Abadi 100%",
            "slug" => "judul-post-ketuga",
            "author" => "Vina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quam blanditiis ut odit dolor dolorem quos praesentium culpa saepe incidunt voluptas nobis adipisci quae neque totam earum minus aperiam ad distinctio numquam! Esse culpa vitae nisi accusantium omnis recusandae optio accusamus tempore rerum voluptatem repellat non ex nulla dolore est architecto quod tenetur, sequi impedit eveniet iure aliquam atque? Voluptatum assumenda magni, totam iste tenetur aliquid voluptatem quaerat dolorum ullam delectus ab sequi, voluptate odit temporibus velit sit quidem obcaecati quo nostrum, recusandae voluptatibus nemo alias. Distinctio aliquam cumque ipsam aut architecto, blanditiis explicabo, laudantium rerum impedit, excepturi necessitatibus voluptatem!"
        ],
        ];

        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});