@extends('layout/main')

@section('title','Students')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10" style="margin: 0 auto">
				<h1 class="mt-2">Students List</h1>

        <a href="{{ url('/students/create') }}" class="btn btn-primary my-3">Add Students</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
            @foreach( $students as $student )
              <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->nama }}
                <a href="{{ url('/students/' . $student->id) }}" class="badge badge-primary badge-pill">Detail</a>
              </li>
            @endforeach
        </ul>

                
			</div>
		</div>
	</div>
@endsection