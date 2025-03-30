@extends('layouts.app')

@section('title', 'กรอกข้อมูล')

@section('activeCreate')
    active border-2 border-bottom border-warning
@endsection

@section('content')
    <style>
        .form-group {
            padding: 10px;
        }
    </style>

    <div class="container d-flex flex-column py-3">
        <br>
        <h2 class="text-center">กรอกประวัตินักศึกษา<i class="fa-solid fa-house"></i></h2>
        <br>
        <div class="card shadow-sm rounded-3 my-auto col-md-11 mx-auto bg-white">

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}
            <div class="card-header">
                <h5>ข้อมูลส่วนตัว</h5>
            </div>

            <div class="card-body p-4 row">

                <form action="{{ route('create_profile') }}" method="post" class="row">
                    @csrf
                    <div class="form-group col-lg-2">
                        <label for="prefix_our" class="form-label">คำนำหน้า</label>
                        <select id="prefix_our" class="form-control" onchange="onSelectOur()">
                            <option value="" selected disabled>เลือกคำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="name" class="form-label">ชื่อนักศึกษา</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="กรุณากรอกชื่อนักศึกษา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="last_name" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            placeholder="กรุณากรอกนามสกุล">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="name_eng" class="form-label">ชื่อภาษาอังกฤษ(ตัวพิมพ์ใหญ่)</label>
                        <input type="text" class="form-control" id="name_eng" name="name_eng"
                            placeholder="กรุณากรอกชื่อภาษาอังกฤษ">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="birthday" class="form-label">วันเกิด</label>
                        <input type="text"
                            class="form-control datepicker-his {{ $errors->has('birthday') ? 'is-invalid' : '' }}"
                            value="{{ old('birthday') ? old('birthday') : '' }}" id="birthday" name="birthday">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="age" class="form-label">อายุ</label>
                        <input type="text" class="form-control" id="age" name="age"
                            placeholder="กรุณากรอกอายุ">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="religion" class="form-label">นับถือศาสนา</label>
                        <input type="text" class="form-control" id="religion" name="religion"
                            placeholder="กรุณากรอกศาสนา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="branch" class="form-label">สาขาวิชา</label>
                        <input type="text" class="form-control" id="branch" name="branch"
                            placeholder="กรุณากรอกสาขาวิชา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="degree_level" class="form-label">ระดับ</label>
                        <select name="degree_level" id="degree_level" class="form-control">
                            <option value="ปริญญาตรี" @if ($user->degree_level == 'ปริญญาตรี') selected @endif>ปริญญาตรี</option>
                            <option value="ปริญญาโท" @if ($user->degree_level == 'ปริญญาโท') selected @endif>ปริญญาโท</option>
                        </select>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="student_id" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" class="form-control" id="student_id" name="student_id"
                            placeholder="กรุณากรอกรหัสนักศึกษา">
                    </div>

