<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
    [
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
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        //$post = [];
        //foreach($blog_posts as $p) {
          //if($p["slug"] === $slug) {
            //$post = $p;
            //}
       //}

       return $post->firstWhere('slug', $slug);
    }
}
