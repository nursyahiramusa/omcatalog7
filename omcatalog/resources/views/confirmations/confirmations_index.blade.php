@extends('layouts.master')

@section('content')

<div class="row">
	<div class="span9">
		
		<form class="form-horizontal" action="{{ url('confirmations/store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

	        <div class="control-group">
	            <label class="control-label" for="inputFname">Order ID<sup>*</sup></label>
	            <div class="controls">
	              <input id="email" type="number" class="form-control" name="orders_id" value="{{ old('orders_id') }}" required autofocus>
	              @if ($errors->has('orders_id'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('orders_id') }}</strong>
	                    </span>
	                @endif
	            </div>
	        </div>

	        <div class="control-group">
	            <label class="control-label" for="aditionalInfo">Proof of Payment</label>
	            <div class="controls">
	              <input id="password" type="file" class="form-control" name="images" required>
	              @if ($errors->has('images'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('images') }}</strong>
	                    </span>
	                @endif
	            </div>
	        </div>
	    
	    <div class="control-group">
	            <div class="controls">
	                <input type="hidden" name="email_create" value="1">
	                <input type="hidden" name="is_new_customer" value="1">
	                <input class="btn btn-large btn-success" type="submit" value="Submit">
	            </div>
	        </div>      
	    </form>

	</div>
</div>

@endsection

@section('scripts')

<script>
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}
	});
</script>

@endsection