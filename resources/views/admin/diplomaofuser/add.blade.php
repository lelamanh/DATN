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
                <a href="{{ route('admin.addDiploma')}}"><i class="fas fa-plus"></i>&nbsp;Add</a>
            </div>
        </div>
        <div class="menu-section-dropdown">
            <button class="menu-section-dropbtn"><i class="fas fa-users"></i><span>User</span></button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listUser')}}"><i class="fas fa-list"></i>&nbsp;Danh sách</a>
                <a href="{{ route('admin.addUser')}}"><i class="fas fa-plus"></i>&nbsp;Add</a>
            </div>
        </div>
        <div class="menu-section-dropdown">
            <button class="menu-section-dropbtn"><i class="fas fa-book-reader"></i><span>Diploma of user</span></button>
            <div class="menu-section-dropdown-content">
                <a href="{{ route('admin.listDiplomaOfUser')}}"><i class="fas fa-list"></i>&nbsp;Danh sách</a>
                <a href="{{ route('admin.addDiplomaOfUser')}}"><i class="fas fa-plus"></i>&nbsp;Add</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="head-content">
            <h2>Thêm văn bằng/chứng chỉ cho người dùng:</h2>
        </div>
        <div class="container">
            <form action="{{route('admin.postAddDiplomaOfUser')}}" method="POST" role='form' enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row">
                    <div class="col-25">
                        <label for="country">Văn bằng/Chứng chỉ:</label>
                    </div>
                    <div class="col-75">
                        @error('id_diploma')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <select name="id_diploma" type="text" list="id_diploma" > 
                            <datalist id="id_diploma">
                                @foreach ($diplomas as $item)
                                <option value="{{$item->id}}">{{$item->type}} - {{$item->field}}</option>
                                @endforeach
                        </datalist>
                        </select>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Đơn vị cấp:</label>
                    </div>
                    <div class="col-75">
                        @error('level_unit')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text" id="lname"  name="level_unit" placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Họ và tên:</label>
                    </div>
                    <div class="col-75">
                        @error('id_user')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <select name="id_user">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}} - {{$user->email}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Thời hạn bắt đầu:</label>
                    </div>
                    <div class="col-75">
                        <!-- @error('time_start')
                            <small class="help-block">{{$message}}</small>
                        @enderror -->
                        <input type="date"  name="time_start" id="lname"  placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Thời hạn kết thúc:</label>
                    </div>
                    <div class="col-75">
                        <!-- @error('time_end')
                            <small class="help-block">{{$message}}</small>
                        @enderror -->
                        <input type="date"  name="time_end" id="lname"  placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Ngày cấp:</label>
                    </div>
                    <div class="col-75">
                        @error('date_issue')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="date"  name="date_issue" id="lname"  placeholder="Nhập tại đây....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Xếp loại:</label>
                    </div>
                    <div class="col-75">
                        @error('rating')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input name="rating" type="text" list="rating" > 
                            <datalist id="rating">
                                <option value="Xuất Sắt"></option>
                                <option value="Giỏi"></option>
                                <option value="Khá"></option>
                                <option value="Trung Bình"></option>
                                <option value="Yếu"></option>
                                <option value="Kém"></option>
                                <option value="A1"></option>
                                <option value="A2"></option>
                                <option value="B1"></option>
                                <option value="B2"></option>
                                <option value="C1"></option>
                                <option value="C2"></option>

                        </datalist>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Số hiệu:</label>
                    </div>
                    <div class="col-75">
                        @error('user_accept')
                            <small class="help-block">{{$message}}</small>
                        @enderror
                        <input type="text"  id="lname"  name="user_accept" placeholder="Nhập tại đây....">
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