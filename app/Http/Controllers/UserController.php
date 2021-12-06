<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AttemUsser;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use App\Models\DiplomaOfUser;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Alert;


class UserController extends Controller
{
     
    public function List()
    {
        $users = User::orderBy('id','DESC')->where('level','<>',1)->search()->paginate(20);
        return view('admin.user.list', compact('users'));
    }
    public function Edit($id)
    {
        $users = User::all();
        $user = $users->find($id);
        return view('admin.user.edit', compact('user'));
    }
    public function login()
    {
        //dd("123123");
        return view('login');
    }
    public function postLogin(AttemUsser $request)
    {
        $dataUser =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($dataUser))
        {
            $user = User::where(["email" => $request->email])->first();
            Auth::login($user);
            if($user->level == 1){
                return redirect()->route('admin.listDiplomaOfUser')->with('success','Successfully Register, You can login!');
            }
            else
            {
                return redirect()->route('home')->with('success','Successfully Register, You can login!');
            }
        }
        return redirect()->route('login')->with('error','Successfully Register, You can login!');
    }
    public function register()
    {
        return view('register');
    }
    public function postRegister(UserRequest $request)
    {
        //bcrypt('JohnDoe');
        if(User::create([
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]))
        {
            return redirect()->route('login')->with('success','Successfully Register, You can login!');
        }else
        {
            return redirect()->route('register')->with('error','Error Register, Again!');
        }
        
     }
     public function Update(UpdateUser $request, User  $id)
    {
        //$id->update($request->all());
        //dd($request->all());
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $request->image->storeAs('/public/images/users', $request->image->getClientOriginalName());
                $id->image = '/storage/images/users/' .  $request->image->getClientOriginalName();
                $id->save();
            }
        }
         $id->update($request->only('name','email','address','day_of_birth','level','updated_at'));
         Alert::success('Success', 'Update Successfully');
         return redirect()->route('admin.listUser')->with('success',"Sửa thành công");
        
    }
    public function Delete(User $id)
    {
        if($id->id <= 0){
            Alert::error('Error', 'Delete Failed');
            return redirect()->route('admin.listUser');
        }
        else{
            $id->delete();
            Alert::success('Success', 'Delete Successfully');
            return redirect()->route('admin.listUser');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function Add(){
        return view('admin.user.add');
    }
    public function PostAdd(AddUserRequest $request){
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                $request->image->storeAs('/public/images/users', $request->image->getClientOriginalName());
                if(User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'address'=>$request->address,
                    'day_of_birth'=>$request->day_of_birth,
                    'level'=>$request->level,
                    'image'=>'/storage/images/users/' . $request->image->getClientOriginalName(),
                ]))
                {
                    Alert::success('Success', 'Add Successfully');
                    return redirect()->route('admin.listUser');
                }
            }
        }
    }

    public function search()
    {
        return view('search');
    }

    public function postSearch(Request $request){
        $diplomaofuser = DiplomaOfUser::where('user_accept', $request->user_accept)
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
        return view('search', compact('diplomaofuser'));
    }
}
