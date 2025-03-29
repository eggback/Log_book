@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            @if (Auth::user()->role == 'Administrator')
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="card-body">
                        <div class="text-center">       
                            <h1>แก้ไขบทบาท</h1>        
                        </div>        
                        <div class="button-create text-end py-2">
                            <a class="btn btn-success" href="#" role="button">
                                <i class="bi bi-plus-lg"></i> เพิ่มข้อมูล
                            </a>        
                        </div>        
                        <table id="pretable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" width="300px">ชื่อ-นามสกุล</th>
                                    <th scope="col" width="200px">รหัสนักศึกษา</th>
                                    <th scope="col" width="300px">สาขา</th>
                                    <th scope="col" width="100px">แก้ไข</th>
                                    <th scope="col" width="100px">ลบ</th>
                                    <th scope="col" width="100px">ดูรายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->student_id}}</td>
                                            <td>{{ $item->branch}}</td>
                                            <td>
                                                <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            </td>
                                            <td>
                                                <form action="">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit"
                                                        class="btn btn-xs btn-danger btn-flat show-alert-delete-box"
                                                        data-toggle="tooltip" title='Delete'><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href=""class="btn btn-success"
                                                    target="_blank"><i class="bi bi-printer"></i>
                                                </a>
                                            </td>                        
                                        </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                                                                  
            @elseif (Auth::user()->role == 'Teacher')
                <div class="row justify-content-center">
                    ครู
                </div>
            @elseif (Auth::user()->role == 'Student')
                <div class="row justify-content-center">
                    นักเรียน
                </div>
            @endif
        @else
            <div>
                <h1>เข้าสู่ระบบ</h1>
            </div>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        table#pretable {

            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000000;
            background-color: #f2f2f2;

        }

        thead th {
            background-color: #282e3c;
            color: #ffffff;
            text-align: center;
        }

        tbody td {
            padding: 5px;
        }

        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: end;
            margin-bottom: 30px;
            /* เพิ่มระยะห่างด้านล่าง */
        }

        .set-color-link {
            text-decoration-line: none;
            color: #282e3c
        }

        .set-color-link:hover {
            color: #f6a81a;
        }
    </style>

    <script>
        new DataTable('#pretable', {
            responsive: true,
            order: [
                [3, 'desc']
            ],
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Thai.json"
            }
        });
    </script>

@endsection
