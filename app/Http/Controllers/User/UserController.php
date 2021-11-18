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
       if ($request->hasFile('fileupload')) {
            $path = $request->file('fileupload')->store('/userdata');
            $this->formsubmit->fileupload = $path;
        }

      //  Store data in database
      $this->formsubmit->create($request->all());
      return back()->with('success', 'Your form has been submitted.');
    }
}
