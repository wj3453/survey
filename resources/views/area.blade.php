@extends('layouts.app')
@section('content')
<div class="container">
        <h1>แบบรวบรวมข้อมูลสารสนเทศเพื่อการวางแผนงานด้านครอบครัว</h1><hr>
        <h5>กรุณาเลือกพื้นที่สำหรับกรอกแบบสอบถาม</h5>
     <div class="text-center">
       <form action="" method="post" ">
            <div class="form-group ">
                <div class="container ">
                    <input type="text" name="map" id="map" placeholder="ค้นหาตำแหน่งอัตโนมัติ" style="width:50%"> <input type="submit" class="btn btn-info"  value="search" ><br><br>
                    
                    <select name="provice" id="provice">
                        <option value="">------เลือกภาค------</option>
                    </select>
                    <select name="provice" id="provice">
                        <option value="">------เลือกจังหวัด------</option>
                    </select>
                    <select name="provice" id="provice">
                        <option value="">------เลือกอำเภอ------</option>
                    </select>
                    <select name="provice" id="provice">
                        <option value="">------เลือกตำบล------</option>
                    </select>
                
                </div>
            </div>
            <button type="submit" class="btn btn-danger">เริ่มสัมภาษณ์</button>
       </form>
    </div>
    </div> 
    @endsection
    