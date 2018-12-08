@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
      <div class="box-header">
          <h3 class="box-title">Striped Full Width Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Task</th>
              <th>Progress</th>
              <th style="width: 40px">Label</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Update software</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td><span class="badge bg-red">55%</span></td>
            </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
	</div>
</div>

@endsection