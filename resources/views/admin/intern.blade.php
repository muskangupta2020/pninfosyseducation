@extends("admin.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Interns</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">Add Interns</a>
                </div>
              </div>
              
              <div class="card-body">
                   @if($errors->any())
                   <div class="alert alert-danger">
                    <ul>

                     @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                     @endforeach
                    </ul>
                  </div>
                  @endif  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
      
     <th>Id</th>
     <th>Name</th>
     <th>Company</th>
     <th>Designation</th>
     <th>Image</th>
 
      <th>Action</th>
    </tr>
                </thead>
                <tbody>

               
        @foreach($interndata as $id)

        <tr>
          <td>{{$id->id}}</td>
          <td>{{$id->name}}</td>
          <td>{{$id->company}}</td>
          <td>{{$id->designation}}</td>
          <td><img src="{{ url('/upload/'.$id->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
         
         <td>
          <a href="{{url('admin/intern/edit/'.$id->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;
          <a href="{{url('admin/intern/delete/'.$id->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;
          
          </td>

        </tr>

    @endforeach

 </tbody>
               
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
                            <h5 class="modal-title" id="exampleModalLabel">Add Interns</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #1488cc">
                            <center>
                                <h1 style="color: white">Add Interns</h1>
                                <form action="{{ url('admin/internsave') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <br>
                                    Name:<input type="text" name="name">
                                    <br><br>
                                    Company Name:<input class="form-control" type="text" name="company"><br>
                                    Designation:<input class="form-control" type="text" name="designation"><br>
                                  Image:<input class="form-control" type="file" name="image"><br>
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


    </section>
    </div>


   <!----end data table------>


@endsection