<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formsubmit;
class UserController extends Controller
{
    public function __construct(Formsubmit $formsubmit){
        $this->formsubmit =$formsubmit;
    }

    //Code for submitting the User form data in user Table//
    public function userFormdata()
    {
       return view('user.index');
    }

    //Code for submitting the User form data in user Table//
    public function saveFormdata(Request $request)
    {
          // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'subject'=>'required',
          'message' => 'required',
          'fileupload' =>'required',
       ]);
        $input = request()->all();
        if(request()->has('fileupload')){
              $input['thumbnail']=request('fileupload')->store('userData');
              }
        $this->formsubmit->create($input);
        //  Store data in database
      return back()->with('success', 'Your form has been submitted.');
    }
}
