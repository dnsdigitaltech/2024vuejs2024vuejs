<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sclass;
use Illuminate\Http\Request;
use DB;
class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sclass = Sclass::get();
        return response()->json($sclass);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'
        ]);

        $data = array();
        $data['class_name'] = $request->class_name;
        $insert = Sclass::insert($data);
        return response('Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Sclass::where('id',$id)->first();
        return response()->json($show);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['class_name'] = $request->class_name;
        $insert = Sclass::where('id',$id)->update($data);
        return response('Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sclass::where('id',$id)->delete();
        return response('Removido com sucesso');
    }
}
