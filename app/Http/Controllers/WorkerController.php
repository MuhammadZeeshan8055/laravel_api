<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=Worker::get();

        return $employee;
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
        $employee=new Worker();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->save();

        return response()->json(['message' => 'Employee added successfully!'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker,$id)
    {
        $employee=Worker::find($id);
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Worker::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->update();

        return response()->json(['message' => 'Employee Updated successfully!'], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker, $id)
    {
        $employee=Worker::find($id);
        $employee->delete();

        return response()->json(['message' => 'Employee Deleted successfully!'], 200);
        
    }
}
