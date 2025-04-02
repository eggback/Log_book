@extends('layouts.app')

@section('title', 'ข้อมูลสถานที่ฝึกประสบการณ์')

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
        <h2 class="text-center">รายละเอียดของสถานที่ฝึกประสบการณ์วิชาชีพ <i class="fa-solid fa-building"></i></h2>
        <br>
        <div class="card shadow-sm rounded-3 my-auto col-md-11 mx-auto bg-white">
                    <div class="form-group col-lg-15">
                        <center><label for="detail" class="form-label">กรุณากรอกประวัติ สถานที่ตั้ง ลักษณะการประกอบการ</label></center>
                        <textarea class="form-control" id="detail" name="detail" rows="10" cols="10"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary float-end" for="form-group-input">Send</button>
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

@endsection
