<?php

namespace App\Http\Controllers\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Department\Department;

class DepartmentController extends Controller
{

    private $locations = [
        'NEW YORK',
        'DALLAS',
        'CHICAGO',
        'BOSTON',
        'TEXAS',
        'COLOMBO',
    ];


    public function index()
    {
        $departments = Department::all();

        //this print arayy properly
        /*   print('<pre>');
             print_r($departments);
             print('<pre/>');*/

        return view('department.index', ['departments' => $departments]);

    }

    public function create()
    {
        return view('department.create', ['locations' => $this->locations]);
    }

    public function store(Request $request)
    {
        $name = $request->txtDepartmentName;
        $location = $request->cmbLocation;

        if ($name != "" && $location != "") {

            //Eloquent ORM Store the data create the object
            $objDepartment = new Department();
            $objDepartment->dname = $name;
            $objDepartment->loc = $location;
            $res = $objDepartment->save();


            if ($res == 1) {
                return redirect('/departments/');
            }
        }
        return redirect('/departments/');
    }

    public function edit($deptno)
    {
        //using Eloquent ORM method to find into table
        /*$department = Department::find($deptno);*/

        $departments = Department::find($deptno);
        foreach ($departments as $department) {

          /*  print($employee->ename);
            print ('<BR/>');*/

        }
        exit;
        return view('department.edit', ['locations' => $this->locations, 'department' => $department]);

    }

    public function update(Request $request)
    {
        $departmentId = $request->txtDepartmentId;
        $name = $request->txtDepartmentName;
        $location = $request->cmbLocation;
        if ($name != "" && $location != "") {

            $department = Department::find($departmentId);
            $department->dname = $name;
            $department->loc = $location;
            $res = $department->save();

            if ($res == 1) {
                return redirect('/departments/');
            }
        }
        return redirect('/departments/');
    }

    public function delete($deptno)
    {
        $department = Department::find($deptno);
        $res = $department->delete();
        if ($res == 1) {
            return redirect('/departments/');
        }
        return redirect('/departments/');
    }

}
