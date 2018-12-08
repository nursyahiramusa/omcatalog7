@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="row">
	<!--<span><small style="color: red;">*Click receiver name for details</small></span>-->
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th>#</th>
				<th>Receiver Name</th>
				<th>Address</th>
				<th>Total Pay</th>
				<th>Date</th>
				<th>Order ID</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orderss as $index=>$orders)
			<tr>
				<td>{{ $index+1 }}</td>
				<!--<td class="penerima" style="cursor: pointer; color: blue;" orders-id="{{ $orders->orders_id }}"><span>{{ $orders->receiver_name }}</span></td>-->
				<td>{{ $orders->receiver_name }}</td>
				<td>{{ $orders->address }}</td>
				<td>RM {{ number_format($orders->totalPay,0) }}</td>
				<td>{{ $orders->date }}</td>
				<th>{{ $orders->orders_id }}</th>
				<td><p>{{ $orders->status->name }}</p></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail orders</h4>
      </div>
      <!--<div class="modal-body">
        <table class="table table-bordered">
        	<thead>
				<tr>
	        		<th>#</th>
	        		<th>Materials Name</th>
	        		<th>Quantity</th>
	        		<th>SubTotal</th>
	        	</tr>
        	</thead>
        	<tbody id="detail-orders">
        		
        	</tbody>
        </table>
      </div>-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
@section('scripts')

<script type="text/javascript" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function(){
		$('#myTable').DataTable();

		$('body').on('click', '.penerima', function(){
			var orders_id = $(this).attr('orders-id');

			$.ajax({
				type: 'get',
				dataType: 'json',
				url: "{{ url('invoice/detail') }}"+'/'+orders_id,
				success: function(data){

					$.each(data.hasil, function(i,v){
						var orders = '<tr>';

						orders += '<td>';
						orders += i+1;
						orders += '</td>';

						orders += '<td>';
						orders += v.name_barang;
						orders += '</td>';

						orders += '<td>';
						orders += v.qty;
						orders += '</td>';

						orders += '<td>';
						orders += v.subtotal;
						orders += '</td>';

						orders += '</tr>';

						$('#detail-orders').append(orders);
					});
				}
			});

			$('#myModal').modal();
		});
	});
</script>

@endsection