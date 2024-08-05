@extends('layouts.main')

@section('page.title', 'Наш блог')

@section('main.content')
    <x-title>
        {{__('Список постов')}}
    </x-title>

    @include('blog.filter')

    @if(empty($posts))
        {{__('Нет ни одного поста')}}
    @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post" />       
                </div>            
            @endforeach
        </div>
    @endif
@endsection
    {{-- <h1 class="mb-5">
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
@endsection --}}

