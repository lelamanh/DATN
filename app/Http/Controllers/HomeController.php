<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DiplomaOfUser;
use App\Models\Diploma;
use App\Models\User;
use App\Http\Requests\ChangePassUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function Home(){
        $users = User::all();
        $diplomas = Diploma::all();
        $diplomaofusers = DiplomaOfUser::all();
        return view('home.home', compact(['diplomaofusers','users', 'diplomas']));
    }
    public function About(){
        return view('home.account');
    }
    public function Change(){
        return view('home.changepass');
    }
    public function PostChangePass(ChangePassUser $request, User $id){
        $dataUser =[
            'email'=>$request->email,
            'password'=>$request->passwordold
        ];
        if (Auth::attempt($dataUser))
        {
            $id->password = Hash::make($request->passwordnew);
            $id->save();
            return redirect()->route('home.changePass')->with('success',"Sửa thành công");
        }
        return redirect()->route('home.changePass')->with('error',"Lỗi ! Sửa không thành công");
    }
}
