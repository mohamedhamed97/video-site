@extends('app')
@section('title')
    الصفحه الرئيسيه
@endsection
@section('content')
    <div class="home" id="home">

        <div class="overlay">

        </div>
        <div class="home-text" id="home-text">
            <h1>عمال فارغين </h1>
            <p>  يوجد هنا العديد من العمال الفارغين والباحثين عن العمل</p>
            @if(\Illuminate\Support\Facades\Auth::guest())
                <div>
                    <a href="{{route('register')}}"><button class="btn btn-dark"> تسجيل الدخول</button></a>
                    <a href="{{route('login')}}"><button class="btn btn-primary">الدخول</button></a>
                </div>

            @endif
        </div>

    </div>
@endsection
