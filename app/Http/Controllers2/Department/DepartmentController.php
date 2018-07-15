<?php

namespace App\Http\Controllers\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
        $departments = DB::table('dept')->get();

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
            $deptInfo = [
                'dname' => $name,
                'loc' => $location
            ];
            $res = DB::table('dept')->insert($deptInfo);
            if ($res == 1) {
                return redirect('/departments/');
            }
        }
        return redirect('/departments/');
    }

    public function edit($deptno)
    {
        $department = DB::table('dept')->where('deptno', $deptno)->first();
        /*print('<pre>');
        print_r($department);
        print('<pre/>');*/


        return view('department.edit', ['locations' => $this->locations, 'department' => $department]);

    }

    public function update(Request $request)
    {
        $departmentId = $request->txtDepartmentId;
        $name = $request->txtDepartmentName;
        $location = $request->cmbLocation;
        if ($name != "" && $location != "") {
            $deptInfo = [
                'dname' => $name,
                'loc' => $location
            ];
            $res = DB::table('dept')
                ->where('deptno', $departmentId)
                ->update($deptInfo);
            if ($res == 1) {
                return redirect('/departments/');
            }
        }
        return redirect('/departments/');
    }

    public function delete($deptno)
    {
        $res = DB::table('dept')
            ->where('deptno', $deptno)
            ->delete();
        if ($res == 1) {
            return redirect('/departments/');
        }
        return redirect('/departments/');
    }

}
