<?php

namespace App\Http\Controllers;

use AdvanceSearch\AdvanceSearchProvider\Search;
use App\skills;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    function index(){
        $user = Auth::user();
        $skills = skills::where('user_id' , $user->id)->first();

        $skill = json_decode($skills->skills);
        return view('user.dashboard' , compact('user' , 'skill'));
    }
    function edit_user(Request $request){
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
        if ($user_model->save()){
            Session::put('success' , 'تم تعديل بيناتك بنجاح');
            return redirect()->route('control-panel');
        }else{
            Session::put('error' , ' لم نتمكن من تعديل بيناتك يرجي المحاوله مره أخره');
            return redirect()->route('control-panel');

        }


    }

    function edit_user_skills(Request $request){
        $user = Auth::user();
        if($user->complete == 1 ){
                $skill_model = skills::where('user_id' , $user->id)->first();
                $validatedData = $request->validate([
                    'skills.*' => 'required|min:1|max:6|string',
                ]);
                $data =  json_encode($request->skills);
                $skills = skills::findOrFail($skill_model->id);
                $skills->user_id = $user->id;
                $skills->skills = $data;
                if($skills->save()){
                    Session::put('success' , 'تم تعديل مهاراتك بنجاح');
                    return redirect()->route('control-panel');
                }else{
                    Session::put('error' , 'حدث خطأ حاول مره اخري !');
                    return redirect()->route('control-panel');
                }

        }else{
            return view('user.complete_profile');
        }
    }

    function search(Request $request){
        $validatedData = $request->validate([
            'search' => 'required|min:1|string',
        ]);

      $search =   \AdvanceSearch\AdvanceSearchProvider\Facades\SearchFacades::search(
            "User" ,
            ['title' , 'bio' , 'eduction'] ,
            $request->search ,
            null,
            ['id'  , 'desc'] ,
            true ,
            30
        );
      dd($search);
      $thesearch = $request->search;
       return view('workers.profiles' , compact('search' , 'thesearch'));
    }
    function worker_profile($id){
        $user = User::findOrFail($id);
        $skills = skills::where('user_id' , $user->id)->first();
        $skill = json_decode($skills->skills);
        return view('workers.profile' , compact('user' , 'skill'));

    }


}
