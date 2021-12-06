@extends('home.index')
@section('content')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:400px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}
</style>
<section class="section-home">
    <h1 style="color:rgba(241, 188, 13, 0.842)">THÔNG TIN CỦA TÔI</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="card">
        <img src="{{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name }}" style="width:100%">
        <h1>{{ Auth::user()->name }}</h1>
        <p class="title">{{ Auth::user()->email }}</p>
        <p>Ngày sinh: {{ Auth::user()->day_of_birth }}</p>
        <p>Địa chỉ: {{ Auth::user()->address }}</p>
    </div>
</section>
@endsection