@extends('layout.home')

@section('content')
<div id="content" class="container">
	<div class="row menu-interior">
		<div class="col-xs-12 col-sm-4 col-sm-offset-2">
			<a class="btn btn-default" href="{{ route('disc.index') }}">List Discs</a></li>
		</div>
		<div class="col-xs-12 col-sm-4">
			<a class="btn btn-default" href="{{ route('singer') }}">List Singers/Groups</a></li>
		</div>

	</div>
	<div class="listDiscs row">
		@if($singer)
			<h2 class="col-xs-12 col-sm-10"> {{$singer->name}} discs </h2>
		@else
			<h2 class="col-xs-12 col-sm-10">List of Discs</h2>
		@endif
		<div class="col-xs-12 col-sm-2 pull-right">
		<a type="button" class="btn btn-dark " href="{{route('disc.create')}}">New Disc</a>
		</div>
		<div class="col-xs-12">
			@include('web.fragment.info')
			@include('web.fragment.error')
		</div>
		
		<div class="col-xs-12 table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name Disc</th>
					<th>Singer/Group</th>
					<th>Descripcion</th>
					<th>Year</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($discs as $disc)
				<tr>
					<td>{{ $disc->id }}</td>
					<td>{{ $disc->name }}</td>
					<td>{{ $disc->singer->name }}</td>
					<td>{{ $disc->description }}</td>
					<td>{{ $disc->year }}</td>
					<td class="links">
						<a class="btn btn-link" href="{{ route('disc.edit',$disc->id)}}">Edit</a>
						<form action="{{ route('disc.destroy',$disc->id)}}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-link">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>



@endsection
