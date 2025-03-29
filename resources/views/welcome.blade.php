@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            @if (Auth::user()->role == 'Administrator')
                <div class="row justify-content-center">
                    <h1>แก้ไขบทบาท</h1>
                    {{-- <div class="hero-callout">
                        <div id="example_wrapper" class="dt-container"><div class="dt-layout-row"><div class="dt-layout-cell dt-layout-start"><div class="dt-length"><select aria-controls="example" class="dt-input" id="dt-length-0"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="dt-length-0"> entries per page</label></div></div><div class="dt-layout-cell dt-layout-end"><div class="dt-search"><label for="dt-search-0">Search:</label><input type="search" class="dt-input" id="dt-search-0" placeholder="" aria-controls="example"></div></div></div><div class="dt-layout-row dt-layout-table"><div class="dt-layout-cell  dt-layout-full"><table id="example" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info"><colgroup><col data-dt-column="0" style="width: 151.75px;"><col data-dt-column="1" style="width: 223.031px;"><col data-dt-column="2" style="width: 117.266px;"><col data-dt-column="3" style="width: 77.0156px;"><col data-dt-column="4" style="width: 121.891px;"></colgroup><thead><tr><th data-dt-column="0" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc dt-ordering-asc" aria-sort="ascending"><span class="dt-column-title">Name</span><span class="dt-column-order" role="button" aria-label="Name: Activate to invert sorting" tabindex="0"></span></th><th data-dt-column="1" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc"><span class="dt-column-title">Position</span><span class="dt-column-order" role="button" aria-label="Position: Activate to sort" tabindex="0"></span></th><th data-dt-column="2" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc"><span class="dt-column-title">Office</span><span class="dt-column-order" role="button" aria-label="Office: Activate to sort" tabindex="0"></span></th><th data-dt-column="3" class="dt-body-right dt-type-numeric dt-orderable-asc dt-orderable-desc" rowspan="1" colspan="1"><span class="dt-column-title">Age</span><span class="dt-column-order" role="button" aria-label="Age: Activate to sort" tabindex="0"></span></th><th data-dt-column="4" class="dt-body-right dt-right dt-orderable-asc dt-orderable-desc" rowspan="1" colspan="1"><span class="dt-column-title">Start date</span><span class="dt-column-order" role="button" aria-label="Start date: Activate to sort" tabindex="0"></span></th><th data-dt-column="5" class="dt-body-right dt-type-numeric dt-orderable-asc dt-orderable-desc dtr-hidden" rowspan="1" colspan="1" style="display: none;"><span class="dt-column-title">Salary</span><span class="dt-column-order" role="button" aria-label="Salary: Activate to sort" tabindex="0"></span></th></tr></thead><tbody><tr><td class="dtr-control sorting_1" tabindex="0">Airi Satou</td><td>Accountant</td><td>Tokyo</td><td class="dt-body-right dt-type-numeric">33</td><td class="dt-body-right dt-right">28/11/2551</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$162,700</td></tr><tr><td class="sorting_1 dtr-control">Angelica Ramos</td><td>Chief Executive Officer (CEO)</td><td>London</td><td class="dt-body-right dt-type-numeric">47</td><td class="dt-body-right dt-right">9/10/2552</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$1,200,000</td></tr><tr><td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td class="dt-body-right dt-type-numeric">66</td><td class="dt-body-right dt-right">12/1/2552</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$86,000</td></tr><tr><td class="sorting_1 dtr-control">Bradley Greer</td><td>Software Engineer</td><td>London</td><td class="dt-body-right dt-type-numeric">41</td><td class="dt-body-right dt-right">13/10/2555</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$132,000</td></tr><tr><td class="sorting_1 dtr-control">Brenden Wagner</td><td>Software Engineer</td><td>San Francisco</td><td class="dt-body-right dt-type-numeric">28</td><td class="dt-body-right dt-right">7/6/2554</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$206,850</td></tr><tr><td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td class="dt-body-right dt-type-numeric">61</td><td class="dt-body-right dt-right">2/12/2555</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$372,000</td></tr><tr><td class="sorting_1 dtr-control">Bruno Nash</td><td>Software Engineer</td><td>London</td><td class="dt-body-right dt-type-numeric">38</td><td class="dt-body-right dt-right">3/5/2554</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$163,500</td></tr><tr><td class="sorting_1 dtr-control">Caesar Vance</td><td>Pre-Sales Support</td><td>New York</td><td class="dt-body-right dt-type-numeric">21</td><td class="dt-body-right dt-right">12/12/2554</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$106,450</td></tr><tr><td class="sorting_1 dtr-control">Cara Stevens</td><td>Sales Assistant</td><td>New York</td><td class="dt-body-right dt-type-numeric">46</td><td class="dt-body-right dt-right">6/12/2554</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$145,600</td></tr><tr><td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td class="dt-body-right dt-type-numeric">22</td><td class="dt-body-right dt-right">29/3/2555</td><td class="dt-body-right dt-type-numeric dtr-hidden" style="display: none;">$433,060</td></tr></tbody><tfoot><tr><th data-dt-column="0" rowspan="1" colspan="1"><span class="dt-column-title">Name</span></th><th data-dt-column="1" rowspan="1" colspan="1"><span class="dt-column-title">Position</span></th><th data-dt-column="2" rowspan="1" colspan="1"><span class="dt-column-title">Office</span></th><th class="dt-body-right dt-type-numeric" data-dt-column="3" rowspan="1" colspan="1"><span class="dt-column-title">Age</span></th><th class="dt-body-right dt-right" data-dt-column="4" rowspan="1" colspan="1"><span class="dt-column-title">Start date</span></th><th class="dt-body-right dt-type-numeric dtr-hidden" data-dt-column="5" rowspan="1" colspan="1" style="display: none;"><span class="dt-column-title">Salary</span></th></tr></tfoot></table></div></div><div class="dt-layout-row"><div class="dt-layout-cell dt-layout-start"><div class="dt-info" aria-live="polite" id="example_info" role="status">Showing 1 to 10 of 57 entries</div></div><div class="dt-layout-cell dt-layout-end"><div class="dt-paging"><nav aria-label="pagination"><button class="dt-paging-button disabled first" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="First" data-dt-idx="first" tabindex="-1">«</button><button class="dt-paging-button disabled previous" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">‹</button><button class="dt-paging-button current" role="link" type="button" aria-controls="example" aria-current="page" data-dt-idx="0">1</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="1">2</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="2">3</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="3">4</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="4">5</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="5">6</button><button class="dt-paging-button next" role="link" type="button" aria-controls="example" aria-label="Next" data-dt-idx="next">›</button><button class="dt-paging-button last" role="link" type="button" aria-controls="example" aria-label="Last" data-dt-idx="last">»</button></nav></div></div></div><div class="dt-autosize" style="width: 100%; height: 0px;"></div></div>
                    </div> --}}
                    <div class="container">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="150px">รูปภาพ</th>
                                                <th>ชื่ออาหาร</th>
                                                <th>รายละเอียด</th>
                                                <th width="100px">ราคา</th>
                                                <th width="50px">แก้ไข</th>
                                                <th width="50px">ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($product as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('images/' . $item->photo) }}" class="card-img-top img-30"
                                                            alt="Mookata Image">
                    
                                                    </td>
                                                    <td>{{ $item->product_name }}</td>
                                                    <td>{{ $item->product_description }}</td>
                                                    <td>{{ number_format($item->price, 2) }}</td>
                                                    <td>
                                                        <a href="{{ route('showeditproduct', $item->id) }}" class="btn btn-warning btn-sm"><i
                                                                class="bi bi-pencil-square"></i></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('deleteproduct', $item->id) }}">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box"
                                                                data-toggle="tooltip" title='Delete'><i class="bi bi-trash3-fill"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Food name</th>
                                                <th>Details</th>
                                                <th>Price</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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





    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
            })
        });
    </script>


    

    

@endsection
