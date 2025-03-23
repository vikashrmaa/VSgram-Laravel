@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Profile Picture Section -->
        <div class="col-3">
            <img src="{{ asset('pfp.png') }}" alt="Profile Picture" 
                 class="rounded-circle position-relative" 
                 width="200" height="210" 
                 style="top: 40px; left: 5px;">
        </div>

        <!-- Profile Info Section -->
        <div class="col-9 pt-5">
            <div><h1>vikashrma</h1></div>
            <div class="d-flex fs-4 pt-3">
                <div><strong>6 </strong>posts</div>
                <div class="ms-5"><strong>718 </strong>followers</div>
                <div class="ms-5"><strong>894 </strong>following</div>
            </div>
            <div class="pt-4 fs-4"><strong>Vikash Sharma</strong></div>
        </div>
    </div>

    <!-- Feed Images Section (With Adjustable Size & Position) -->
    <div class="row mt-5">
        <div class="col-4">
            <img src="{{ asset('feed1.png') }}" alt="Feed Image 1" 
                 style="width: 450px; height: 550px; position: relative; top: 100px; left: 10px;">
        </div>
        <div class="col-4">
            <img src="{{ asset('feed2.png') }}" alt="Feed Image 2" 
                 style="width: 450px; height: 550px; position: relative; top: 100px; left: 25px;">
        </div>
        <div class="col-4">
            <img src="{{ asset('feed3.png') }}" alt="Feed Image 3" 
                 style="width: 450px; height: 550px; position: relative; top: 100px; left: 40px;">
        </div>
    </div>
</div>
@endsection
