<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, <strong>dolor</strong> sit amet consectetur adipisicing elit. Eius, cumque.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        //dd($title, $content);
        session(['alert' => __('Сохранено!')]);
        //return 'Запрос создание поста';
        return redirect()->route('user.posts.show', 123);
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, <strong>dolor</strong> sit amet consectetur adipisicing elit. Eius, cumque.',
        ];
        
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum, <strong>dolor</strong> sit amet consectetur adipisicing elit. Eius, cumque.',
        ];
        
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        //dd($title, $content);
        session(['alert' => __('Сохранено!')]);
        //return 'Запрос изменение поста';
        //return redirect()->route('user.posts.show', $post);
        return redirect()->back();
    }

    public function delete($post)
    {
        //return 'Запрос удаление поста';
        return redirect()->route('user.posts');
    }

    public function like()
    {
        return 'Лайк + 1';
    }
}
