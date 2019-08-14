@extends('app')
@section('title')
    {{$thesearch}}
@endsection
@section('content')

    <div class="container">
        <div class="profile bg-dark">
            @if(empty($serach))
            <div class="row">

                @foreach($search as $ser)
                <div class="col-5">
                    <img src="images/44716225_929226100607232_6557640987626176512_n.jpg" />
                </div>
                <div class="col-7">
                    <h2><a href="{{route('worker_profile' , ['id'=>$ser->id])}}">  {{$ser->name}}</a></h2>
                    <h4>{{$ser->title}}</h4>
                    <p> {{$ser->bio}} </p>

                    <ul class="list-unstyled">

                        <li> <a href="{{$ser->facebook}}"><i class="fab fa-facebook-f"></i></a> -</li>
                        <li> <a href="{{$ser->twitter}}"><i class="fab fa-twitter"></i></a> -</li>
                        <li> <a href="{{$ser->linkedin}}"><i class="fab fa-linkedin"></i></a> -</li>
                        <li> <a href="{{$ser->freelancer}}"><i class="fas fa-dollar-sign"></i></a> -</li>
                        <li> <a href="{{$ser->website}}"><i class="fab fa-internet-explorer"></i></a> -</li>
                        <li> <a href="{{$ser->github}}"><i class="fab fa-github"></i></a> </li>

                    </ul>
                </div>

                    @endforeach
            </div>
                @else
                <h4> لم يتم العثور علي شئ مشابه ل {{$thesearch}}</h4>
            @endif
        </div>

    </div>


@endsection