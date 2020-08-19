<?php
// Je kan de controller ook aanmaken via een generator (cmd) met de make:controller command

namespace App\Http\Controllers;

use DB;     //deze manier is makkelijker om te connecteren met de database
use App\Post;

class PostsController extends Controller
{
    public function show($slug) 
    {
        //$post = \DB::table('posts')->where('slug', $slug)->first();   //de \ voor database is om te connecteren (maar zie use DB;)
        //$post = Post::where('slug', $slug)->firstOrFail();            //cleanere vorm

        //om de volledige code te zien
        /*dd($post);*/

        //gelinkt aan database dus dit is niet meer nodig
        /*$posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];*/
        
        //niet meer nodig door firstOrFail();
        /*if (! $post) {
            abort(404);
        }*/

        //opgeruimd, minste code
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}