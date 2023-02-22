<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        if(!empty($user)){
            return StudentResource::collection(Student::all()->orderBy('crated_at', 'DESC')->paginate(10));
        } else {
            return response()->json([
                'msg' => 'Unauthorized'
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $result = Student::create($request->validated());
        return new StudentResource($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student, Request $request)
    {
        $user = $request->user();
        if(!empty($user)) {
            return new StudentResource($student);
        } else {
            return response()->json([
                'msg' => 'Unauthorized'
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $user = $request->user();
        if(!empty($user)) {
            $student->update($request->validated());
            return new StudentResource($student);
        } else {
            return response()->json([
                'msg' => 'Unauthorized'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, Request $request)
    {
        $user = $request->user();
        if(!empty($user)) {
            $student->delete();
            return response('', 204);
        } else {
            return response()->json([
                'msg' => 'Unauthorized'
            ]);
        }
    }
}
