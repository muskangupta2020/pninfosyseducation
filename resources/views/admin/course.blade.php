@extends('admin.master')

@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: linear-gradient(#a7bf68,#6190e8)" >
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Courses</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Courses</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!---- data table------>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-tools">
                                        <a class="btn btn-info btn-sm" href="" data-toggle="modal"
                                            data-target="#exampleModal">Add Courses</a>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                   <th>ID</th>
                  <th>name</th>
                  <th>course_name</th>
                  <th>course_description</th>
                  <th>course_price</th>
                  <th>course_details</th>
                  <th>course_include</th>
                  <th>course_content</th>
                  <th>course_image</th>
                  <th>Action</th>
                                            </tr>
                                        </thead>




                                        
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>

            <!------modal form----->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">All Courses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       <center> <div class="modal-body" style="background-color: #007bff">
                            <h1 style="color: white">Add Courses</h1>
                            <form action="{{ url('admin/csave') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category Name</label>
                                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                                        @foreach ($coursedata as $s)
                                            <option value="{{ $s->name }}">
                                                {{ $s->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_Name</label>
                                    <input type="text" class="form-control" name="course_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_description</label>
                                    <input type="text" class="form-control" name="course_description"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_price</label>
                                    <input type="text" class="form-control" name="course_price" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_details</label>
                                    <input type="text" class="form-control" name="course_details" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_include</label>
                                    <input type="text" class="form-control" name="course_include" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_content</label>
                                    <input type="text" class="form-control" name="course_content" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Course_Image</label>
                                    <input type="file" class="form-control" name="course_image" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-light">Submit</button>
                            </form>
                        </div>
                         </center>
                    </div>
                </div>
            </div>

            <!----end modal form------>

            <!----end data table------>
        </div>
        <!-- /.content-wrapper -->

    @endsection
    </section>
    </div>
</body>

</html>
