{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}





@extends('layouts.single')

{{-- タイトル・メタディスクリプション --}}
@section('title', 'ログイン画面 | おけいcom')
@section('description', 'ログイン画面')

{{-- CSS --}}
@push('css')
@endpush

{{-- 本文 --}}
@section('content')
    @error('email')
        <div class="l-alart errorAlart" role="alert">
            <p>メールアドレスの登録がありません。</p>
        </div>
    @enderror
    @error('password')
        <div class="l-alart errorAlart" role="alert">
            <p>メールアドレスかパスワードが異なります。</p>
        </div>
    @enderror
    <div class="l-wrap--single login">
        <div class="l-wrap--title">
            <h1 class="c-headline--screen u-textAlign__center">ログイン</h1>
        </div>
        <div class="l-wrap--body">
            <div class="l-wrap--main l-wrap--detail">

                <div class="l-content--detail">

                    <div class="l-content--detail__inner">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="l-content--input">
                                <p class="l-content--input__headline">メールアドレス</p>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="info@okeicom.com" autofocus>
                            </div>
                            <div class="l-content--input">
                                <p class="l-content--input__headline">パスワード</p>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            <div class="l-button--confirm">
                                <div class="l-button--confirm__inner">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="l-button--submit">
                                <input class="c-button--square__pink" type="submit" name="" value="ログインする">
                            </div>
                            <div class="l-content--inputLink">
                                <ul>
                                    <li class="u-mb10"><a href="{{ route('password.request') }}" class="u-text--link">パスワードを忘れた方はコチラ</a></li>
                                    <li><a href="{{ route('email.verify') }}" class="u-text--link">新規登録はコチラ</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
