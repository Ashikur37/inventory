@extends('layouts.admin')

@section('content')
<style>
    .info-box>a{
        color: #fff;
    }
</style>
<!-- /.card-header -->
<div class="row" style="height: 300px;">


    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">

        <!-- /.col -->
       
        <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h3>10</h3>

                  <p>Observers</p>
                </div>

                <a href="{{URL::to('admin/appointment/list')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>



              <!-- /.info-box-content -->
            <!-- /.info-box -->
          </div>
          
         
        <!-- /.col -->
      </div>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->

@endsection
