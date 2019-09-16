<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',
        [
            'students' => $students,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Student::create([
        //     'nama'=> $request->nama,
        //     'npm'=> $request->npm,
        //     'email'=> $request->email,
        //     'jurusan'=> $request->jurusan,
        // ]);

        $request->validate([
            'nama'=>'required',
            'npm' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil di Tambahkan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',
            [
                'students'=> $student,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',
        [
            'students' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama'=>'required',
            'npm' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'npm' => $request->npm,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                ]);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil di Ubah');

        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil di Hapus');
        // return $student;
    }
}