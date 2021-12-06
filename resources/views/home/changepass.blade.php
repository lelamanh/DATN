@extends('home.index')
@section('content')
<section class="section-home">
    <h1 style="color: rgb(139, 213, 247); margin-top: 150px">Tài khoản: {{Auth::user()->name}}</h1>
    @if(Session::has('success'))
        <div class="alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Đổi mật khẩu thành công!</strong> 
        </div>
    @endif 
    @if(Session::has('error'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Error!</strong>{{Session::get('error')}}
        </div>
    @endif
    <form class="form-change" method="POST"  enctype="multipart/form-data" action="{{ route('postchangepass',Auth::user()->id)}}">
        @csrf @method('PUT')
        <input type="hidden" name="email" value="{{Auth::user()->email}}">
        <label for="">Mật khẩu hiện tại:</label>
        <input type="password" name="passwordold" >
        <label for="">Mật khẩu mới:</label>
        <input type="password" name="passwordnew" >
        
        <button class="btnchage" type="submit">Dổi mật khẩu</button>
            {{-- <button class="btn-register" type="submit">Register</button> --}}
        
    </form>
</section>
@endsection
