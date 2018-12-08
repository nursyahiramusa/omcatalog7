@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1">
                <!--<span style="color: red;"><small>*Click name for details</small></span>-->
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Total Pay</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Proof of Payment</th>
                  </tr></thead>
                <tbody>
                @foreach($confirmationss as $index=>$confirmations)
                <tr>
                  <td>{{ $confirmations->orders->orders_id }}</td>
                  <?php
                    $user = \DB::table('users')->where('users_id', $confirmations->users_id)->value('name');
                  ?>
                  <td class="confirmations" orders-id="{{ $confirmations->orders_id }}" style="cursor: pointer; color: blue;">{{ $user }}</td>
                  <td>RM {{ number_format($confirmations->orders->totalPay, 0) }}</td>
                  <td>{{ $confirmations->orders->date }}</td>
                  <?php
                      $status = $confirmations->orders->status->status_invoice_id;
					 
                      $color = 'green';
                      if($status == 1){
                        $color = 'yellow';
                      }
                      if($status == 2){
                        $color = 'blue';
                      }
                      if($status == 3){
                        $color = 'green';
                      }
                      if($status == 4){
                        $color = 'red';
                      }
                  ?>
                  <td style="color: {{ $color }}">{{ $confirmations->orders->status->name }}</td>
                  <?php
                      $photo = $confirmations->photo;
                      $lampiran = base64_decode($photo);
                  ?>
                  <td><a href="{{ $lampiran }}" download>Download Attachment</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

       <!-- /.modal -->

        <div class="modal modal-default fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail confirmations Pempayan</h4>
              </div>
              <div class="modal-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        Receiver Name
                      </th>
                      <td>
                        :
                      </td>
                      <td id="nama-penerima">
                        
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Address
                      </th>
                      <td>
                        :
                      </td>
                      <td id="alamat">
                        
                      </td>
                    </tr>
                  </thead>
                </table>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        Nama Barang
                      </th>
                      <th>
                        Qty
                      </th>
                      <th>
                        Subtotal
                      </th>
                    </tr>
                  </thead>
                  <tbody id="barangs">
                    
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

@endsection

@section('scripts')

<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function(){
    var flash = "{{ Session::has('pesan') }}";
    if(flash){
      var pesan = "{{ Session::get('pesan') }}";
      swal('success', pesan, 'success');
    }

    // Ketika detial confirmations
    $('body').on('click', '.confirmations', function(){
      var orders_id = $(this).attr('orders-id');
      var url = "{{ url('confirmations/detail') }}"+'/'+orders_id;
      $('#nama-penerima').empty();
      $('#alamat').empty();
      $('#barangs').empty();

      $.ajax({
        type : 'get',
        dataType : 'json',
        url : "{{ url('confirmations/detail') }}"+'/'+orders_id,
        success : function(data){
          // console.log(data);
          $('#nama-penerima').append(data.hasil.nama_penerima);
          $('#alamat').append(data.hasil.alamat);

          $.each(data.hasil.barang, function(i, v){
            console.log(v);

            var barang = '<tr>';

            barang += '<td>';
            barang += v.nama_barang;
            barang += '</td>';

            barang += '<td>';
            barang += v.qty;
            barang += '</td>';

            barang += '<td>';
            barang += 'Rp. '+v.subtotal;
            barang += '</td>';

            barang += '</tr>';

            $('#barangs').append(barang);
          });

          $('#modal-info').modal();
        }
      });
    });

    // Ketika hapus barang
    $('body').on('click', '.hapusBarang', function(e){
      e.preventDefault();
      var barang_id = $(this).attr('barang-id');
      var url = "{{ url('delete/barang') }}"+'/'+barang_id;
      $('.confirmDelete').attr('href', url);
        
      $('#modal-danger').modal();
    });

  });
</script>

@endsection