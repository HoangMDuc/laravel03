<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    //
    public function get_all_student() {
        $data = Student::all();
        return view("student_manage",["data" => $data]);
    }

    public function get_student_by_id($id){
        $data = Student::find($id);
        return view("student_edit",["data" =>$data]);
    }

    public function edit(Request $request, $id) {
        $data = Student::find($id);
        $data->update(["fullname"=> $request->txtName,"birthday"=>$request->birthday,"address" =>$request->txtAddress] );
        return redirect("/");
    }
}
