<?php

namespace App\Http\Controllers;
use App\Models\iVisiters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class iUserController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:ivisiter,email'],
            'project' => ['required'],
        ]);

        if($validator->fails()){
            return redirect()->back()->withStatus("Invalid Details!");
        }
        else{
            $username = $request['name'];
            $email = $request['email'];
            $project = $request['project'];
            $message = $request['message'];
    
            $users = new iVisiters();
    
            $users->name = $username;
            $users->email = $email;
            $users->project = $project;
            $users->message = $message;
    
            $users->save();
            return redirect('/about');

        }
    }

    // dd('clicked');
    // die;
    // }
}
