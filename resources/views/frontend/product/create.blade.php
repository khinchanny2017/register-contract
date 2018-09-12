@extends('frontend.layout.app')

@section('content')

<div class="container">
	<div class="row">
		{!! Form::open(['method' => 'POST', 'route' => 'storeproduct', 'class' => 'form-horizontal']) !!}
		<div class="col-md-3">
					   		 	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					        		{!! Form::label('name', 'ឈ្មោះ') !!}
					        		{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'Name']) !!}
					        		<small class="text-danger">{{ $errors->first('name') }}</small>
					    		</div>
					   		</div>
					   		<div class="col-md-3">
					   		 	<div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
					        		{!! Form::label('detail', 'អក្សរឡាតាំង') !!}
					        		{!! Form::text('detail', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        		<small class="text-danger">{{ $errors->first('detail') }}</small>
					    		</div>
					   		</div>

					   		<div class="col-md-12">
		   		<div class="btn-group pull-right">
		        	{!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
		        	{!! Form::submit("Submit", ['class' => 'btn btn-success']) !!}
		    	</div>
		   	</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection()