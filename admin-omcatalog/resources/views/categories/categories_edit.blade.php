@extends('layouts.master')

@section('content')

<div class="box box-primary">
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ url('categories/update/'.$categories->categories_id) }}">
    	{{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Category Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $categories->name }}">
          @if ($errors->has('name'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
        </div>

      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <span class="submitLoading" style="display: none;"><img src="{{ asset('loading.gif') }}"></span>
      </div>
    </form>
  </div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		$("button[type='submit']").click(function(){
			$('.submitLoading').show();
		});
	});
</script>

@endsection