{{-- -------------------------------------------------- --}}
                    
                    <div class="form-group col-lg-2">
                        <label for="sector" class="form-label">ภาค</label>
                        <select name="sector" id="sector" class="form-control">
                            <option value="ปกติ" @if ($user->sector == 'ปกติ') selected @endif>ปกติ</option>
                            <option value="พิเศษ" @if ($user->sector == 'พิเศษ') selected @endif>พิเศษ</option>
                        </select>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="year_level" class="form-label">ปีที่/รุ่นที่</label>
                        <select name="year_level" id="year_level" class="form-control">
                            <option value="1" @if ($user->year_level == '1') selected @endif>1</option>
                            <option value="2" @if ($user->year_level == '2') selected @endif>2</option>
                            <option value="3" @if ($user->year_level == '3') selected @endif>3</option>
                            <option value="4" @if ($user->year_level == '4') selected @endif>4</option>
                            <option value="5" @if ($user->year_level == '5') selected @endif>5</option>
                        </select>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="group" class="form-label">หมู่เรียนที่</label>
                        <input type="text" class="form-control" id="group" name="group"
                            placeholder="กรุณากรอกหมู่เรียนที่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="term_year" class="form-label">ภาคเรียนที่</label>
                        <input type="text" class="form-control" id="term_year" name="term_year"
                            placeholder="กรุณากรอกภาคเรียนที่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="year" class="form-label">ปีการศึกษา</label>
                        <input type="text" class="form-control" id="year" name="year"
                            placeholder="กรุณากรอกปีการศึกษา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="father_name" class="form-label">ชื่อบิดา</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                            placeholder="กรุณากรอกชื่อบิดา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="father_occupation" class="form-label">อาชีพบิดา</label>
                        <input type="text" class="form-control" id="father_occupation" name="father_occupation"
                            placeholder="กรุณากรอกอาชีพบิดา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="mother_name" class="form-label">ชื่อมารดา</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                            placeholder="กรุณากรอกชื่อมารดา">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="mother_occupation" class="form-label">อาชีพมารดา</label>
                        <input type="text" class="form-control" id="mother_occupation" name="mother_occupation"
                            placeholder="กรุณากรอกอาชีพมารดา">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>ภูมิลำเนาเดิม</h5>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="house_number" class="form-label">บ้านเลขที่</label>
                        <input type="text" class="form-control" id="house_number" name="house_number"
                            placeholder="กรุณากรอกบ้านเลขที่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="home_group" class="form-label">หมู่</label>
                        <input type="text" class="form-control" id="home_group" name="home_group"
                            placeholder="กรุณากรอกหมู่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="alley" class="form-label">ซอย</label>
                        <input type="text" class="form-control" id="alley" name="alley"
                            placeholder="กรุณากรอกซอย">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="road" class="form-label">ถนน</label>
                        <input type="text" class="form-control" id="road" name="road"
                            placeholder="กรุณากรอกถนน">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="subdistrict" class="form-label">แขวง</label>
                        <input type="text" class="form-control" id="subdistrict" name="subdistrict"
                            placeholder="กรุณากรอกแขวง">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="district" class="form-label">อำเภอ</label>
                        <input type="text" class="form-control" id="district" name="district"
                            placeholder="กรุณากรอกอำเภอ">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="province" class="form-label">จังหวัด</label>
                        <input type="text" class="form-control" id="province" name="province"
                            placeholder="กรุณากรอกจังหวัด">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code"
                            placeholder="กรุณากรอกรหัสไปรษณีย์">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="mobile_number" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                            placeholder="กรุณากรอกโทรศัพท์">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>ที่อยู่ปัจจุบัน</h5>
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="house_number_2" class="form-label">บ้านเลขที่</label>
                        <input type="text" class="form-control" id="house_number_2" name="house_number_2"
                            placeholder="กรุณากรอกบ้านเลขที่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="home_group_2" class="form-label">หมู่</label>
                        <input type="text" class="form-control" id="home_group_2" name="home_group_2"
                            placeholder="กรุณากรอกหมู่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="alley_2" class="form-label">ซอย</label>
                        <input type="text" class="form-control" id="alley_2" name="alley_2"
                            placeholder="กรุณากรอกซอย">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="road_2" class="form-label">ถนน</label>
                        <input type="text" class="form-control" id="road_2" name="road_2"
                            placeholder="กรุณากรอกถนน">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="subdistrict_2" class="form-label">แขวง</label>
                        <input type="text" class="form-control" id="subdistrict_2" name="subdistrict_2"
                            placeholder="กรุณากรอกชื่อ-นามสกุล">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="district_2" class="form-label">อำเภอ</label>
                        <input type="text" class="form-control" id="district_2" name="district_2"
                            placeholder="กรุณากรอกอำเภอ">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="province_2" class="form-label">จังหวัด</label>
                        <input type="text" class="form-control" id="province_2" name="province_2"
                            placeholder="กรุณากรอกจังหวัด">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="zip_code_2" class="form-label">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" id="zip_code_2" name="zip_code_2"
                            placeholder="กรุณากรอกรหัสไปรษณีย์">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="mobile_number_2" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="mobile_number_2" name="mobile_number_2"
                            placeholder="กรุณากรอกโทรศัพท์">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="mobile_number_2" class="form-label">email</label>
                        <input type="text" class="form-control" id="mobile_number_2" name="mobile_number_2"
                            placeholder="กรุณากรอกemail">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>สถานที่ฝึกงาน</h5>
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="internship_location" class="form-label">ชื่อสถานที่ฝึกงาน</label>
                        <input type="text" class="form-control" id="internship_location" name="internship_location"
                            placeholder="กรุณากรอกชื่อสถานที่ฝึกงาน">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="internship_number" class="form-label">ตั้งอยู่เลขที่</label>
                        <input type="text" class="form-control" id="internship_number" name="internship_number"
                            placeholder="กรุณากรอกตั้งอยู่เลขที่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="internship_group" class="form-label">หมู่</label>
                        <input type="text" class="form-control" id="internship_group" name="internship_group"
                            placeholder="กรุณากรอกหมู่">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-2">
                        <label for="internship_alley" class="form-label">ซอย</label>
                        <input type="text" class="form-control" id="internship_alley" name="internship_alley"
                            placeholder="กรุณากรอกซอย">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="internship_road" class="form-label">ถนน</label>
                        <input type="text" class="form-control" id="internship_road" name="internship_road"
                            placeholder="กรุณากรอกถนน">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="internship_subdistrict" class="form-label">แขวง</label>
                        <input type="text" class="form-control" id="internship_subdistrict"
                            name="internship_subdistrict" placeholder="กรุณากรอกแขวง">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="internship_district" class="form-label">อำเภอ</label>
                        <input type="text" class="form-control" id="internship_district" name="internship_district"
                            placeholder="กรุณากรอกอำเภอ">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-3">
                        <label for="internship_province" class="form-label">จังหวัด</label>
                        <input type="text" class="form-control" id="internship_province" name="internship_province"
                            placeholder="กรุณากรอกจังหวัด">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="internship_zip_code" class="form-label">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" id="internship_zip_code" name="internship_zip_code"
                            placeholder="กรุณากรอกรหัสไปรษณีย์">
                    </div>

