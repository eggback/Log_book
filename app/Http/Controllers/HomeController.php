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



    public function location_details()
    {
        return view('Internship_record.location_details');
    }
    public function map_location()
    {
        return view('Internship_record.map_location');
    }
    public function summary_internship()
    {
        return view('Internship_record.summary_internship');
    }
    public function teacher_notes()
    {
        return view('Internship_record.teacher_notes');
    }
    public function work_day()
    {
        return view('Internship_record.work_day');
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
    public function edit_form()
    {
        $user = Student_information::first(); // หรือ find($id) ถ้ามี id
        return view('edit_form', compact('user'));
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
// ---------------------------------------------------------------------------------------------------------------------------------------------------
            // ภูมิลำเนา
            'house_number' => $request->house_number,
            'home_group' => $request->home_group,
            'alley' => $request->alley, 
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'zip_code' => $request->zip_code,
            'mobile_number' => $request->mobile_number,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
            // ที่อยู่ปัจจุบัน
            'house_number_2' => $request->house_number_2,
            'home_group_2' => $request->home_group_2,
            'alley_2' => $request->alley_2, 
            'road_2' => $request->road_2,
            'subdistrict_2' => $request->subdistrict_2,
            'district_2' => $request->district_2,
            'province_2' => $request->province_2,
            'zip_code_2' => $request->zip_code_2,
            'mobile_number_2' => $request->mobile_number_2,
            'emall' => $request->emall,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
            // สถานที่ฝึกงาน
            'internship_location' => $request->internship_location,
            'internship_number' => $request->internship_number,
            'internship_group' => $request->internship_group, 
            'internship_alley' => $request->internship_alley,
            'internship_road' => $request->internship_road,
            'internship_subdistrict' => $request->internship_subdistrict,
            'internship_district' => $request->internship_district,
            'internship_province' => $request->internship_province,
            'internship_zip_code' => $request->internship_zip_code,
            'internship_mobile_number_2' => $request->internship_mobile_number_2,
            'date_start' => Carbon::createFromFormat('d/m/Y', $request->date_start)->format('Y-m-d'),
            'date_finish' => Carbon::createFromFormat('d/m/Y', $request->date_finish)->format('Y-m-d'),
            'controller_name' => $request->controller_name,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
             // ข้อมูลการทำงาน
            'current_place_of_work' => $request->current_place_of_work,
            'phone_internship' => $request->phone_internship,
            'fax' => $request->fax, 
            'work_experience' => $request->work_experience,
            'talent' => $request->talent,
            'special_interests' => $request->special_interests,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
             // สถานภาพ
            'status' => $request->status,
            'husband_wife_name' => $request->husband_wife_name,
            'husband_wife_occupation' => $request->husband_wife_occupation, 
            'number_of_children' => $request->number_of_children,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
             // กรณีฉุกเฉิน
            'emergency_contact_person' => $request->emergency_contact_person,
            'emergency_contact_name' => $request->emergency_contact_name, 
            'emergency_contact_phone' => $request->emergency_contact_phone,
// ---------------------------------------------------------------------------------------------------------------------------------------------------
            // ชื่ออาจารย์นิเทศก์
            'teacher_name' => $request->teacher_name,
            'teacher_name_2' => $request->teacher_name_2,
            'teacher_name_3' => $request->teacher_name_3, 
            'teacher_name_4' => $request->teacher_name_4,
            'teacher_department' => $request->teacher_department,

        ];
        
         Student_information::create($input_profile);
        // dd($input_profile);

        
        return redirect()->route('form');
    }










    public function edit($id)
    {
        $user = User::all()->find($id);
        return view('admin.edit', compact('user'));
    }
}
