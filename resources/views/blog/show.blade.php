@extends('layouts.main')

@section('page.title', $post->title)

@section('main.content')
    <x-title>
        {{$post->title}}
    </x-title>

    {!! $post->content !!}
@endsection