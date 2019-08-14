@extends('app')
@section('title')
    صفحه الدخول
@endsection
@section('meta_tag')

@endsection
@section('meta_des')

@endsection

@section('content')

<div class="register  text-center">
    <div class="container">
        <h2><i class="fa fa-user text-dark"></i>  الدخول </h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="form-group">
            <input type="email" class="form-control" placeholder="البريد الألكتروني" />

            <span><i class="fa fa-envelope"></i></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control"
                   placeholder="الرقم السري" />

            <span><i class="fa fa-eye"></i></span>
        </div>

        <button class="btn btn-dark"> الدخول <i class="fa fa-arrow-circle-left "></i> </button>
        </form>
        <br>
        <br>
        <a class="text-primary" href="{{route('register')}}">  تسجيل الدخول</a>
        -
        <a class="text-primary" href="#">هل نسيت كلمه السر ؟</a>

    </div>

</div>
@endsection
