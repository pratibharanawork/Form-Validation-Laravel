<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function __construct(User $user){
        $this->user =$user;
    }

    //Code for submitting the User form data in user Table//
    public function userFormdata()
    {
       return view('user.index');
    }

    //Code for submitting the User form data in user Table//
    public function saveFormdata(Request $request)
    {
        // code...
       $userSave = $this->user->create($request->all());
    }
}
