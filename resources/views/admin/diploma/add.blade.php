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
            <button class="menu-section-dropbtn"><i class="fas fa-book-reader"></i><span>Diploma Of User</span></button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listDiplomaOfUser')}}"><i class="fas fa-list"></i>&nbsp;Danh sách</a>
                <a href="{{ route('admin.addDiplomaOfUser')}}"><i class="fas fa-plus"></i>&nbsp;Thêm</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="head-content">
            <h2>Thêm văn bằng/chứng chỉ:</h2>
        </div>
        <div class="container">
            <form action="{{route('admin.postAddDiploma')}}" method="POST" role='form' enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Văn bằng/chứng chỉ:</label>
                    </div>
                    
                    <div class="col-75">
                        @error('type')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="fname"  name="type" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Tên văn bằng/chứng chỉ:</label>
                    </div>
                    <div class="col-75">
                        @error('field')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="lname"  name="field" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Lưu">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection