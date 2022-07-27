<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Framework App",
            "slug" => "framework-app",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, doloremque nisi magnam ipsam, asperiores a aliquam iure ratione dolorum inventore nemo quod consequatur reprehenderit illo, quasi incidunt praesentium alias harum debitis laborum rerum. Expedita minima, doloribus nemo a voluptatibus minus quibusdam commodi labore placeat, est fugiat et facilis fuga rerum aperiam qui quae at corporis voluptas sit deleniti inventore. Libero laudantium itaque, mollitia, perferendis fuga illo tenetur eveniet voluptatum alias dignissimos voluptatibus aperiam explicabo quod suscipit! Modi dolores ab fugit!"
        ],
        [
            "title" => "Framework App2",
            "slug" => "framework-app2",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse et explicabo officia temporibus labore. Numquam tempora dolorem libero, aperiam eum unde ducimus inventore, odit, autem deleniti amet officiis pariatur officia blanditiis eius iste. Cumque molestiae eos assumenda pariatur corporis, quo facilis porro cupiditate, unde maxime aliquam culpa! Consequatur vitae inventore dolorem illo praesentium accusamus a, facere vel expedita maiores explicabo neque ea! Reiciendis temporibus asperiores, odit labore rerum exercitationem voluptatem sunt incidunt voluptatibus enim numquam iste. Neque rerum cumque illo magni, debitis perspiciatis corporis impedit molestiae excepturi alias eos at maxime ex soluta eligendi et quam eius non praesentium laboriosam!"
        ]    
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }   
}
