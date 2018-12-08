@extends('layouts.master')

@section('content')

<div class="box box-primary">
    <!-- /.box-header -->
    <!-- form start -->

    <div class="col-md-12 text-center">
    	<h1>{{ $materials->name }}</h1>
    </div>

    <div class="row text-center">
    	<div class="col-md-12">
    		<img style="width: 200px;" src="{{ asset('image/'.$materials->gambar->name) }}">
    	</div>
    </div>

    <div class="row text-center">
    	<div class="col-md-12">
    		{!! $materials->description !!}
    	</div>
    </div>

    <div class="row text-center">
    	<div class="col-md-4 col-md-offset-4">
    		<table class="table">
                <tr>
                    <th>price</th>
                    <td>:</td>
                    <td>RM {{ number_format($materials->price, 2) }}</td>
                </tr>
                <!-- <tr>
                    <th>Discount</th>
                    <td>:</td>
                    <td>{{ $materials->discount }}%</td>
                </tr>
                <tr>
                    <th>price Akhir</th>
                    <td>:</td>
                    <?php
                        if($materials->discount != 0)
                        {
                            $discount = ($materials->price * $materials->discount) / 100;
                            $price = $materials->price - $discount;
                        }
                        else
                        {
                            $price = $materials->price;
                        }
                    ?>
                    <td>Rp. {{ number_format($price, 2) }}</td>
                </tr> -->
            </table>
    	</div>
    </div>

  </div>

@endsection