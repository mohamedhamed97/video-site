@extends('app')

@section('title')
    تسجيل الدخول
    @endsection

@section('content')

<div class="register text-center">
    <div class="container">
        <h2><i class="fa fa-user text-dark"></i> تسجبل الدخول </h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                   placeholder="أسم المستخدم" />
            <span><i class="fa fa-user"></i></span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الألكتروني"  />

            <span><i class="fa fa-envelope"></i></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                   placeholder="الرقم السري" />

            <span><i class="fa fa-eye"></i></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                   placeholder="تأكيد الرقم السري" />

            <span><i class="fa fa-eye"></i></span>
        </div>
        <button class="btn btn-dark">تسجيل الدخول <i class="fa fa-arrow-circle-left "></i> </button>
        </form>
        <br>
        <br>
        <a class="text-primary" href="{{route('login')}}">لديك حساب بالفعل</a>
        -
        <a class="text-primary" href="#">هل نسيت كلمه السر ؟</a>

    </div>

</div>
@endsection
