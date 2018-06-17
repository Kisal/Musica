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
	<div class="newDisc row">
		<h2 class="col-xs-12">New Disc</h2>
		<div class="col-xs-12">
			@include('web.fragment.error')
		</div>
		<div class="col-xs-12 col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
			<form method="POST" action="{{ route('disc.store')}}" class="">
				{{ csrf_field() }}
				<div class="form-group row">
					<label for="name" class="col-xs-12 col-sm-3">Name *</label>
					<div class="col-xs-12 col-sm-9"><input id="name" type="input" name="name"></div>
				</div>
				<div class="form-group row">
					<label for="description" class="col-xs-12 col-sm-3">Description *</label>
					<div class="col-xs-12 col-sm-9"><textarea id="description" name="description"></textarea> </div>
				</div>
				<div class="form-group row">
					<label for="year" class="col-xs-12 col-sm-3">Year *</label>
					<div class="col-xs-12 col-sm-9"><input id="year" type="input" name="year"></div>
				</div>
				<div class="form-group row">
					<label for="singer" class="col-xs-12 col-sm-3">Singer/Group *</label>
					<div class="col-xs-12 col-sm-9"><select id="singer" name="singer">
						@foreach($singers as $singer)
							<option value="{{$singer->id}}">{{$singer->name}}</option>
						@endforeach
					</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 ">
						<p>* fields are required</p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
						<button class="btn btn-dark " type="submit">Create</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection