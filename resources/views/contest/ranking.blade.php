@extends('layouts.app')



@section('custom_css')
    <link href="{{ asset("/vendor/adminlte/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    

    <style>
   table { table-layout: fixed; }
   table th, table td {
        max-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
  </style>
@endsection




@section('content')
<div class="container">

    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <div class="col-md-4">
            <h3>{{ $contestData->title }}</h3>
          </div>
          <div class="col-md-8 pull-right">
            <button type="button" class="btn btn-flat bg-olive"> First to solve problem</button>
            <button type="button" class="btn btn-flat btn-info margin">Solved problem</button>
            <button type="button" class="btn btn-flat bg-red margin">Attempted problem</button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-12">
              <div class="box box-warning">
                <div class="box-body">
                  <table id="example2" class="table table-bordered text-center">
                    <thead>
                    <tr class="bg-gray">
                      <th >Rank</th>
                      <th style="width: 20%">Contestant Name</th>
                      <th >Solved</th>
                      <th >Time</th>
                      @php
                      $letter = range('A', 'Z');
                       $count = count($contestData->problem);
                      @endphp
                      @for($i=0; $i<$count; $i++)
                      <th >{{ $letter[$i] }}</th>
                      @endfor
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Muhammad Rabiul Alam MRAB</td>
                        <td>8</td>
                        <td>1471</td>
                        <td class="btn-info">
                          <p>2</p>
                          <p>234</p>
                        </td>
                        <td class="bg-olive">
                          <p>2</p>
                          <p>234</p>
                        </td>
                        <td class="bg-red">
                          <p>2</p>
                          <p>234</p>
                        </td>
                        <td>
                        ...
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.col-->

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

@endsection

@section('custom_js')

    <script src="{{ asset ("/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset ("/vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
    
@endsection