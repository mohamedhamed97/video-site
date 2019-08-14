@extends('app')
@section('title')
    الصفحه الشخصيه
    @endsection
@section('content')
    <div class="worker-header border-ccc" id="worker-header">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <h4 class="alert alert-success text-center">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </h4>
            {{\Illuminate\Support\Facades\Session::forget('success')}}
        @endif

        <div class="worker-info" id="worker-info">
            <img src="images/44716225_929226100607232_6557640987626176512_n.jpg" height="200px" width="200px" />
            <h2 class="text-dark">{{$user->name}}</h2>
            <h4> {{$user->title}}</h4>
            <ul class="list-unstyled ">

                <li> <a href="{{$user->facebook}}"><i class="fab fa-facebook-f"></i></a> -</li>
                @if(!empty($user->twitter))<li> <a href="{{$user->twitter}}"><i class="fab fa-twitter"></i></a> -</li>@endif
                @if(!empty($user->linedin))<li> <a href="{{$user->linkedin}}"><i class="fab fa-linkedin"></i></a> -</li> @endif
                @if(!empty($user->freelancer)) <li><a href="{{$user->freelancer}}"><i class="fas fa-dollar-sign"></i></a> -</li>@endif
                @if(!empty($user->website))<li> <a href="{{$user->website}}"><i class="fab fa-internet-explorer"></i></a> -</li>@endif
                @if(!empty($user->github))<li> <a href="{{$user->github}}"><i class="fab fa-github"></i></a> </li>@endif


            </ul>
        </div>
    </div>

    <div class="worker-skills text-right border-ccc">
        <div class="container">
            <h3>{{$user->name}}</h3>
            <p>{{$user->bio}} .</p>
            <h3>مهارات </h3>
            <ul class="list-unstyled">
               @foreach($skill as $sk)
                    <li><i class="fa fa-check"></i> {{$sk}} </li>
                   @endforeach
            </ul>
        </div>
    </div>

    <!-- start the eduction-->
    <div class="edution border-ccc text-right">
        <div class="container">
            <div class="row">
                <div class="col-md-6 border-left">
                    <h3>  الؤهل التعليمي</h3>
                    <p>{{$user->eduction}} .</p>
                    <p>من <strong>{{$user->eduction_from}}</strong> إلي <strong>{{$user->eduction_to}}</strong></p>
                </div>
                <div class="col-md-6">
                    <h3>وظيفتي الأن</h3>
                    <p>{{$user->you_job}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- start the github-->
    <div class=" contact-sec worker-skills border-ccc text-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 border-left">
                        <h3>للتواصل مع
                            {{$user->name}}</h3>

                       <ul>
                           <li>{{$user->phone}}</li>
                           <li> <a href="{{$user->facebook}}"><i class="fab fa-facebook-f"></i></a> </li>
                           @if(!empty($user->twitter))<li> <a href="{{$user->twitter}}"><i class="fab fa-twitter"></i></a> </li>@endif
                           @if(!empty($user->linedin))<li> <a href="{{$user->linkedin}}"><i class="fab fa-linkedin"></i></a> </li> @endif
                           @if(!empty($user->freelancer)) <li><a href="{{$user->freelancer}}"><i class="fas fa-dollar-sign"></i></a> </li>@endif
                           @if(!empty($user->website))<li> <a href="{{$user->website}}"><i class="fab fa-internet-explorer"></i></a> </li>@endif
                           @if(!empty($user->github))<li> <a href="{{$user->github}}"><i class="fab fa-github"></i></a> </li>@endif
                       </ul>
                    </div>
                    <div class="col-md-6">
                        dsff
                    </div>
                </div>
            </div>
    </div>

@endsection