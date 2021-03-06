<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class UserController extends Controller
{
   public function index() {
        return view('welcome');
    }

    public function create(){
        return view('create');
    }


    public function store(Request $request){

      $this -> validate($request,[
          'firstname' => 'required',
          'lasttname' => 'required',
          'email' => 'required',
          'phone' => 'required'

      ]);

      $student = new Student;
      $student->first_name =$request->firstname;
      $student->last_name =$request->lastname;
      $student->email =$request->email;
      $student->phone =$request->phone;
      $student-> save();
      return redirect(route('home'))->with('successMge','Student successfully Added!');
    }



}
