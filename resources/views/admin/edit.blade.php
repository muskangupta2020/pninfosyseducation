@extends("admin.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">categories</h1>
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
          <div class="col-8">
            <!-- Default box -->
            <center><div class="card">
              <div class="card-header">
                <h3 class="card-title" class="text-center">Title</h3>

                <div class="card-tools">
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal" class="text-center">Add Categories</a>
                </div>
              </div>
              
          <center><form  method="post" action="{{url('admin/update')}}">

           @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
    
              Course Name: <input class="form-control" type="text" name="name" value="{{$edit->name}}"><br>
          
              <input class="form-control btn btn-primary" type="submit" name="update" value="update">
        </form></center>
      
  
</div>
  </div>
  </center>
</div>

   </div>
   
    <!----end modal form------>

   <!----end data table------>
</div>

@endsection