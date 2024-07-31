@extends('layouts.main')

@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{__('Создать пост')}}

        <x-slot name="link">
            <a href="{{route('user.posts')}}">
                {{__('Назад')}}
            </a>
        </x-slot>
    </x-title>

    <x-form action="{{route('user.posts.store')}}" method="POST">
        <x-form-item>
            <x-label required>{{__('Название поста')}}</x-label>
            <x-input name="title" autofocus/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{__('Содержание поста')}}</x-label>
            {{-- <x-textarea name="content" rows="10"/> --}}
            <input id="content" type="hidden" name="content">
            <trix-editor input="content"></trix-editor>
        </x-form-item>

        <x-button type="sumbit">
            {{__('Создать пост')}}
        </x-button>
    </x-form>

@endsection

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
    <script src="/js/trix.js"></script>
@endpush