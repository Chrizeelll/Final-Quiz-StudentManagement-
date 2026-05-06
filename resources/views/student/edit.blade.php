@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">{{ __('Student Update') }}</h1> 
                    @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">

                <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Edit Student Information</h3>
                   </div>

                     <form  action="{{ route('student.update', $student->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                       <div class="row card-body col-12">

                         <div class="form-group col-12">
                            <label>First Name</label>
                               <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" required value="{{ $student->fname }}">
                         </div>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror
    

                        <div class="form-group col-12">
                           <label>Middle Name</label>
                          <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your Middle Name" required value="{{ $student->mname }}">
                        </div>
                          @error('mname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label>Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name" required value="{{ $student->lname }}">
                        </div>
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror


                        <div class="form-group col-12">
                          <label>Address</label>
                          <input type="text" class="form-control" id="address" name="add" placeholder="Enter Address" required value="{{ $student->add }}">
                        </div>
                          @error('add') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label>Date of Birth</label>
                          <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" requiredvalue="{{ $student->dob }}">
                        </div>
                          @error('dob') <span class="text-danger">{{$message}}</span> @enderror
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success col-12">Update</button>
                  
                </div>

           
              </form>


                </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection