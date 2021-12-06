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
            <h2>Danh sách văn bằng/chứng chỉ của người dùng: &nbsp;</h2>
            <button class="addbtn"><a href="{{ route('admin.addDiplomaOfUser')}}">Thêm &nbsp;<i class="fas fa-plus"></i></a></button>
        </div>
        <table id="data-table" width="1200px">
            <thead>
            <tr>
                <th>Văn bằng/chứng chỉ</th>
                <th>Tên vc/cc</th>
                <th>Nơi cấp</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                <th>Xếp loại</th>
                <th>Ngày Cấp</th>
                <th>Số hiệu</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($diplomaofusers as $user)
            <tr>
                @foreach ($diplomas as $item)
                    @if ($user->id_diploma == $item->id)
                    <td>{{$item->type}}</td>
                    <td>{{$item->field}}</td>
                    @endif
                @endforeach
                <td>{{$user->level_unit}}</td>
                @foreach ($users as $item)
                    @if ($user->id_user == $item->id)
                    <td><a href="{{ route('admin.showdetailDiplomaOfUser', $user->id) }}" target="_blank">{{$item->name}}</a></td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->day_of_birth}}</td>
                    @endif
                @endforeach              
                <td>{{$user->rating}}</td>
                <td>{{$user->date_issue}}</td>
                <td>{{$user->user_accept}}</td>
                <td><a class="editbtn" href="{{ route('admin.editDiplomaOfUser', $user->id) }}"><i class="fas fa-edit"></i>Sửa</a>
                    <div  class="action-table">
                        <a href="{{ route('admin.deleteDiplomaOfUser', $user->id) }}"  class="editbtn btnDelete" ><i class="fas fa-trash-alt"></i>Xóa</a>
                    </div>
                    @foreach ($users as $item)
                        @if ($user->id_user == $item->id)
                            <div  class="action-table">
                                <a href="{{ route('admin.showDiplomaOfUser',  $item->id) }}" target="_blank"  class="editbtn" ><i class="fas fa-eye"></i>Xem</a>
                            </div>
                        @endif
                    @endforeach  
                </td>
            </tr>      
            @endforeach
            </tbody>
        </table>      
    </div>
    <div>
        {{$diplomaofusers->appends(request()->all())->links()}}
    </div>
</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
@endsection


