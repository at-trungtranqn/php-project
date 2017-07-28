@extends('admin.layouts.master')

@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <form role="form">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="dateChooser"></label>
                                <input type="datetime-local" class="form-control" id="dateChooser">
                            </div>
                            <table id="example1" class="table table-bordered table-striped dataTable table-hover"
                                   role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th style="width: 1em">ID</th>
                                    <th style="width: 7em">Food Name</th>
                                    <th style="width: 7em">Category Name</th>
                                    <th>Description</th>
                                    <th style="width: 3em">Price</th>
                                    <th style="width: 7em">confirm</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < 10;)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $foodName = 'fish-fish-fish '.$i }}</td>
                                        <td>{{ $categoryName = 'canh cá '.$i  }}</td>
                                        <td>this is description</td>
                                        <td>{{ 10.000 }}</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="" id="quantity" placeholder="quantity" style="width: 70px; float: left">
                                                <button type="button" class="btn btn-xs btn-primary" style="float: right">choose</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
