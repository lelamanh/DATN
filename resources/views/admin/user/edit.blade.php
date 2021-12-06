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
            <h2>Sửa thông tin người dùng:&nbsp; {{$user->email}}</h2>
        </div>
        
        <div class="container">
            <form action="{{route('admin.updateUser',$user->id)}}" method="POST" role='form' enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Họ và Tên:</label>
                    </div>
                    
                    <div class="col-75">
                        @error('name')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="fname" value="{{$user->name}}" name="name" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Email:</label>
                    </div>
                    <div class="col-75">
                        @error('email')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="lname" value="{{$user->email}}" name="email" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Địa chỉ:</label>
                    </div>
                    <div class="col-75">
                        @error('address')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" value="{{$user->address}}" id="lname"  name="address" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Ngày sinh:</label>
                    </div>
                    <div class="col-75">
                        @error('day_of_birth')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="date" value="{{$user->day_of_birth}}" name="day_of_birth" id="lname"  placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="image">Ảnh:</label>
                    </div>
                    <div class="col-75">
                        @error('image')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <div class="custom-file">
                            <input type="file" id="image" name="image" accept=".png,.gif,.jpg,.jpeg" />
                        </div>
                        <br>
                        <div class="image-preview mb-4" id="imagePreview">
                            <img src="{{$user->image}}" alt="Image Preview" class="image-preview__image" style="display:block;"/>
                            <span class="image-preview__default-text" style="display:none;">Hình ảnh</span>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="2" name="level">
                <br>
                <div class="row">
                    <input type="submit" value="Lưu">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection