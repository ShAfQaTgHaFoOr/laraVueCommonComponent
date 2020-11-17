@extends('_layouts.adminDefaultLayout')
@section('title', 'Post Category')

@section('content')

<section class="content-header">
    <h1>
      Post
      <small>Post Category</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      {{-- <li><a href="#">Post Category</a></li> --}}
      <li class="active">Post Category</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <h3 class="box-title">Admin Management</h3> -->
                    <div class="row">
                    <x-common-alert-component></x-common-alert-component>

                    <div class="col-sm-8">
                        <h4 class="page-title">Post Category</h4>
                    </div>
                    <div class="col-sm-4 text-right m-b-30">
                        <a href="javascript:;" class="btn btn-primary rounded" ><i class="fa fa-plus"></i> Add New </a>
                    </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="admin_table" class="table table-bordered table-striped">
                     <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                       <th>Status</th>
                       <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                    </table>
                  </div>
            </div>
        </div>
    </div>
</section>


@endsection
