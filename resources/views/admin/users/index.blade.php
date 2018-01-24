@extends('layouts.app')
@section('content')
<div class="row">
	<div class='col-md-6 col-md-offset-3'>
		<ul class="list-group">
			@foreach($users as $user)
			<li class="list-group-item" style="margin-top: 20px">
				<span>{!! $user['name'] !!}</span>
				<span class="float-md-right clearfix">
					Joined ({{ $user -> created_at -> diffForHumans()}})
					<button class="btn btn-xs btn-primary">Follow</button>
				</span>
			</li>
				@endforeach
		</ul>
	</div>
</div>
	   
	
@endsection
