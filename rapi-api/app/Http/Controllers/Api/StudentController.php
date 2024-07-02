<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return response()->json($students);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'name' => 'required|unique:students|max:60',
            'email' => 'required|unique:students|max:100',
        ]);
        $data = array();
        $data['class_id'] = $request->class_id;
        $data['section_id'] = $request->section_id;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['photo'] = $request->photo;
        $data['address'] = $request->address;
        $data['gender'] = $request->gender;
        Student::create($data);
        return response('Estudante inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Student::where('id',$id)->first();
        return response()->json($show);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['class_id'] = $request->class_id;
        $data['section_id'] = $request->section_id;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['photo'] = $request->photo;
        $data['address'] = $request->address;
        $data['gender'] = $request->gender;
        Student::where('id',$id)->update($data);
        return response('Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $img = Student::where('id',$id)->first();
        $img_path = $img->photo;
        unlink($img_path);
        Student::where('id',$id)->delete();
        return response('Removido com sucesso');
    }
}
