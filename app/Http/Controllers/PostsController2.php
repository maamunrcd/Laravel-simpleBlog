<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use App\Post;
use carbon\carbon;
use App\Repositories\Posts;

class PostsController2 extends Controller {

    public function __construct() {
        $this->middleware('auth')->except('index', 'view', 'indexByTag');
    }

    public function index(Posts $posts) {
        $posts=$posts->all();
        //$posts=(new \App\Repositories\Posts)->all();
        //Try this using filter method.. Methos call post model

       /*=====This variable compe form post model
        $posts=Post::latest()
            ->filter(request(['month','year']))
            ->get();
        */

        /*archive data*/
        $archives=Post::archives();
        //$posts = Post::all();
        //$posts = Post::latest()->get(); //Show the last inserted data Desending order:)
//        $posts=Post::latest();
//        if($month=request('month')){
//            $posts->whereMonth('created_at',carbon::parse($month)->month);
//        }
//        if($year=request('year')){
//            $posts->whereYear('created_at',carbon::parse($year)->year);
//        }
//        $posts=$posts->get();


        return view('posts2.index', compact('posts'));
    }
    public function create() {
        return view('posts2.create');
    }

    public function store() {
        // If i show all data form requerst data use dd(request()->all()) and dd(request('title')) Or dd(request('title','body'))
        //=======1st way to insert data
//        $post= new Post;
//        $post->title=request('title');
//        $post->body=request('body');
//        $post->save();
        //=====End Frist way
        // Data Validation Laravel
        $this->validate(request(), [
            'title' => 'required|unique:posts|min:10|max:200',
            'body' => 'required'
        ]);

        //2nd way to insert data aita ta kaj korta chaila model a geya portected use korta hoba.....
//        Post::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//        ]);
        ////3rd way to insert data aita ta kaj korta chaila model a geya method call korta hoba atar method name publish
        auth()->user()->publish(
                new Post(request(['title','body']))
        );
        //Alert Message Show.....
        session()->flash('message','Your Post Published');
        //========3 way data with any validaction
//        Post::create(request()->all());
        return redirect()->home();

        // Create a new post using the request data
        // Save it to the database
        // Redirect to the post page
    }

    public function view($id) {
        $iddata = Post::find($id);
        return view('posts2.view', compact('iddata'));
    }

}
