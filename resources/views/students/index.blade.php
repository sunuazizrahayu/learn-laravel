@extends('layouts/app')
@section('title', $title)


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Students</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Hover Data Table</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="mytable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="10px">No</th>
								<th>Nama</th>
								<th>NRP</th>
								<th>Email</th>
								<th>Jurusan</th>
								<th width="80px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($mahasiswa as $mhs)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $mhs->nama }}</td>
								<td>{{ $mhs->nrp }}</td>
								<td>{{ $mhs->email }}</td>
								<td>{{ $mhs->jurusan}} </td>
								<td>
									<a href="{{ url('/students/'. $mhs->id ) }}" class="btn btn-info btn-xs">Detail</a>
									<a href="{{ url('/students/'. $mhs->id ) }}" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
									<a href="{{ url('/students/'. $mhs->id ) }}" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
								</td>
							</tr>	
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th width="10px">No</th>
								<th>Nama</th>
								<th>NRP</th>
								<th>Email</th>
								<th>Jurusan</th>
								<th width="10px">Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('script')
<script>
$(function () {
	$('#mytable').DataTable()
	/*
	$('#mytable').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : false,
		'ordering'    : true,
		'info'        : true,
		'autoWidth'   : false
	})
	*/
})
</script>
@endsection