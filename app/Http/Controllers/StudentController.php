<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
    * Student Features
    */
   public function index(){
    return view('student.index');  
  }

/**
* Store feature
*/

  public function store(Request $request){

    //photo handling
    if ($request->hasFile('photo')) {
        $img = $request->file('photo');
        $unique_name = md5(time().rand()) . '.'. $img->getClientOriginalExtension();
        $img->move(public_path('media/students'), $unique_name);
    
    }

    Student::create([
     'name'     => $request -> name,
     'email'    => $request -> email,
     'cell'     => $request -> cell,
     'uname'    => $request -> uname,
     'gender'   => $request -> gender,
     'photo'    => $unique_name,
     'status'   => 'active',
     
    ]);

    //  return redirect() ->back() ->with('success','Data Insert Successful');
  }
}
