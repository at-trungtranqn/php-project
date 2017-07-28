@extends('admin.layouts.master')
@section('main-content')
    <div class="row center">
        <!-- left column -->
        <div class="col-md-12">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Create New Material</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="materialName">Name</label>
                                <input type="text" class="form-control" id="materialName" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="categoryName">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="from">From</label>
                                <input type="text" class="form-control" id="from" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price"
                                       placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Choose Image</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <input type="submit" class="btn btn-primary" value="Create">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection