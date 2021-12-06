@extends('home.index')
@section('content')
<section class="section-home">
    <h1 style="color:rgba(241, 188, 13, 0.842)">VĂN BẰNG-CHỨNG CHỈ CỦA BẠN</h1>
    @auth
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }
        body {
            color: black;
            display: flex;
            font-size: 24px;
            text-align: center;
            flex-direction: column;
            align-items: center;
        }
        .container {
            border: 20px solid tan;
            width: 750px;
            height: 500px;
            display: table-cell;
            vertical-align: middle;
            margin-bottom:1rem;
        }
        .logo {
            color: tan;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }
        .assignment {
            margin: 20px;
        }
        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }
        .borderless td, .borderless th {
            border: none;
            font-size:17px;
        }
    </style>
    @foreach ($diplomaofusers as $item)
        <div class="container">
            <div class="logo">
                @foreach ($diplomas as $diplo)
                    @if ($item->id_diploma == $diplo->id )
                    {{$diplo->type}}
                    @endif
                @endforeach
            </div>

            <div class="marquee">
                @foreach ($diplomas as $diplo)
                    @if ($item->id_diploma == $diplo->id )
                    {{$diplo->field}}
                    @endif
                @endforeach
            </div>

            <div class="assignment">
                Người nhận
            </div>

            <div class="person">
                {{Auth::user()->name}}
            </div>

            <table class='table borderless' style="display: flex;justify-content:center;">
                <tr>
                    <td>Nơi Cấp:</td>
                    <td>{{$item->level_unit}}</td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td>{{Auth::user()->day_of_birth}}</td>
                </tr>
                <tr>
                    <td>Thời hạn bắt đầu:</td>
                    <td>{{!is_null($item->time_start) ? $item->time_start : 'Chưa có' }}</td>
                </tr>
                <tr>
                    <td>Thời hạn kết thúc:</td>
                    <td>{{!is_null($item->time_s) ? $item->time_start : 'Chưa có'}}</td>
                </tr>
                <tr>
                    <td>Xếp loại:</td>
                    <td>{{$item->rating}}</td>
                </tr>
                <tr>
                    <td>Ngày cấp:</td>
                    <td>{{$item->date_issue}}</td>
                </tr>
                <tr>
                    <td>Số hiệu:</td>
                    <td>{{$item->user_accept}}</td>
                </tr>
            </table>
        </div>
        <span style="color:rgba(241, 188, 13, 0.842);margin-bottom:1rem;">------<><><><><><>------</span>
    @endforeach
    @else
    <h4 style="color: red">Mời bạn đăng nhập để xem thông tin văn bằng của mình</h4>
    @endauth

</section>
@endsection