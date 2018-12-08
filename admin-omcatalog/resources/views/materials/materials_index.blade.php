@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1">
                <thead>
                  <tr>
                    <th>Material ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Categories</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr></thead>
                <tbody>
                @foreach($materialss as $index=>$materials)
                <?php 
                    $color = 'black';
                    $stock = $materials->stock;
                    if($stock == 0){
                      $color = 'red';
                    }
                ?>
                <tr style="color: {{ $color }}">
				  <td>{{ $materials->materials_id }}</td>
                  <td>{{ $materials->name }}</td>
                  <td>{{ $materials->price }}</td>
                  <td>{{ $materials->categories->name }}</td>
                  <td>{{ $materials->stock }}</td>
                  <td><span class="badge bg-{{ ($materials->status_id) == 1 ? 'green' : 'red' }}">{{ $materials->statuss['name'] }}</span></td>
                  <td>
                    <a href="{{ url('materials/edit/'.$materials->materials_id) }}"><i class="fa fa-fw fa-edit"></i></a>
                    <a href="" class="hapusmaterials" materials-id="{{ $materials->materials_id }}"><i class="fa fa-fw fa-trash"></i></a>
                    <a href="{{ url('materials/show/'.$materials->materials_id) }}"><i class="fa fa-fw fa-search"></i></a>
                  </td>
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

        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Yes</h4>
              </div>
              <div class="modal-body">
                <p>Are you really want to delete this material?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-outline confirmDelete">I'm sure</a>
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

    // Ketika hapus materials
    $('body').on('click', '.hapusmaterials', function(e){
      e.preventDefault();
      var materials_id = $(this).attr('materials-id');
      var url = "{{ url('delete/materials') }}"+'/'+materials_id;
      $('.confirmDelete').attr('href', url);
      
      $('#modal-danger').modal();
    });

  });
</script>

@endsection