<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class WebController extends Controller
{
    //
    
    public function view($id = null)
    {
        if($id){
            $stu = Student::find($id);
            return view('update',compact('stu'));
        }
        else{
            $stu = null;
            return view('update',compact('stu'));
        }
    }
    public function create(Request $request)
    {
        $stu = new Student();
        $stu->studentId = $request->studentId;
        $stu->name = $request->name;
        $stu->save();
        return redirect('/home');
    }
    public function update(Request $request)
    {
        
        $stu = Student::find($request->id);
        $stu->studentId = $request->studentId;
        $stu->name = $request->name;
        $stu->save();
        return redirect('/home');
    }
    public function delete($id = null)
    {
        
        $stu = Student::find($id);
        $stu->delete();
        return redirect('/home');
    }
}
