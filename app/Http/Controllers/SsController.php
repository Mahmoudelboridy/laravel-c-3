<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SsController extends Controller
{
    public function ss(){
        $students=students::orderBy('id','DESC')->with('grade')->get();
        return view('ss',compact('students'));
    }
   public function store( Request $request){
    $students=students::insert([
    'name'=>$request->student_name,
    'email'=>$request->student_email
    ]);
    return redirect()->back();
   }
   public function delete(Request $request,$id){
    $students=students::where('id','=',$id)->delete();
        return redirect()->back();
   }
   public function update(Request $request,$id){
    $students=students::where('id','=',$id)->first();
    return view('update',compact('students'));
   }
   public function update2(Request $request,$id){
    $students=students::where('id','=',$id)->update([
        'name'=>$request->name,
        'email'=>$request->email
    ]);
    return redirect('/ss');

   }












    public function kn(){
        return view('kn.kn');
    }
    public function mm(){
        $x=14;
        $users=['ahmed','mohamed','mahmoud','hassan'];
        return view('mm',compact('x','users'));
    }
}