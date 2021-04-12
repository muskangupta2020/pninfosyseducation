@extends('admin.master')

@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>

    <body>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: linear-gradient(#fff,#076585)">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark" class="text-center">Workshop</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Workshop</li>
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
                        <a class="btn btn-info btn-sm" href="" data-toggle="modal"data-target="#exampleModal">Add Workshop</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>id</th>
                    <th>Workshop Title</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($workshopdata as $w)
                    <tr>
                    <td>{{ $w->id }}</td>   
                    <td>{{ $w->title }}</td>
                    <td> <a href="{{ url('admin/edit/' . $w->id) }}"><button class="btn btn-#0ae"><span class="fas fa-edit" ></span></a>
                    <a href="{{ url('admin/delete/' . $w->id) }}"><button class="btn btn-#a7bfe8"><span class="fas fa-trash-alt" ></a>
                    </td>
                        </tr>
                    @endforeach
                    </tbody>



                                        {{-- <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th>Ans</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> --}}
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
                            <h5 class="modal-title" id="exampleModalLabel">Add Workshop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #1488cc">
                            <center>
                                <h1 style="color: white">Add Workshop</h1>
                                <form action="{{ url('admin/workshop_save') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <br>
                                   Workshop Title:<input type="text" name="title">
                                    <br><br>
                                    <input type="submit" name="submit" value="submit">
                                    <br><br>
                                </form>
                            </center>
                        </div>
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
