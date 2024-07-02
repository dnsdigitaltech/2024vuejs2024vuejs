<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::get();
        return response()->json($sections);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'class_id' => 'required',
            'section_name' => 'required|unique:sections|max:25',
        ]);
        Section::create($request->all());
        return response('Sessão inserida com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Section::where('id',$id)->first();
        return response()->json($show);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['class_id'] = $request->class_id;
        $data['section_name'] = $request->section_name;
        Section::where('id',$id)->update($data);
        return response('Sessão atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Section::where('id',$id)->delete();
        return response('Sessão removida com sucesso');
    }
}
