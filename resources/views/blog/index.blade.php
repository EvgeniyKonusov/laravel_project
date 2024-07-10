@extends('layouts.base')

@section('page.title', 'Наш блог')

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
        </x-container>
    </section>

    <h1 class="mb-5">
        Список постов
    </h1>

    @if(empty($posts))
        Нет ни одного поста.
    @else
        @foreach ($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href="{{ route('blog.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h5>

                <p>
                    {!! $post->content !!}
                </p>
            </div>            
        @endforeach
    @endif
@endsection
