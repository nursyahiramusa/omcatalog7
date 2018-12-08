<!--<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{asset('bootshop/themes/images/ico-cart.png')}}" alt="cart">{{ count(Cart::content()) }} Items in your cart  <span class="badge badge-warning pull-right">RM {{ Cart::total() }}</span></a></div>-->
<ul id="sideManu" class="nav nav-tabs nav-stacked">
	<?php
		$categoriess = \DB::table('categories')->orderBy('name', 'asc')->get();
	?>
@foreach($categoriess as $categories)
	<?php
		$jumlah = \DB::table('materials')->where('categories_id', $categories->categories_id)->where('status_id', 1)->get();
	?>
	<li><a href="{{ url('materials/categories/'.$categories->categories_id) }}">{{$categories->name}} [{{count($jumlah)}}]</a></li>
@endforeach
</ul>
<br/>
<?php $materialss = \DB::table('materials')->inRandomOrder()->limit(2)->get();?>
@foreach($materialss as $materials)
  <div class="thumbnail">
  	<?php
  		$image = \DB::table('base64')->where('materials_id', $materials->materials_id)->value('name');
  		$photo = base64_decode($image);
  	?>
	<img style="height: 200px;" src="{{ $photo }}"/>
	<div class="caption">
	  <h5>{{ $materials->name }}</h5>
		<h4 style="text-align:center"><a class="btn" href="{{ url('materials/show/'.$materials->materials_id) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{ url('add-to-cart/'.$materials->materials_id) }}">Add to <i class="icon-shopping-cart"></i></a>
			<div>
				<a class="btn btn-primary" href="#">RM {{ number_format($materials->price, 0) }}</a>
			</div>
		</h4>
	</div>
  </div>
 @endforeach