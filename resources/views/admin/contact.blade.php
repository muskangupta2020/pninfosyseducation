@extends("admin.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contact</h1>
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
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">Contact</a>
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
     <th>Email</th>
     <th>Phone Number</th>
     <th>Message</th>
 
      <th>Action</th>
    </tr>
                </thead>
                <tbody>

               
        @foreach($contactdata as $cd)

        <tr>
          <td>{{$cd->id}}</td>
          <td>{{$cd->name}}</td>
          <td>{{$cd->email}}</td>
          <td>{{$cd->contact}}</td>
          <td>{{$cd->message}}</td>
         <td>
          <a href="{{url('admin/contact/edit/'.$cd->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;
          <a href="{{url('admin/contact/delete/'.$cd->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;
          
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

                            <center>
                                <h1 style="color: white">Contact</h1>
                                <form action="{{ url('admin/contact') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                </form>
                            </center>
                        

            <!----end modal form------>

            <!----end data table------>
        </div>
      
        <!-- /.content-wrapper -->


    </section>
    </div>


   <!----end data table------>


@endsection