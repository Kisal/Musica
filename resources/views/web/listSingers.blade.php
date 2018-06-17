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
	<div class="listSingers row">
		<h2 class="col-xs-12">List of Singers/Groups</h2>
		<div class="col-xs-12 table-responsive">	
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name Singer/Group</th>
						<th>Music Style</th>
						<th colspan="1"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($singers as $singer)
					<tr>
						<td>{{ $singer->id }}</td>
						<td>{{ $singer->name }}</td>
						<td>{{ $singer->music_style }}</td>
						<td class="links"><a class="btn btn-link" href="{{ route('singerDiscs',$singer) }}">View discs</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection
