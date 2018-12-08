@extends('layouts.master')

@section('content')

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="../">Home</a> <span class="divider">/</span></li>
		<li class="active"> Cart</li>
    </ul>
	<h3>  SHOPPING CART [ <small>{{ count(Cart::content()) }} Item(s) </small>]<a href="{{ url('shopping-cart/destroy') }}" class="btn btn-large pull-right"> Empty Cart </a></h3>	
	<hr class="soft"/>
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Description</th>
                  <th>Quantity</th>
				  <th>Price</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
              	@foreach($materialss as $materials)
                <tr>
                  <td>{{ $materials->name }}</td>
				  <td>
					<div class="input-append"><input disabled="" class="span1" style="max-width:34px" placeholder="{{ $materials->qty }}" id="appendedInputButtons" size="16" type="text">
					<button rowId="{{ $materials->rowId }}" class="btn kurangi-qty" type="button"><i class="icon-minus"></i></button>
						<a href="{{ $materials->rowId }}" class="btn add-qty"><i class="icon-plus"></i></a>				
					</div>
				  </td>
                  <td>RM {{ number_format($materials->price, 0) }}</td>
                  <td>RM {{ number_format($materials->subtotal, 0) }}</td>
                </tr>
                @endforeach
				</tbody>
            </table>
			</table>

	<a href="{{ url('/') }}" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	@if(count(Cart::content()) != 0)
	<a href="{{ url('shopping-cart/checkout') }}" class="btn btn-large pull-right">Checkout <i class="icon-arrow-right"></i></a>
	@endif
	
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		$('.add-qty').click(function(e){
			e.preventDefault();
			var rowId = $(this).attr('href');
			window.location.href = "{{ url('shopping-cart/update') }}"+'/'+rowId;
		});

		$('.kurangi-qty').click(function(e){
			e.preventDefault();
			var rowId = $(this).attr('rowId');
			window.location.href = "{{ url('shopping-cart/kurangi') }}"+'/'+rowId;
		});
	});
</script>

@endsection

@section('scripts')

<script>
		$(document).ready(function(){
			var flash = "{{ Session::has('pesan') }}";
			if(flash){
				var pesan = "{{ Session::get('pesan') }}";
				swal('', pesan, '');
			}
		});
	</script>

@endsection