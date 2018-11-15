@extends('layouts.app')
@section('content')
<div class="container">
        <h1>แบบรวบรวมข้อมูลสารสนเทศเพื่อการวางแผนงานด้านครอบครัว</h1><hr>
       
     <div class="text-center">
     <form class="form-signin" method="post" action="">
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">กรุณาเข้าสู่ระบบ</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">เข้าสู้ระบบ</button>
       </form>
    </div>
    </div> 
    @endsection
    