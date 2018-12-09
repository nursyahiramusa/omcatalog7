@extends('layouts.master')

@section('content')

<div class="box box-primary">
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ url('materials/update/'.$materials->materials_id) }}" enctype="multipart/form-data">
    	{{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $materials->name }}">
          @if ($errors->has('name'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea name="description" class="form-control" id="editor1" rows="10">{{ $materials->description }}</textarea>
          @if ($errors->has('description'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Categories</label>
          <select class="form-control select2" name="categories_id">
          	@foreach($categoriess as $categories)
          	<option value="{{ $categories->categories_id }}" {{ ($materials->categories_id == $categories->categories_id) ? 'selected' : '' }}>{{ $categories->name }}</option>
          	@endforeach
          </select>
          @if ($errors->has('categories_id'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('categories_id') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="text" name="price" class="form-control" value="{{ $materials->price }}">
          @if ($errors->has('price'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Stock</label>
          <input type="number" name="stock" value="{{ $materials->stock }}" class="form-control">
          @if ($errors->has('stock'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select name="status" class="form-control select2">
			<option value="-1"></option>
            <option value="1">Show</option>
            <option value="2">Hide</option>
          </select>
          @if ($errors->has('status_ID'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('status_ID') }}</strong>
                        </span>
                    @endif
        </div>

        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" name="images" id="exampleInputFile">

          <p class="help-block">Example block-level help text here.</p>
          @if ($errors->has('images'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('images') }}</strong>
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