@extends('admin.master')

@section("content")

<!DOCTYPE html>
<html>
<head>
  <title>workshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: linear-gradient(#a7bf68,#6190e8)">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">workshop</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">workshop</li>
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
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">workshop</a>
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
                  <th>ID</th>
                  <th>Workshop Title</th>
                  <th>workshop_image</th>
                  <th>Action</th>
                  </tr>
                </thead>
                @foreach($item as $wi)<!--for each used to fetch multiple data-->
<tr>
         <td>
          {{$wi->id}}
        </td>
        <td>
          {{$wi->title}}
        </td>
        <td>
          <img src="../upload/{{$wi->image}}" width="100px" height="100px">
        </td>
        <td>
        	<a href="{{url('admin/c_view/' .$wi->id)}}"><button class="btn btn-primary"><span class="fas fa-eye"></span></button></a>
          <a href="{{url('admin/c_edit/' .$wi->id)}}"><button class="btn btn-warning"><span class="fas fa-edit"></span></a>
          <a href="{{url('admin/c_delete/' .$wi->id)}}"><button class="btn btn-danger"><span class="fas fa-trash-alt"></a>
        </td>
      </tr>

    @endforeach
  </table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</body>
