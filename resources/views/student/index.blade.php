@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">       
                <div class="card-head">
                     
                </div>

                <div class="card-body">

                    

                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Date of Birth</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody  >
                            @foreach ($students as $student)
                            <tr>
                                
                                <td>{{ $student->fname }}</td>
                                <td>{{ $student->mname }}</td>
                                <td>{{ $student->lname }}</td>
                                <td>{{ $student->add }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>

                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="container-fluid">
                <a href="{{ route('student.create') }}" class="btn btn-info">Add New Student</a>
                <div class="row"></div>

                <div class="card-footer">
                    
                </div>
             

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection