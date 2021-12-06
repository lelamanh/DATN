<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Diploma;
use App\Http\Requests\AddDiplomaRequest;
use App\Http\Requests\UpdateDiplomaRequest;
use Alert;

class DiplomaController extends Controller
{
    public function List()
    {
        $diplomas = Diploma::orderBy('id','DESC')->search()->paginate(20);
        return view('admin.diploma.list', compact('diplomas'));
    }
    public function Edit($id)
    {
        $diplomas = Diploma::all();
        $diploma = $diplomas->find($id);
        return view('admin.diploma.edit', compact('diploma'));
    }
    public function Update(UpdateDiplomaRequest $request, Diploma  $id)
    {
         $id->update($request->only('type','field','updated_at'));
         Alert::success('Success', 'Update Successfully');
         return redirect()->route('admin.listDiploma')->with('success',"Sửa thành công");
        
    }
    public function Delete(Diploma $id)
    {
        if($id->id <= 0){
            Alert::error('Error', 'Delete Failed');
            return redirect()->route('admin.listDiploma')->with('error','error  Delete');
        }
        else{
            $id->delete();
            Alert::success('Success', 'Delete Successfully');
            return redirect()->route('admin.listDiploma')->with('success','successfully  Delete');
        }
    }
    public function Add(){
        return view('admin.diploma.add');
    }
    public function PostAdd(AddDiplomaRequest $request){
        if(Diploma::create([
            'type'=>$request->type,
            'field'=>$request->field,
        ]))
        {
            Alert::success('Dh', 'Add Successfully');
            return redirect()->route('admin.listDiploma')->with('success','successfully Add.');
        }
    }
}
