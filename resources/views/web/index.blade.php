@extends('layout.home')

@section('content')
<div id="content" class="container">
	<div class="row menu">
		<div class="col-xs-12 col-sm-4 col-sm-offset-2">
			<a class="btn btn-default btn-lg" href="{{ route('disc.index') }}">List Discs</a></li>
		</div>
		<div class="col-xs-12 col-sm-4">
			<a class="btn btn-default btn-lg" href="{{ route('singer') }}">List Singers/Groups</a></li>
		</div>

	</div>
</div>
@endsection

