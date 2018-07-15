@extends('layouts.default.layout')

@section('content')
    <section class="page-heading">
        <h2>Edit Department - #{{$department->deptno}}</h2>
        <hr>
    </section>

    <section class="page-content">
        <div class="col-sm-12">
            <div class="action-buttons">
                <a href="{{ url('/departments/') }}" class="btn btn-secondary"><<< Go Back</a>
            </div>
        </div>


        <div class="col-sm-12">
            <form method="post" name="create-department" id="create-department" action="{{ url('/departments/update/') }}">
                @csrf
                <div class="form-group">
                    <label for="department-name">Name : </label>
                    <input type="text" class="form-control" id="txtDepartmentName" name="txtDepartmentName" placeholder="Enter department name" value="{{$department->dname}}">
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Location</label>
                    <select class="form-control" id="cmbLocation" name="cmbLocation">
                        <option value=""></option>
                        @if ($locations)
                            @foreach ($locations as $location)
                                <option value="{{$location}}" @if($department->loc == $location) selected @endif>{{$location}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <input type="hidden" class="form-control" id="txtDepartmentId" name="txtDepartmentId" value="{{$department->deptno}}"/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>

@endsection