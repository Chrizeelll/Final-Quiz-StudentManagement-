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
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Address</th>
                                <th>Date of Birth</th>
                            </tr>
                        </thead>

                        <tbody  >
                            @foreach ($students as $student)
                            <tr>
                                
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->fname }}</td>
                                <td>{{ $student->lname }}</td>
                                <td>{{ $student->mname }}</td>
                                <td>{{ $student->add }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>
                                    
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