{{-- -------------------------------------------------- --}}

                    <div class="form-group col-lg-4">
                        <label for="internship_mobile_number_2" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="internship_mobile_number_2"
                            name="internship_mobile_number_2" placeholder="กรุณากรอกโทรศัพท์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-2">
                        <label for="date_start" class="form-label">ช่วงเวลาที่ฝึกงาน</label>
                        <input type="text"
                            class="form-control datepicker-his {{ $errors->has('date_start') ? 'is-invalid' : '' }}"
                            value="{{ old('date_start') ? old('date_start') : '' }}" id="date_start" name="date_start">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-2">
                        <label for="date_finish" class="form-label">ถึงวันที่</label>
                        <input type="text"
                            class="form-control datepicker-his {{ $errors->has('date_finish') ? 'is-invalid' : '' }}"
                            value="{{ old('date_finish') ? old('date_finish') : '' }}" id="date_finish" name="date_finish">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="controller_name" class="form-label">ชื่อผู้ควบคุมการฝึก</label>
                        <input type="text" class="form-control" id="controller_name" name="controller_name"
                            placeholder="กรุณากรอกชื่อผู้ควบคุมการฝึก">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>ข้อมูลการทำงาน</h5>
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="current_place_of_work" class="form-label">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="current_place_of_work"
                            name="current_place_of_work" placeholder="กรุณากรอกสถานที่ทำงานปัจจุบัน">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="phone_internship" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="phone_internship" name="phone_internship"
                            placeholder="กรุณากรอกโทรศัพท์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="fax" class="form-label">โทรสาร</label>
                        <input type="text" class="form-control" id="fax" name="fax"
                            placeholder="กรุณากรอกโทรสาร">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-15">
                        <label for="work_experience" class="form-label">ประสบการณ์ในการทำงาน</label>
                        <input type="text" class="form-control" id="work_experience" name="work_experience"
                            placeholder="กรุณากรอกประสบการณ์ในการทำงาน">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-15">
                        <label for="talent" class="form-label">ความรู้ความสามารถพิ้ศษ</label>
                        <input type="text" class="form-control" id="talent" name="talent"
                            placeholder="กรุณากรอกความรู้ความสามารถพิ้ศษ">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-15">
                        <label for="special_interests" class="form-label">ความสนใจพิเศษ</label>
                        <input type="text" class="form-control" id="special_interests" name="special_interests"
                            placeholder="กรุณากรอกความสนใจพิเศษ">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}                 

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>สถานภาพ</h5>
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-2">
                        <label for="status" class="form-label">สถานภาพ</label>
                        <select name="status" id="status" class="form-control">
                            <option value="โสด" @if ($user->status == 'โสด') selected @endif>โสด</option>
                            <option value="แต่งงาน" @if ($user->status == 'แต่งงาน') selected @endif>แต่งงาน</option>
                            <option value="หย่าร้าง" @if ($user->status == 'หย่าร้าง') selected @endif>หย่าร้าง</option>
                        </select>
                    </div>

