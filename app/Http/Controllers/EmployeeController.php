<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Redirect;
use PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('employee', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeeAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $data = new Employee;
        $data->fill($input);
        $data->save();
        return redirect('/')->with('message', "inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        if(!empty($employee)) {
            return view('employeeEdit', compact('employee'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->input();
        $employee = Employee::find($id);
        if(!empty($employee)) {
            $employee->update($input);
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if(!empty($employee)) {
            $employee->delete();
        }
        return redirect('/');
    }

    /**
     * Generate PDF.
     *
     * @return download PDF file with download method
     */
    public function createPDF() {
        // retreive all records from db
        $data = Employee::all()->toArray();
        // share data to view
        view()->share('employee',$data);

        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('employee-info.pdf');
      }
}
