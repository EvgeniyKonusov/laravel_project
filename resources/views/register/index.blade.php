@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{__('Регистрация')}}
            </x-card-title>

            <x-slot name="right">
                <a href="{{route('login')}}">
                    {{__('Вход')}}
                </a>
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-form action="{{route('register.store')}}" method="POST">
                @csrf
                <x-form-item>
                    <label class="required">{{__('Имя')}}</label>
                    <x-input name="name" autofocus/>
                </x-form-item>

                <x-form-item>
                    <label class="required">{{__('Email')}}</label>
                    <x-input type="email" name="email"/>
                </x-form-item>

                <x-form-item>
                    <label class="required">{{__('Пароль')}}</label>
                    <x-input type="password" name="password"/>
                </x-form-item>

                <x-form-item>
                    <label class="required">{{__('Пароль еще раз')}}</label>
                    <x-input type="password" name="password_confirmation"/>
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="remember" value="1">
                        {{__('Я согласен на обработку пользовательских данных')}}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{__('Войти')}}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection