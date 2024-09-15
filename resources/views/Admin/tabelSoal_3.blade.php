@extends('Admin.index')
@section('content')
<style>
    .container {
        margin: 20px;
    }

    .picture-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .picture-item img {
        width: 50px;
        height: 50px;
        border: 1px solid #000;
        margin-right: 10px;
    }

    .picture-item div {
        margin-right: 10px;
    }

    .picture-item a {
        margin-right: 10px;
    }
</style>
<div class="container">
    <h2>Private Picture</h2>
    <a href="#">Create Topik</a>
    <div class="picture-item">
        <img src="" alt="Picture">
        <div>
            <p>RCU Panelman</p>
            <a href="#">Delete</a>
            <a href="#">Insert Picture</a>
            <span>Max 6 Picture</span>
        </div>
    </div>
    <div class="picture-item">
        <img src="" alt="Picture">
        <div>
            <p>RCU Panelman</p>
            <a href="#">Delete</a>
            <a href="#">Insert Picture</a>
            <span>Max 6 Picture</span>
        </div>
    </div>
    <div class="picture-item">
        <img src="" alt="Picture">
        <div>
            <p>Reactor Panex</p>
            <a href="#">Delete</a>
        </div>
    </div>
</div>
@endsection