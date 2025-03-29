<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student_information;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $user = User::get();
        // dd($user);
        return view('welcome', compact('user'));
    }

    public function form()
    {
        $user = Student_information::first(); // หรือ find($id) ถ้ามี id
        return view('form', compact('user'));
    }
    public function create_profile(Request $request)
    {

        // $request->validate(
        //     [
        //         'co_id' => 'required|exists:companies,id',
        //         'name' => 'required|regex:/^[a-zA-Zก-๏\s]+$/u',
        //         'branch_id' => 'required|exists:branches,id',
        //         'details' => 'required',
        //         'dept_id' => 'required|exists:departments,id',
        //         'note' => 'required',
        //     ],

        //     [
        //         'name.required' => 'กรุณาป้อนชื่อ',
        //         'name.regex' => 'กรุณาป้อนชื่อเป็นตัวอักษรเท่านั้น',
        //         'co_id.required' => 'กรุณาเลือกบริษัท',
        //         'co_id.exists' => 'ข้อมูลบริษัทไม่ถูกต้อง',
        //         'branch_id.required' => 'กรุณาป้อนสาขา',
        //         'branch_id.exists' => 'ข้อมูลสาขาไม่ถูกต้อง',
        //         'depant_id.required' => 'กรุณาป้อนแผนก',
        //         'depant_id.exists' => 'ข้อมูลแผนกไม่ถูกต้อง',
        //     ]
        // );

        $input_profile = [
            'name' => $request->name,
            'last_name' => $request->last_name,
            'name_eng' => $request->name_eng,
            'birthday' => Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d'),
            'age' => $request->age,
            'religion' => $request->religion,
            'branch' => $request->branch,
            'degree_level' => $request->degree_level,
            'student_id' => $request->student_id,
            'sector' => $request->sector,
            'year_level' => $request->year_level,
            'group' => $request->group,
            'term_year' => $request->term_year,
            'year' => $request->year,
            'father_name' => $request->father_name,
            'father_occupation' => $request->father_occupation,
            'mother_name' => $request->mother_name,
            'mother_occupation' => $request->mother_occupation,
        ];

        dd($input_profile);

        return redirect()->route('page');
    }
    public function edit($id)
    {
        $user = User::all()->find($id);
        return view('admin.edit', compact('user'));
    }
}
