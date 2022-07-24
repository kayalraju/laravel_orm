<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class OneToManyController extends Controller
{
    //add author
    public function add_author(){
        $author= new Author();
        $author->name="ritam saha ";
        $author->password="ritam23";
        $author->save();
    }

    //add post 

    public function add_post($id){
        $author=Author::find($id);
        $post=new Post();
        $post->title="node blog";
        $post->content="node blog tutorial";
        $author->post()->save($post);
    }


    //get post base from author id
    public function show_post($id){
        $post=Author::find($id)->post;
        dd($post);
        return $post;
        
    }


       //get author base from post id
    public function show_author($id){
        $author=Post::find($id)->author;
        dd($author);
        return $author;
        
    }


    //fetch all data

    public function all_post_author($id){
        $author =Author::find($id);
        //dd($author->name);
        //to get the particluar user how many post they create.
        //dd($author->post);
        //to get the particluer post fild
        foreach ($author->post as $post) {
            
            echo $post->title;
            echo $post->content;
        }
        //return $author;
    }
}
