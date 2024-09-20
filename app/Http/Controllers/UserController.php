<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(){
        $users = User::latest();

        return new UserResource(true, 'List User Data', $users);
    }

    public function Store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'usedId' => 'required',
            'email'=> 'required',
            /*'password',*/
            'gender'=> 'required',
            'nationality'=> 'required',
            'religion'=> 'required',
            'maritalStatus'=> 'required',
            'idCardImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $image = $request->files('idCardImage');
        $image->storeAs('public/Users', $image->hashName());

        $user = User::create([
            'name' => $request->name,
            'usedId' => $request->usedId,
            'email'=> $request->email,
            'gender'=> $request->gender,
            'nationality'=> $request->nationality,
            'religion'=> $request->religion,
            'maritalStatus'=> $request->maritalStatus,
            'idCardImage'     =>  $image->hashName(),
        ]);

        return new UserResource(true, 'Data Post Successfuly Added!', $user);
    }
}
