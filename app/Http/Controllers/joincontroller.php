<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joincontroller extends Controller
{
    function index(){
        // $students = DB::table('students')
        //             ->join('course','course.id','=','students.course_id')
        //             ->select('students.id','students.name','students.mobile','course.name as coursename')
        //             ->get();
        // return view('joining.index',compact('students'));
        // return $students;

    // $students = DB::table('students')
    //              ->join('course','course.id','=','students.course_id')
    //               ->select(DB::raw('count(*) as student_count'))
    //               ->get();
    // return $students;

//     $students = DB::table('students')
//     ->join('course','course.id','=','students.course_id')
//      ->select(DB::raw('count(*) as student_count'),'course.name')
//      ->groupBy('course.name')
//      ->get();
// return $students;

//     $students = DB::table('students')
//     ->join('course','course.id','=','students.course_id')
//     ->select(DB::raw('count(*) as student_count'),'course.name')
//     ->groupBy('course.name')
//     ->orderBy('student_count','DESC')
//     ->get();
// return $students;

$students = DB::table('students')
->join('course','course.id','=','students.course_id')
->select(DB::raw('count(*) as student_count'),'course.name')
->groupBy('course.name')
->having('course.name','=','php')
->get();
return $students;
    }
}
