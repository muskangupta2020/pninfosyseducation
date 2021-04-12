@extends("admin.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banner</h1>
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
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">edit Banner</a>
                </div>
              </div>
              
<form  method="post" action="{{url('category/banner/update')}}" enctype="multipart/form-data">

           @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
    
              Banner Name: <input class="form-control" type="text" name="title" value="{{$edit->title}}"><br>
              Description: <input class="form-control" type="text" name="description" value="{{$edit->description}}"><br>

             Image: <img src="{{ url('/upload/'.$edit->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"><br>

             <input type="file" name="image" class="form-control"><br>
              
                      <input class="form-control btn btn-success" type="submit" name="update" value="update">
        </form>
  
</div>
  </div>
</div>
   </div>
   
    <!----end modal form------>

   <!----end data table------>
</div>

@endsection