{{-- -------------------------------------------------- --}}                                       

                    <div class="form-group col-lg-4">
                        <label for="husband_wife_name" class="form-label">ชื่อสามี/ภรรยา</label>
                        <input type="text" class="form-control" id="husband_wife_name" name="husband_wife_name"
                            placeholder="กรุณากรอกชื่อสามี/ภรรยา">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-3">
                        <label for="husband_wife_occupation" class="form-label">อาชีพ</label>
                        <input type="text" class="form-control" id="husband_wife_occupation"
                            name="husband_wife_occupation" placeholder="กรุณากรอกอาชีพ">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-1">
                        <label for="number_of_children" class="form-label">จำนวนบุตร</label>
                        <input type="text" class="form-control" id="number_of_children" name="number_of_children"
                            placeholder="กรุณากรอกจำนวนบุตร">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}                 

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>กรณีฉุกเฉิน</h5>
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="emergency_contact_person" class="form-label">บุคคลที่สามารถติดต่อได้</label>
                        <input type="text" class="form-control" id="emergency_contact_person"
                            name="emergency_contact_person" placeholder="กรุณากรอกบุคคลที่สามารถติดต่อได้">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="emergency_contact_name" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" id="emergency_contact_name"
                            name="emergency_contact_name" placeholder="กรุณากรอกที่อยู่">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-4">
                        <label for="emergency_contact_phone" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="emergency_contact_phone"
                            name="emergency_contact_phone" placeholder="กรุณากรอกโทรศัพท์">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}                 

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-header">
                        <h5>ชื่ออาจารย์นิเทศก์</h5>
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="teacher_name" class="form-label"></label>
                        <input type="text" class="form-control" id="teacher_name" name="teacher_name"
                            placeholder="กรุณากรอกรายชื้ออาจารย์นิเทศก์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="teacher_name_2" class="form-label"></label>
                        <input type="text" class="form-control" id="teacher_name_2" name="teacher_name_2"
                            placeholder="กรุณากรอกรายชื้ออาจารย์นิเทศก์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="teacher_name_3" class="form-label"></label>
                        <input type="text" class="form-control" id="teacher_name_3" name="teacher_name_3"
                            placeholder="กรุณากรอกรายชื้ออาจารย์นิเทศก์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="teacher_name_3" class="form-label"></label>
                        <input type="text" class="form-control" id="teacher_name_3" name="teacher_name_3"
                            placeholder="กรุณากรอกรายชื้ออาจารย์นิเทศก์">
                    </div>

{{-- -------------------------------------------------- --}}                    

                    <div class="form-group col-lg-5">
                        <label for="teacher_department" class="form-label">ชื่อผู้นิเทศประจำหน่วยงาน</label>
                        <input type="text" class="form-control" id="teacher_department" name="teacher_department"
                            placeholder="กรุณากรอกชื่อผู้นิเทศประจำหน่วยงาน">
                    </div>

