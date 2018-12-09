@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <a href="{{ url('categories/create') }}" class="btn btn-info">Add Category</a>
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr></thead>
                <tbody>
                @foreach($categoriess as $index=>$categories)
                <tr>
				  <td>{{ $categories->categories_id }}</td>
                  <td>{{ $categories->name }}</td>
                  <td>
                    <a href="{{ url('categories/edit/'.$categories->categories_id) }}"><i class="fa fa-fw fa-edit"></i></a>
					<a href="" categories-id="{{ $categories->categories_id }}"><i class="fa fa-fw fa-trash"></i></a>
					<!--<a href="{{ action('categories_controller@delete', ['materials'=>$categories->categories_id, 'id'=>$categories->categories_id]) }}" categories-id="{{ $categories->categories_id }}" categories-id="{{ $categories->categories_id }}"><i class="fa fa-fw fa-trash"></i></a>-->
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
                <h4 class="modal-title">Confirm Delete</h4>
              </div>
              <div class="modal-body">
				<p>Deleting this category is the same as deleting all materials under it.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
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

    // Ketika hapus barang
    $('body').on('click', '.hapusBarang', function(e){
      e.preventDefault();
      var barang_id = $(this).attr('categories-id');
      var url = "{{ url('categories/delete') }}"+'/'+barang_id;
      $('.confirmDelete').attr('href', url);
      
      $('#modal-danger').modal();
    });

  });
</script>

@endsection