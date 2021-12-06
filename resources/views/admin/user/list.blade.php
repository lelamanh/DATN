
@extends('admin.index')
@section('content')
<section>
    <div class="menu-section">
        <div class="menu-section-dropdown">
            <button class="menu-section-dropbtn">
                <i class="fas fa-book-medical"></i> 
                <span>Dipolma</span>          
            </button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listDiploma')}}"><i class="fas fa-list"></i> &nbsp; Danh sách</a>
                <a href="{{ route('admin.addDiploma')}}"><i class="fas fa-plus"></i>&nbsp;Thêm</a>
            </div>
        </div>
        <div class="menu-section-dropdown">
            <button class="menu-section-dropbtn"><i class="fas fa-users"></i><span>User</span></button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listUser')}}"><i class="fas fa-list"></i>&nbsp;Danh sách</a>
                <a href="{{ route('admin.addUser')}}"><i class="fas fa-plus"></i>&nbsp;Thêm</a>
            </div>
        </div>
        <div class="menu-section-dropdown">
            <button class="menu-section-dropbtn"><i class="fas fa-book-reader"></i><span>Diploma of user</span></button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listDiplomaOfUser')}}"><i class="fas fa-list"></i>&nbsp;Danh sách</a>
                <a href="{{ route('admin.addDiplomaOfUser')}}"><i class="fas fa-plus"></i>&nbsp;Thêm</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="head-content">
            <h2>Danh sách người dùng: &nbsp;</h2>
            <button class="addbtn"><a href="{{ route('admin.addUser')}}">Thêm &nbsp;<i class="fas fa-plus"></i></a></button>
        </div>
        <table id="data-table" width="1200px">
            <thead>
            <tr>
                <th>Stt</th>
                <th>Ảnh</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>Level</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 1; @endphp
            @foreach ($users as $user)
            <tr>
                <td>{{$count}}</td>
                <td><a href="{{ asset($user->image) }}" target="_blank"><img src="{{ asset($user->image) }}" width=60px ></a></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->day_of_birth}}</td>
                <td>@if ($user->level == 1)
                    admin
                    @else
                    user
                @endif</td>
                <td>
                    <a class="editbtn" href="{{ route('admin.edituser', $user->id) }}"><i class="fas fa-edit"></i>Sửa</a>
                <div  class="action-table">
                        <a href="{{ route('admin.deleteUser', $user->id) }}"  class="editbtn btnDelete" ><i class="fas fa-trash-alt"></i>Xóa</a>
                    </div></td>
            </tr> 
            @php $count++; @endphp     
            @endforeach
            </tbody>
        </table>      
    </div>
    <div>
        {{$users->appends(request()->all())->links()}}
    </div>
</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
@endsection


