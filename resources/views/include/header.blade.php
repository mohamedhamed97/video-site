<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    @yield('meta_tag')
    @yield('meta_des')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
<nav id="nav" class="navbar bg-dark">
    <div class="container">
        <a href="{{route('/')}}" class="navbar-brand"><h2>الرئيسيه</h2></a>
        <ul class="nav">
            @if(\Illuminate\Support\Facades\Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="register.html">تسجيل الدخول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.html">دخول</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <form method="post" action="{{route('search')}}">
                        {{csrf_field()}}
                        <input name="search" class="nav-link search-input float-left" type="text" placeholder="ابحث عن موظفين">
                        <input  class="search-button float-right btn btn-primary" type="submit" value="بحث">
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('control-panel')}}">لوحه التحكم </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.html">المفضلون </a>
                </li>

                 <a href="{{route('my_profile')}}">
                     <img class="rounded-circle border" src="https://via.placeholder.com/50/50" />
                 </a>
            @endif

        </ul>

    </div>
</nav>



