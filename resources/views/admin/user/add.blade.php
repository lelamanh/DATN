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
            <h2>Thêm người dùng:</h2>
        </div>
        <div class="container">
            <form action="{{route('admin.postAddUser')}}" method="POST" role='form' enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Họ và Tên:</label>
                    </div>
                    
                    <div class="col-75">
                        @error('name')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="fname"  name="name" placeholder="Nhập tại đây....">
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
                        <input type="text" id="lname"  name="email" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Mật khẩu:</label>
                    </div>
                    <div class="col-75">
                        @error('password')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="lname"  name="password" placeholder="Nhập tại đây....">
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
                        <input type="text"  id="lname"  name="address" placeholder="Nhập tại đây....">
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
                        <input type="date"  name="day_of_birth" id="lname"  placeholder="Nhập tại đây....">
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
                            <input type="file" id="image" name="image" accept=".png,.gif,.jpg,.jpeg"  required/>
                        </div>
                        <br>
                        <div class="image-preview mb-4" id="imagePreview">
                            <img src="" alt="Image Preview" class="image-preview__image" />
                            <span class="image-preview__default-text">Hình ảnh</span>
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