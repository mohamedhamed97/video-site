<?php

namespace App\Http\Controllers;

use App\eduction;
use App\profile;
use App\skills;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function index(){
        $user = Auth::user();
        if($user->complete === 0 ){
            return view('user.complete_profile');
        }
        $skills = skills::Where('user_id' , $user->id)->first();
        $skill = json_decode($skills->skills);
        return view('user.profile' , compact('user' , 'skill'));
    }

    function complete_profile(){
        $user = Auth::user();
        if($user->complete == 0){

            return view('user.complete_profile');
        }else{
            return view('profile');
        }
    }
    function complete_profile_data(Request $request){
        $validatedData = $request->validate([
            'eduction' => 'required|min:10|max:500',
            'title' => 'required|string|min:5|max:150',
            'your_job' => 'nullable|string|min:5|max:150',
            'bio' => 'required|min:50|max:500',
            'eduction_from' => 'required|max:4',
            'eduction_to' => 'required|max:4',
            'facebook' => 'required|url|max:180',
            'github' => 'nullable|url|max:180',
            'linkedin' => 'nullable|url|max:180',
            'twitter' => 'nullable|url|max:180',
            'website' => 'nullable|url|max:180',
            'freelancer' => 'nullable|url|max:180',
            'phone'=>'required|numeric|min:11'
        ]);
        $user_id = Auth::user()->id;
        $user_model = User::findOrFail($user_id);
        $user_model->eduction = $request->eduction;
        $user_model->bio = $request->bio;
        $user_model->title = $request->title;
        $user_model->you_job = $request->your_job;
        $user_model->eduction_from = $request->eduction_from;
        $user_model->eduction_to = $request->eduction_to;
        $user_model->facebook = $request->facebook;
        $user_model->linkedin = $request->linkedin;
        $user_model->twitter = $request->twitter;
        $user_model->website = $request->website;
        $user_model->freelancer = $request->freelancer;
        $user_model->github = $request->github;
        $user_model->phone = $request->phone;
        $user_model->complete  = 1;
        if ($user_model->save()){
            Session::put('success' , 'تم إضافه بيناتك بنجاح');
            return redirect()->route('add_skills');
        }else{
            Session::put('error' , ' لم نتمكن من إستكمال بيناتك يرجي المحاوله مره أخره');
            return redirect()->route('complete_profile');

        }
    }
    function add_skills(){
        $user = Auth::user();
        if($user->complete == 1 ){
            $skill = skills::where('user_id' , $user->id)->get();
            if($skill->isEmpty()){
                return view('user.add_skills');
            }else{
                return view('dashboard.edit_profile');
            }
        }else{
            return view('user.complete_profile');
        }
    }
    function add_user_skills(Request $request){
        $user = Auth::user();
        if($user->complete == 1 ){
            $skill = skills::where('user_id' , $user->id)->get();
            if($skill->isEmpty()){
                $validatedData = $request->validate([
                    'skills.*' => 'required|min:1|max:100|string',
                ]);
                $data =  json_encode($request->skills);
                $skill_model = new skills();
                $skill_model->user_id = $user->id;
                $skill_model->skills = $data;
                if($skill_model->save()){
                    Session::put('success' , 'تم إضافه مهاراتك بنجاح');
                    return redirect()->route('my_profile');
                }else{
                    Session::put('error' , 'حدث خطأ حاول مره اخري !');
                    return redirect()->route('add_skills');
                }

            }else{
                return view('dashboard.edit_profile');
            }
        }else{
            return view('user.complete_profile');
        }


    }

}
