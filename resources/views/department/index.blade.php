@extends('layouts.default.layout')

@section('content')
    <section class="page-heading">
        <h2>Departments</h2>
        <hr>
    </section>

    <section class="page-content">
        <div class="col-sm-12">
            <div class="action-buttons">
                <a href="{{ url('/departments/create/') }}" class="btn btn-secondary">Add new department</a>
            </div>
        </div>


        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th width="120">Action</th>
                </tr>
                </thead>
                <tbody>
                @if ($departments)
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{ $department->deptno }}</td>
                            <td>{{ $department->dname }}</td>
                            <td>{{ $department->loc }}</td>
                            <td>
                                <a href="{{ url('/departments/edit').'/'.$department->deptno }}">
                                    Edit
                                </a>

                                <a href="{{ url('/departments/delete').'/'.$department->deptno }}" onclick="deleteFunction()">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">Records not found.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </section>

@endsection

<script>
    function deleteFunction()
    {
        alert('Are you sure want to delete ?');
    }
</script>