{{-- // --------------------------------------------------------------------------------------------------------------------------------------------------- --}}                 

                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-dark float-end" for="form-group-input">Send</button>
                    </div>



                </form>

            </div>
        </div>
    </div>

    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด!',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    {{-- script สำหรับ ajax ที่ดึงข้อมูลจาก database --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- line and script สำหรับ datepicker  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- script ของ datepicker อันนี้คือ script ภาษาไทยวัน เดือนจะเป็นภาษาไทย --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/th.js"></script>

    {{-- script คำนำหน้าที่เอาไว้เลือก จะแบ่งเป็น 2 อันคือ our กับ his  --}}
    <script>
        function onSelectOur() {
            var title = document.getElementById('prefix_our').value;
            var nameInput = document.getElementById('name');
            var currentName = nameInput.value;

            var regex = /^(นาย|นางสาว|นาง)\s/;
            if (regex.test(currentName)) {
                currentName = currentName.replace(regex, '');
            }

            nameInput.value = title + ' ' + currentName;
        }

        function onSelectHis() {
            var title = document.getElementById('prefix_his').value;
            var nameInput = document.getElementById('name_his');
            var currentName = nameInput.value;

            var regex = /^(นาย|นางสาว|นาง)\s/;
            if (regex.test(currentName)) {
                currentName = currentName.replace(regex, '');
            }

            nameInput.value = title + ' ' + currentName;
        }

        // หลังจากที่เรียก script cnd มาแล้ว ตรงนี้คือ class ที่อ้างอิงถึงช่องที่เอาไว้กรอกเวลา การอ้างอิงถึง class จะใช้ . นำหน้า (".datepicker-his")
        $(document).ready(function() {
            // ให้ Flatpickr ทำงานกับ input ที่มี class เป็น datepicker-his
            $(".datepicker-his").flatpickr({
                dateFormat: "d/m/Y", // กำหนดรูปแบบวันที่ d/m/Y เรียงเป็นของไทยคือ วัน เดือน ปี
                // defaultDate: "today", // กำหนดค่าเริ่มต้นเป็นวันที่ปัจจุบัน
                locale: "th", // กำหนดภาษาเป็นภาษาไทย
            });
        });
    </script>

    {{-- อันนี้คือ function ajax ที่เอาไว้ดึง จังหวัด อำเภอ ตำบล จะแบ่งเป็น 2 อันคือ our และ his --}}
    {{-- <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#provinces_our').change(function() {
                var provinceId = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('fetch-amphures-our') }}",
                    data: {
                        province_id: provinceId
                    },
                    success: function(data) {
                        $('#districts_our').html(
                            '<option value="" selected disabled>{{ __('เลือกแขวง/ตำบล') }}</option>'
                        );

                        var options =
                            '<option value="" selected disabled>{{ __('เลือกเขต/อำเภอ') }}</option>';
                        $.each(data, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name_th + '</option>';
                        });
                        $('#amphures_our').html(options);
                    }
                });
            });

            $('#amphures_our').change(function() {
                var amphureId = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('fetch-districts-our') }}",
                    data: {
                        amphure_id: amphureId
                    },
                    success: function(data) {
                        var options =
                            '<option value="" selected disabled>{{ __('เลือกแขวง/ตำบล') }}</option>';
                        $.each(data, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name_th + '</option>';
                        });
                        $('#districts_our').html(options);
                    }
                });
            });
        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#provinces_his').change(function() {
                var provinceId = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('fetch-amphures-his') }}",
                    data: {
                        province_id: provinceId
                    },
                    success: function(data) {
                        $('#districts_his').html(
                            '<option value="" selected disabled>{{ __('เลือกแขวง/ตำบล') }}</option>'
                        );

                        var options =
                            '<option value="" selected disabled>{{ __('เลือกเขต/อำเภอ') }}</option>';
                        $.each(data, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name_th + '</option>';
                        });
                        $('#amphures_his').html(options);
                    }
                });
            });

            $('#amphures_his').change(function() {
                var amphureId = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('fetch-districts-his') }}",
                    data: {
                        amphure_id: amphureId
                    },
                    success: function(data) {
                        var options =
                            '<option value="" selected disabled>{{ __('เลือกแขวง/ตำบล') }}</option>';
                        $.each(data, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name_th + '</option>';
                        });
                        $('#districts_his').html(options);
                    }
                });
            });
        });
    </script>


    <script>
        function searchData() {
            var gapNumber = $('#search_input').val(); // รับค่า GAP ที่กรอกจาก input

            // ทำ AJAX request เพื่อดึงข้อมูล GAP จากฐานข้อมูล
            $.ajax({
                type: "POST",
                url: "{{ route('search-gap') }}", // ตั้งค่า URL ของเส้นทางให้เรียกฟังก์ชันใน Controller ของคุณ
                data: {
                    gap_number: gapNumber
                },
                success: function(data) {
                    console.log(data);

                    if (data) {
                        $('#name_our').val(data.name_our);
                        $('#id_number_our').val(data.id_number_our);
                        $('#phone_number_our').val(data.phone_number_our);
                        $('#house_number_our').val(data.house_number_our);
                        $('#moo_our').val(data.moo_our);
                        $('#soi_our').val(data.soi_our);
                        $('#road_our').val(data.road_our);
                        $('#rel_our').val(data.rel_our);
                        $('#name_his').val(data.name_his);
                        $('#moo_his').val(data.moo_his);
                        $('#soi_his').val(data.soi_his);
                        $('#road_his').val(data.road_his);
                        $('#gap_his').val(data.gap_his);
                        $('#date_his').val(data.date_his);
                        $('#quantity_his').val(data.quantity_his);
                        $('#area_his').val(data.area_his);
                        $('#type_his').val(data.type_his);
                        Swal.fire({
                            icon: 'success',
                            title: 'ค้นหาข้อมูลสำเร็จ',
                            text: 'โปรดกรอก จังหวัด อำเภอ ตำบลอีกครั้ง',
                            timer: 4000, // แสดงข้อความเป็นเวลา 4 วินาที
                            timerProgressBar: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // กรณีเกิดข้อผิดพลาดในการร้องขอ AJAX
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่พบข้อมูล',
                        text: 'โปรดตรวจสอบ GAP ของท่านอีกครั้ง',
                        timer: 4000, // แสดงข้อความเป็นเวลา 4 วินาที
                        timerProgressBar: true
                    });
                }
            });
        }
    </script> --}}

@endsection
