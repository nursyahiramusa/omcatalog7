@extends('layouts.master')

@section('content')

<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center" colspan="4">INVOICE</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		@foreach($materialss as $index=>$materials)
		<tr>
			<td>{{ $materials->name }}</td>
			<td>{{ $materials->qty }}</td>
			<td>RM {{ $materials->subtotal() }}</td>
		</tr>
		@endforeach
		<tr>
			<th colspan="1">Transfer</th>
			<td colspan="2">Name : <b><i>Petronas HQ</i></b><br>Account Bank : <b><i>123456789</i></b></td>
		</tr>
	</tbody>
</table>

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