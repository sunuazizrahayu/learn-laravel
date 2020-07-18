@extends('layouts/app')
@section('title', 'Students Detail')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Students</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- Horizontal Form -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Students Detail Information</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<div class="form-horizontal">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<span class="form-control">{{ $student->nama }}</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">NRP</label>
							<div class="col-sm-10">
								<span class="form-control">{{ $student->nrp }}</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<span class="form-control">{{ $student->email }}</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jurusan</label>
							<div class="col-sm-10">
								<span class="form-control">{{ $student->jurusan }}</span>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{url('students')}}"><button class="btn btn-default">Kembali</button></a>

						<div class="pull-right">
							<a href="{{url('students/'.$student->id.'/edit')}}" class="btn btn-warning">Edit</a>
							&nbsp;
							<form action="{{ $student->id }}" style="display: inline;" method="post">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-danger">Hapus</button>
							</form>
						</div>
					</div>
					<!-- /.box-footer -->
				</div>
			</div>
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