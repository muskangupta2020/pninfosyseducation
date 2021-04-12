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
                            <h1 class="m-0 text-dark" class="text-center">Navbar/Footer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Navbar/Footer</li>
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
                        <a class="btn btn-info btn-sm" href="" data-toggle="modal"data-target="#exampleModal">Add Navbar/Footer</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Logo</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($nfdata as $n)
                    <tr>
                    <td>{{ $n->id }}</td>   
                    <td>{{ $n->email}}</td>
                    <td>{{ $n->phone}}</td>
                    <td>{{ $n->description}}</td>
                    <td>{{ $n->address}}</td>
                    <td><img src="{{ url('/upload/'.$n->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                    <td>
          <a href="{{url('admin/navbarfooter/edit/'.$n->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;
          <a href="{{url('admin/navbarfooter/delete/'.$n->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;
          
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
                            <h5 class="modal-title" id="exampleModalLabel">Add Navbar/Footer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #1488cc">
                            <center>
                                <h1 style="color: white">Add Navbar/Footer</h1>
                                <form action="{{ url('admin/navbarfooter/save') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <br>
            Email:<input class="form-control" type="text" name="email"><br>
            Contact No.:    <input class="form-control" type="text" name="phone"><br>
            Address :    <input class="form-control" type="text" name="address"><br>
            Description:    <input class="form-control" type="text" name="description"><br>
            Logo:    <input class="form-control" type="file" name="image"><br>
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
-