@extends('app')
@section('title')
    تعديل بيناتك الشخصيه
@endsection
@section('content')

    <div class="dashboard transation text-right" id="dashboard">

        <div class="container">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <h4 class="alert alert-success text-center">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </h4>
                {{\Illuminate\Support\Facades\Session::forget('success')}}
            @endif
            @if(\Illuminate\Support\Facades\Session::has('error'))
                <h4 class="alert alert-danger text-center">
                    {{\Illuminate\Support\Facades\Session::get('error')}}
                </h4>
                {{\Illuminate\Support\Facades\Session::forget('error')}}
            @endif
            <p><i>يمكنك تعديل بيناتك الشخصيه </i> <i class="fa fa-edit"></i> </p>
            <button class="btn btn-info btn-dashboard" data-class="user-info"> بيناتك الشخصيه </button>
            <button class="btn btn-dark btn-dashboard" data-class="edit-skills"> مهاراتك الشخصيه </button>
            <hr>
            <div class="opactiy-div">
                <div class="opacity-block" id="user-info">
                    <h2><i class="fa fa-user text-dark"></i> إضافه مؤهل تعليمي  </h2>

                    <form method="post" action="{{route('edit_user_info')}}">
                        {{ csrf_field() }}

                        <div class="row">

                            <div class="form-group col-md-6">
                                <textarea required name="eduction" style="padding-right: 30px;" type="text" class="form-control" placeholder=" أضف مؤهلك أو الكليه التي تدرس بها أو وظيفتك الحاليه">{{$user->eduction}}</textarea>
                                <span><i class="fa fa-user"></i></span>
                                <span>
                                @if ($errors->has('eduction'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('eduction') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-6">
                                <textarea required name="bio" style="padding-right: 30px;" type="text" class="form-control" placeholder=" أكتب نبذه صغيره عنك">{{$user->bio}}</textarea>
                                <span><i class="fa fa-user"></i></span>
                                <span>
                                @if ($errors->has('bio'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('bio') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>


                            <div class="form-group col-md-6">
                                <input required name="eduction_from" type="text" class="form-control" placeholder="تاريخ البدأ"  value="{{$user->eduction_from}}">

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('eduction_from'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('eduction_from') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>
                            <div class="form-group col-md-6">
                                <input required name="eduction_to" type="text" class="form-control" placeholder="تارخ التخرج" value="{{$user->eduction_to}}">

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('eduction-to'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('eduction-to') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-6">
                                <input required name="phone" type="number" class="form-control" placeholder="رقم هاتفك "
                                       value="{{$user->phone}}"/>

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('phone'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('phone') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>
                            <div class="form-group col-md-6">
                                <input required name="your_job" type="text" class="form-control" placeholder="وظيفتك الأن "
                                       value="{{$user->you_job}}"/>

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('you_job'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('you_job') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-12">
                                <input required name="title" type="text" class="form-control" placeholder="لقبك الوظيفي "  value="{{$user->title}}">

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('title'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>


                            <div class="form-group col-md-6">
                                <input required type="text" class="form-control" name="facebook"
                                       placeholder="فيس بوك" value="{{$user->facebook}}">
                                <span><i class="fa fa-user"></i></span>
                                <span>
                                @if ($errors->has('facebook'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('facebook') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="twitter" type="url" class="form-control" placeholder=" تويتر"
                                       value="{{$user->twitter}}"/>

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('twitter'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('twitter') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="linkedin" type="url" class="form-control" placeholder=" لينكدن"
                                       value="{{$user->linkedin}}"
                                />

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('linkedin'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('linkedin') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="github" type="url" class="form-control" placeholder=" github"
                                       value="{{$user->github}}"
                                />

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('github'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('github') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="website" type="url" class="form-control" placeholder=" موقعك"
                                       value="{{$user->website}}"/>

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('website'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('website') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="freelancer" type="url" class="form-control" placeholder=" حسابك علي موقع العمل الحر"
                                       value="{{$user->freelancer}}"/>

                                <span><i class="fa fa-envelope"></i></span>
                                <span>
                                @if ($errors->has('freelancer'))
                                        <div class="help-block alert alert-danger ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $errors->first('freelancer') }}</strong>
                                    </div>
                                    @endif
                             </span>
                            </div>



                        </div>

                        <button class="btn btn-dark"> تعديل بيناتك <i class="fa fa-edit  "></i> </button>
                    </form>


                </div>

                <!----------------------------------------------------------------------------------------------------------------------------->

                <div class="opacity-none" id="edit-skills">
                    <button style="margin-bottom: 20px;"  type="button" class=" btn btn-light float-left" id="edit-skills-btn"> مهاره جديده <i class="fa fa-plus "> </i> </button>
                    <form method="post" action="{{route('edit_user_skills')}}">
                        {{ csrf_field() }}
                        @foreach($skill as $sk)
                            <input  value="{{$sk}}" type="text" class="form-control" placeholder="مهارتك" name="skills[]"/>
                            <br>
                        @endforeach

                        <button  type="submit" class="btn btn-dark"> تعديل المهارات <i class="fa fa-edit "> </i> </button>

                    </form>
                </div>
            </div>



        </div>
    </div>
@endsection