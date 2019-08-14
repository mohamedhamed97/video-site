@extends('app')
@section('title')
comlete your profile
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
            <h3 class="btn btn-info btn-dashboard">    استكمال بيناتك <i class="fa fa-user text-white"></i>  </h3>

          <hr>

            <div class="opactiy-div">
                    <form method="post" action="{{route('complete-profile_data')}}">
                        {{ csrf_field() }}

                        <div class="row">

                            <div class="form-group col-md-6">
                                <textarea required name="eduction" style="padding-right: 30px;" type="text" class="form-control" placeholder=" أضف مؤهلك أو الكليه التي تدرس بها(مطلوب) ">{{old('eduction')}}</textarea>
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
                                <textarea required name="bio" style="padding-right: 30px;" type="text" class="form-control" placeholder=" أكتب نبذه صغيره عنك(مطلوب) ">{{old('bio')}}</textarea>
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
                                <input required name="eduction_from" type="text" class="form-control" placeholder="تاريخ بدأ الدراسه(مطلوب)"  value="{{old('eduction_from')}}">

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
                                <input required name="eduction_to" type="text" class="form-control" placeholder="تارخ التخرج(مطلوب)" value="{{old('eduction_to')}}">

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
                                <input required name="phone" type="number" class="form-control" placeholder="رقم هاتفك(مطلوب) "
                                       value="{{old('phone')}}"/>

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
                                <input  name="your_job" type="text" class="form-control" placeholder="وظيفتك الأن(اختياري) "
                                       value="{{old('your_job')}}"/>

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
                                <input required name="title" type="text" class="form-control" placeholder="لقبك الوظيفي(مطلوب) "  value="{{old('title')}}">

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
                                       placeholder="فيس بوك(مطلوب)" value="{{old('facebook')}}">
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
                                <input name="twitter" type="url" class="form-control" placeholder=" تويتر(اختياري)"
                                       value="{{old('twitter')}}"/>

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
                                <input name="linkedin" type="url" class="form-control" placeholder=" لينكدن(اختياري)"
                                       value="{{old('linkedin')}}"
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
                                <input name="github" type="url" class="form-control" placeholder=" (اختياري)github"
                                       value="{{old('github')}}"
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
                                <input name="website" type="url" class="form-control" placeholder=" موقعك(اختياري)"
                                       value="{{old('website')}}"/>

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
                                <input name="freelancer" type="url" class="form-control" placeholder=" حسابك علي موقع العمل الحر(اختياري)"
                                       value="{{old('freelancer')}}"/>

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

                        <button class="btn btn-dark"> استكمال بيناتك <i class="fa fa-arrow-left  "></i> </button>
                    </form>
                </div>
            </div>



        </div>
    </div>
@endsection