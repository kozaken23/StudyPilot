@extends('layouts.login_register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login_register.css') }}">

@endsection

@section('content')

<div class="form">
    <div class="form__header">
        <h2 class="form__header-logo">Register</h2>
    </div>
    <form action="/register" class="input-form" method="post" novalidate>
        @csrf
        <!-- acount-name -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__goutp-content">
                <div class="form__input--text">
                    <input  class="form__input--text-item" type="text" name="name" value="{{old('name')}}" placeholder="山田 太郎"/>
                </div>
                <div class="form__error">
                    @error('name')
                    <div class="form_error">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__goutp-content">
                <div class="form__input--text">
                    <input  class="form__input--text-item" type="email" name="email" value="{{old('email')}}" placeholder="taro@example.com"/>
                </div>
                <div class="form__error">
                    @error('email')
                    <div class="form_error">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- paaword -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__goutp-content">
                <div class="form__input--text">
                    <input class="form__input--text-item" type="password" name="password" placeholder="password" />
                </div>
                <div class="form__error">
                    @error('password')
                    <div class="form_error">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
    <div class="link_nav">
        <a class="link_nav--item" href="/login">ログインの方はこちら</a>
    </div>
    
</div>

@endsection