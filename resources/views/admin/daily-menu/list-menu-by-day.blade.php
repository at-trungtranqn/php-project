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
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable table-hover" role="grid"
                               aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th style="width: 1em">ID</th>
                                <th style="width: 1em">FID</th>
                                <th style="width: 7em">Food Name</th>
                                <th style="width: 1em">Quantity</th>
                                <th style="width: 8em">Date</th>
                                <th style="width: 1em">Detail - Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < 10;)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $foodId = $i }}</td>
                                    <td>{{ $foodName = 'canh cá '.$i  }}</td>
                                    <td>{{ 30 }}</td>
                                    <td>{{ $date = '30-01-2017' }}</td>
                                    <td><a href="{{ route('detail-food') }}"><span class="glyphicon glyphicon-zoom-in">detail</span></a> - <a
                                                href="{{ route('update-food') }}"><span class="glyphicon glyphicon-pencil">edit</span></a></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
