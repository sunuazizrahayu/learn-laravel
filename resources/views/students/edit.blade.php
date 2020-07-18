@extends('layouts/app')
@section('title', 'Edit Students')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Edit Students</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- Horizontal Form -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Students</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form class="form-horizontal" method="post" action="{{ url('students/'. $student->id) }}">
					@method('patch')
					@csrf
					<div class="box-body">
						<div class="form-group @error('nama') has-error @enderror">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" value="{{ $student->nama }}">
								@error('nama')<span class="help-block">{{ $message }}</span>@enderror
							</div>
						</div>
						<div class="form-group @error('nrp') has-error @enderror">
							<label class="col-sm-2 control-label">NRP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nrp" value="{{ $student->nrp }}">
								@error('nrp')<span class="help-block">{{ $message }}</span>@enderror
							</div>
						</div>
						<div class="form-group @error('email') has-error @enderror">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email" value="{{ $student->email }}">
								@error('email')<span class="help-block">{{ $message }}</span>@enderror
							</div>
						</div>
						<div class="form-group @error('jurusan') has-error @enderror">
							<label class="col-sm-2 control-label">Jurusan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="jurusan" value="{{ $student->jurusan }}">
								@error('jurusan')<span class="help-block">{{ $message }}</span>@enderror
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{url('students')}}"><button class="btn btn-default">Kembali</button></a>
						<button type="submit" class="btn btn-primary pull-right">Simpan</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
@endsection
