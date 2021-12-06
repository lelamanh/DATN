<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\DiplomaOfUser;
use App\Models\Diploma;
use App\Models\User;
use App\Http\Requests\AddUserOfDiplomaRequest;
use App\Http\Requests\UpdateUserOfDiplomaRequest;
use Illuminate\Support\Facades\DB;
use Alert;

class DiplomaOfUserController extends Controller
{
    public function List()
    {
        $users = User::where('level','<>',1)->get();
        $diplomas= Diploma::all();
        $diplomaofusers = DiplomaOfUser::orderBy('id','DESC')->search()->paginate(20);
        return view('admin.diplomaofuser.list', compact(['users','diplomas','diplomaofusers']));
    }
    public function Edit($id)
    {
        $users = User::all();
        $diplomas= Diploma::all();
        $diplomaofusers = DiplomaOfUser::all();
        $diplomaofuser = $diplomaofusers->find($id);
        return view('admin.diplomaofuser.edit', compact(['users','diplomas','diplomaofuser']));
    }
    public function Update(UpdateUserOfDiplomaRequest $request, DiplomaOfUser  $id)
    {
         $id->update($request->only('id_user','id_diploma','time_start','time_end','rating','date_issue','level_unit','user_accept','updated_at'));
         Alert::success('Sửa Thành Công');
         return redirect()->route('admin.listDiplomaOfUser')->with('success',"Sửa thành công");   
    }
    public function Add(){
        $users = User::where('level','<>',1)->get();
        $diplomas= Diploma::all();
        return view('admin.diplomaofuser.add', compact(['users','diplomas']));
    }
    public function PostAdd(AddUserOfDiplomaRequest $request){
        if(DiplomaOfUser::create([
            'id_user'=>$request->id_user,
            'id_diploma'=>$request->id_diploma,
            'time_start'=>$request->time_start,
            'time_end'=>$request->time_end,
            'rating'=>$request->rating,
            'date_issue'=>$request->date_issue,
            'level_unit'=>$request->level_unit,
            'user_accept'=>$request->user_accept,
        ]))
        {
            Alert::success('Thêm Thành Công');
            return redirect()->route('admin.listDiplomaOfUser')->with('success','successfully Add.');
        }
    }
    public function Delete(DiplomaOfUser $id)
    {
        if($id->id <= 0){
            Alert::error('Error', 'Delete Failed');
            return redirect()->route('admin.listDiplomaOfUser')->with('error','error  Delete');
        }
        else{
            $id->delete();
            Alert::success('Xóa Thành Công');
            return redirect()->route('admin.listDiplomaOfUser')->with('success','successfully  Delete');
        }
    }

    public function Show($id)
    {
        $diplomaofuser = DiplomaOfUser::where('id_user', $id)
        ->join('users','users.id','=','diploma_of_user.id_user')
        ->join('diploma','diploma_of_user.id_diploma','=','diploma.id')
        ->get(
            [
                'diploma_of_user.*',
                'users.name',
                'users.email',
                'users.address',
                'users.day_of_birth',
                'users.level',
                'users.image',
                'diploma.type',
                'diploma.field'
            ]);
        return view('admin.diplomaofuser.show', compact('diplomaofuser'));
    }
    
    public function ShowDetail($id)
    {
        $diplomaofuser = DiplomaOfUser::where('diploma_of_user.id', $id)
        ->join('users','users.id','=','diploma_of_user.id_user')
        ->join('diploma','diploma_of_user.id_diploma','=','diploma.id')
        ->get(
            [
                'diploma_of_user.*',
                'users.name',
                'users.email',
                'users.address',
                'users.day_of_birth',
                'users.level',
                'users.image',
                'diploma.type',
                'diploma.field'
            ])->first();
        return view('admin.diplomaofuser.show_detail', compact('diplomaofuser'));
    }
}
