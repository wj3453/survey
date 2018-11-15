@extends('layouts.app')
@section('content')
<div class="container">
    <p><h1>แบบรวบรวมข้อมูลสารสนเทศเพื่อการวางแผนงานด้านครอบครัว</h1></p><hr>
    <p><h5>ส่วนที่ 1 ข้อมูลส่วนบุคคล</h5></p>

        <form action="" method="post">  
             <div class="jumbotron">
            <div class="row">
            1. ครอบครัวตาม เลขที่บ้าน <input type="number" name="house_no" id="house_no" style="width:60px">
            หมู่ที่ <input type="number" name="group_no" id="group_no" style="width:60px">
            สมาชิกในครอบครัวทั้งหมด<input type="number" name="member" id="member" style="width:60px" >คน 
            อยู่ประจำ <input type="number" name="member" id="member" style="width:60px">คน
             ผู้สูงอายุ <input type="number" name="member" id="member" style="width:60px">คน 
            </div><br>

            <div class="row">
            2. เจ้าบ้าน ชื่อ<input type="text" name="firstName" id = "firstName" class="col-xs-4">นามสกุล<input type="text" name="lastName" id = "lastName" class="col-xs-4">
            เลขบัตรประชาชน<input name="data" type="text" id="data"  onkeyup="autoTab(this)" /> 
           
            </div>
            <div class="row" style="padding-left:20px">
            เกิดปี พ.ศ.<input type="text" id="date" onchange="calAge(this);" style="width:80px"> อายุ<input type="text" id="age" readonly style="width:60px">ปี
            </div>

           </div> 
            <div class="jumbotron">
            <span class="topic">1) อาชีพ</span>&nbsp;  <input type="radio" name="career">  เกษตรกรรม   <input type="radio" name="career">  รับจ้างทั่วไป    <input type="radio" name="career">   ข้าราชการ    <input type="radio" name="career">   ข้าราชการบำนาญ    <input type="radio" name="career">   ค้าขาย
<input type="radio" name="career">   พนักงาน/ลูกจ้างเอกชน   <input type="radio" name="career">   ลูกจ้างในมหาวิทยาลัย/หน่วยราชการ   <input type="radio" name="career">   ลูกจ้างในบริษัทศรีตรัง   <input type="radio" name="career">   อื่นๆได้แก่ <input type="text" name="career">  <br>
<br>  <span class="topic">2) สถานภาพสมรส </span>&nbsp; <input type="radio" name="status">   โสด   <input type="radio" name="status"> สมรส   <input type="radio" name="status"> หย่า   <input type="radio" name="status"> หม้าย   <input type="radio" name="status"> แยกกันอยู่ 
กรณีสมรส การอยู่ร่วมกัน <input type="radio" name="status"> อยู่ร่วมกันปกติทุกวัน <br> <input type="radio" name="status"> ไม่ได้อยู่ร่วมกันปกติทุกวัน (ขยายความเช่นไปทำงานต่างจังหวัดกลับมาอาทิตย์ละ 2 วัน เป็นต้น) 

        </div>
        <div class="jumbotron">
            <span class="topic">3) ระดับการศึกษาสูงสุด</span>&nbsp;
            <input type="radio" name="edu"> ไม่ได้เรียนหนังสือ แต่ อ่านหนังสือได้  <input type="radio" name="edu"> ไม่ได้เรียนหนังสือ และ อ่านหนังสือไม่ได้  
<input type="radio" name="edu"> ประถมศึกษา <input type="radio" name="edu"> มัธยมศึกษาตอนต้น <input type="radio" name="edu"> มัธยมศึกษาตอนปลาย 
<input type="radio" name="edu"> ประกาศนียบัตรวิชาชีพหรือเทียบเท่า      <input type="radio" name="edu"> ประกาศนียบัตรวิชาชีพชั้นสูง หรือเทียบเท่า      <input type="radio" name="edu"> ปริญญาตรี
<input type="radio" name="edu"> ปริญญาโท     <input type="radio" name="edu"> ปริญญาเอก  <br>  <input type="radio" name="edu"> อื่นๆ <input type="text" name="edu">

        </div>
        </form>
    
</div>
@endsection