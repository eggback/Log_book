<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_informations', function (Blueprint $table) {

        //    ประวัติส่วนตัว 
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name_eng')->nullable();
            $table->date('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('religion')->nullable();
            $table->string('branch')->nullable();
            $table->enum('degree_level', ['ปริญญาตรี', 'ปริญญาโท',])->nullable();
            $table->string('student_id')->nullable();
            $table->enum('sector', ['ปกติ', 'พิเศษ',])->nullable();
            $table->enum('year_level', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('group')->nullable();
            $table->string('term_year')->nullable();
            $table->string('year')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
 // ---------------------------------------------------------------------------------------------------------------------------------------------------           
            // ภูมิลำเนา
            $table->string('house_number')->nullable();
            $table->string('home_group')->nullable();
            $table->string('alley')->nullable();
            $table->string('road')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('mobile_number')->nullable();
// ---------------------------------------------------------------------------------------------------------------------------------------------------
            // ที่อยู่ปัจจุบัน
            $table->string('house_number_2')->nullable();
            $table->string('home_group_2')->nullable();
            $table->string('alley_2')->nullable();
            $table->string('road_2')->nullable();
            $table->string('subdistrict_2')->nullable();
            $table->string('district_2')->nullable();
            $table->string('province_2')->nullable();
            $table->string('zip_code_2')->nullable();
            $table->string('mobile_number_2')->nullable();
            $table->string('emall')->nullable();
// ---------------------------------------------------------------------------------------------------------------------------------------------------          
            // สถานที่ฝึกงาน
            $table->string('internship_location')->nullable();
            $table->string('internship_number')->nullable();
            $table->string('internship_group')->nullable();
            $table->string('internship_alley')->nullable();
            $table->string('internship_road')->nullable();
            $table->string('internship_subdistrict')->nullable();
            $table->string('internship_district')->nullable();
            $table->string('internship_province')->nullable();
            $table->string('internship_zip_code')->nullable();
            $table->string('internship_mobile_number_2')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_finish')->nullable();
            $table->string('controller_name')->nullable();
 // ---------------------------------------------------------------------------------------------------------------------------------------------------           
            // ข้อมูลการทำงาน
            $table->string('current_place_of_work')->nullable();
            $table->string('phone_internship')->nullable();
            $table->string('fax')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('talent')->nullable();
            $table->string('special_interests')->nullable();
 // ---------------------------------------------------------------------------------------------------------------------------------------------------           
            // สถานภาพ
            $table->enum('status', ['โสด', 'แต่งงาน', 'หย่าร้าง'])->nullable();
            $table->string('husband_wife_name')->nullable();
            $table->string('husband_wife_occupation')->nullable();
            $table->string('number_of_children')->nullable();
 // ---------------------------------------------------------------------------------------------------------------------------------------------------           
            // กรณีฉุกเฉิน
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
 // ---------------------------------------------------------------------------------------------------------------------------------------------------           
            // ชื่ออาจารย์นิเทศก์
            $table->string('teacher_name')->nullable();
            $table->string('teacher_name_2')->nullable();
            $table->string('teacher_name_3')->nullable();
            $table->string('teacher_name_4')->nullable();
            $table->string('teacher_department')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_informations');
    }
};
