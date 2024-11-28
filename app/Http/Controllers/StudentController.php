<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {
         $search = $request->input('search');
         $students = Student::when($search, function ($query, $search) {
             $query->where('name', 'like', "%$search%")
                   ->orWhere('email', 'like', "%$search%");
         })->get();

         return view('student', [
             'title' => 'Students',
             'students' => $students,
         ]);
     }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
}

}
