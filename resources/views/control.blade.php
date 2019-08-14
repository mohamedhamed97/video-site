@extends('app')
@section('title')
    لوحه التحكم
@endsection
@section('content')
    <div class="dashboard transation text-right" id="dashboard">
        @if
        <div class="container">

            <button class="btn btn-dark btn-dashboard" data-class="user-info">تعديل البينات الشخصيه </button>
            <button class="btn btn-dark btn-dashboard" data-class="user-eduction">تعديل المؤهل التعليمي </button>
            <button class="btn btn-dark btn-dashboard" data-class="user-account">تعديل الحسابات الشخصيه </button>

            </ul>

            <div class="opactiy-div">
                <div class="" id="user-info">
                    <h2><i class="fa fa-user text-dark"></i> تسجبل الدخول </h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="أسم المستخدم" />
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="البريد الألكتروني" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"
                                   placeholder="الرقم السري" />

                            <span><i class="fa fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="re_password" class=" form-control"
                                   placeholder="تأكيد الرقم السري" />

                            <span><i class="fa fa-eye"></i></span>
                        </div>
                        <button class="btn btn-dark">تسجيل الدخول <i class="fa fa-arrow-circle-left "></i> </button>
                    </form>
                </div>
                <div class="opacity-none" id="user-eduction">
                    <h2><i class="fa fa-user text-dark"></i> إضافه مؤهل تعليمي  </h2>
                    <form>
                        <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="إضف مؤهلك">
                    </textarea>
                            <span><i class="fa fa-user"></i></span>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاريخ البدأ" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تارخ التخرج" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>

                        <button class="btn btn-dark"> إضافه المؤهل <i class="fa fa-arrow-circle-left "></i> </button>
                    </form>
                </div>

                <div class="opacity-none" id="user-account">
                    <h2><i class="fa fa-user text-dark"></i> تعديل حساباتم </h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="فيس بوك" />
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" لينكدن" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" موقعك" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" تويتر" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" حسابك علي موقع العمل الحر" />

                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <button class="btn btn-dark">تسجيل الدخول <i class="fa fa-arrow-circle-left "></i> </button>
                    </form>
                </div>
            </div>



        </div>
    </div>
@endsection