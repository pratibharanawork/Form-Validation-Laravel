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

    //Code for submitting the User form data in user Table
    public function userFormdata()
    {
       return view('user.index');
    }

    //Code for submitting the User form data in user Table
    public function saveFormdata(Request $request)
    {
          // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'subject'=>'required',
          'message' => 'required',
          'time'=>'required',
          'fileupload' =>'required',
       ]);
       //creating sing date time object 
       $date = $request['date'];
       $time= $request['time'];
       $input['datetime']=date('Y-m-d H:i:s', strtotime("$date $time"));
       $input = request()->all();
       //Check if request has any file and store inside storage folder
        if(request()->has('fileupload')){
              $input['thumbnail']=request('fileupload')->store('userData');
              }
        $this->formsubmit->create($input);
        //  Store data in database
      return back()->with('success', 'Your form has been submitted.');
    }
}
