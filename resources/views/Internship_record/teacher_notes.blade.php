@extends('layouts.app')

@section('title', 'บันทึกของอาจารย์นิเทศก์')

@section('content')
<div class="container">
    <div class="container">
        <div class="container d-flex flex-column py-3">
            <br>
            <h2 class="text-center">บันทึกของอาจารย์นิเทศก์</h2>
            <br>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('teacher_notes') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="prefix" class="form-label">{{ __(key: 'คำนำหน้า') }}</label>
                        <select id="prefix" name="prefix" class="form-select">
                            <option value="นาย">{{ __('นาย') }}</option>
                            <option value="นาง">{{ __('นาง') }}</option>
                            <option value="นางสาว">{{ __('นางสาว') }}</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="first_name" class="form-label">{{ __('ชื่อนักศึกษา') }}</label>
                        <input type="text" id="first_name" name="first_name" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <label for="last_name" class="form-label">{{ __('นามสกุล') }}</label>
                        <input type="text" id="last_name" name="last_name" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="internship_location" class="form-label">{{ __('สถานที่ฝึกงาน') }}</label>
                    <input type="text" id="internship_location" name="internship_location" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">{{ __('รูปแบบการนิเทศ') }}</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="online_supervision" name="supervision" value="online" required>
                        <label class="form-check-label" for="online_supervision">{{ __('นิเทศออนไลน์') }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="offline_supervision" name="supervision" value="offline" required>
                        <label class="form-check-label" for="offline_supervision">{{ __('นิเทศออฟไลน์') }}</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="notes" class="form-label">{{ __('รายการนิเทศ') }}</label>
                    <textarea id="notes" name="notes" class="form-control" rows="10"></textarea>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="signature" class="form-label">{{ __('แนบลายเซ็นต์ดิจิทัล') }}</label>
                        <input type="file" id="signature" name="signature" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-4">
                        <label for="teacher_name" class="form-label">{{ __('อาจารย์นิเทศก์') }}</label>
                        <input type="text" id="teacher_name" name="teacher_name" class="form-control" placeholder="ชื่ออาจารย์นิเทศก์">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">{{ __('ลงวันที่') }}</label>
                    <input type="date" id="date" name="date" class="form-control w-25">
                </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary float-end" for="form-group-input">Send</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
