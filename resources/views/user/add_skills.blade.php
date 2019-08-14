@extends('app')
@section('title')
    أضف مهاراتك
@endsection
@section('content')
     <div class="container" id="user-skills">
        <button style="margin-bottom: 20px;margin-top: 20px"  type="button" class=" btn btn-info " id="add-skills-btn"> مهاره جديده <i class="fa fa-plus "> </i> </button>
         <button style="margin-bottom: 20px;margin-top: 20px"  type="button" class=" btn btn-danger " id="delete-skills-btn"> حذف مهاره <i class="fas fa-trash"></i> </button>

         <form id="user-skills-form" method="post" action="{{route('add_user_skills')}}">
            {{csrf_field()}}
            <input type="text" class="form-control" placeholder="مهارتك(اجباري)" name="skills[]"/>
             <button  type="submit" class="btn btn-dark float-right" id="add-skills-btn"> إضافه المهارات <i class="fa fa-arrow-circle-left "> </i> </button>
             <span class="text-danger float-right">
                           لايمكن أن ترك أي حقل فارغ ولا يزيد الحقل عن 100 حرف ولا تزيد المهارات عن 5 .
                 </span>

        </form>
    </div>

@endsection