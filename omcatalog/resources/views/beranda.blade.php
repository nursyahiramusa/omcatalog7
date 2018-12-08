@extends('layouts.master')

@section('content')

<ul class="thumbnails">
@foreach($materialss->chunk(3) as $materialsChunk)
<div class="row">
	@foreach($materialsChunk as $materials)
	<li class="span3">
	  <div class="thumbnail">
	  	<?php
	  		$image = \DB::table('base64')->where('materials_id', $materials->materials_id)->value('name');
	  		$photo = base64_decode($image);
	  	?>
		<a  href="{{ url('materials/show/'.$materials->materials_id) }}"><img style="height: 200px;" src="{{ $photo }}" alt=""/></a>
		<div class="caption">
		  <h5>{{ $materials->name }}</h5>
		 
		  <h4 style="text-align:center"><a class="btn" href="{{ url('materials/show/'.$materials->materials_id) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{ url('add-to-cart/'.$materials->materials_id) }}">Add to <i class="icon-shopping-cart"></i></a>
		  	<div>
		  		<a class="btn btn-primary" href="#">RM {{ number_format($materials->price, 0) }}</a>
		  	</div>
		  </h4>
		</div>
	  </div>
	</li>
	@endforeach
</div>
@endforeach
</ul>


@endsection

@section('scripts')
	
	<script>
		$(document).ready(function(){
			var flash = "{{ Session::has('pesan') }}";
			if(flash){
				var pesan = "{{ Session::get('pesan') }}";
				swal('success', pesan, 'success');
			}
		});
	</script>

@endsection