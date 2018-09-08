@extends('layout-frontend.app')

@section('content')
	
	<div class="container block">
		<img src="img/logo_ceoins.png" alt="">
		
			<div class="block01 man_h3 ">
				<h2><a href="{{ route('index') }}">ពាក្យចូលរៀន និងកិច្ចសន្យា</a></h2>
					<h3>ថ្នាក់បរិញ្ញាបត្រ</h3>	
			</div>			
		
		<div class="row">			
			{!! Form::open(['method' => 'POST', 'route' => 'store', 'class' => 'form-horizontal']) !!}
			<div class="panel panel-default">
    			<div class="panel-heading"><h4 class="font_title">ពត៌មានផ្ទាល់ខ្លួន</h4></div>
    			<div class="panel-body">
    				<div class="col-md-12​​​ padd_block">
		   				
					   		<div class="col-md-3">
					   		 	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					        		{!! Form::label('name', 'ឈ្មោះ') !!}
					        		{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'Name']) !!}
					        		<small class="text-danger">{{ $errors->first('name') }}</small>
					    		</div>
					   		</div>
					   		<div class="col-md-3">
					   		 	<div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
					        		{!! Form::label('en_name', 'អក្សរឡាតាំង') !!}
					        		{!! Form::text('en_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        		<small class="text-danger">{{ $errors->first('en_name') }}</small>
					    		</div>
					   		</div>
					   		<div class="col-md-3">
					   		 	<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
					        		{!! Form::label('gender', 'ភេទ') !!}
					        		{!! Form::text('gender', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        		<small class="text-danger">{{ $errors->first('gender') }}</small>
					    		</div>
					   		</div>		   		   	
					   		<div class="col-md-3">
					   			<div class="form-group{{ $errors->has('national') ? ' has-error' : '' }}">
					   			    {!! Form::label('national', 'សញ្ជាតិ') !!}
					   			    {!! Form::text('national', null, ['class' => 'form-control', 'required' => 'required']) !!}
					   			    <small class="text-danger">{{ $errors->first('national') }}</small>
					   			</div>
					   		</div>
		   			</div>
		   			<div class="col-md-12">
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
				   			    {!! Form::label('id_number', 'អត្ថសញ្ញណប័ណ្ណលេខ') !!}
				   			    {!! Form::text('id_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('id_number') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   		<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
				   		    {!! Form::label('dob', 'ថ្ងៃខែឆ្នាំកំណើត') !!}
				   		    {!! Form::date('dob', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   		    <small class="text-danger">{{ $errors->first('dob') }}</small>
				   		</div>
				   		</div>
		   			</div>
		   			<div class="col-md-12">
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('p_village') ? ' has-error' : '' }}">
				   			    {!! Form::label('p_village', 'ទីកន្លែងកំណើត ៖ ភូមិ') !!}
				   			    {!! Form::text('p_village', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('p_village') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('p_commune') ? ' has-error' : '' }}">
				   			    {!! Form::label('p_commune', 'ឃុំ​/សង្កាត់') !!}
				   			    {!! Form::text('p_commune', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('p_commune') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('p_district') ? ' has-error' : '' }}">
				   			    {!! Form::label('p_district', 'ស្រុក/ខណ្ឌ') !!}
				   			    {!! Form::text('p_district', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('p_district') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('p_city') ? ' has-error' : '' }}">
				   			    {!! Form::label('p_city', 'ខេត្ដ/ក្រុង') !!}
				   			    {!! Form::text('p_city', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('p_city') }}</small>
				   			</div>
				   		</div>
				   	</div>
				   	<div class="col-md-12">
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('c_village') ? ' has-error' : '' }}">
				   			    {!! Form::label('c_village', 'អាសយដ្ឋានបច្ចុប្បន្ម ៖ ភូមិ') !!}
				   			    {!! Form::text('c_village', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('c_village') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('c_commune') ? ' has-error' : '' }}">
				   			    {!! Form::label('c_commune', 'ឃុំ​/សង្កាត់') !!}
				   			    {!! Form::text('c_commune', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('c_commune') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('c_district') ? ' has-error' : '' }}">
				   			    {!! Form::label('c_district', 'ស្រុក/ខណ្ឌ') !!}
				   			    {!! Form::text('c_district', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('c_district') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('c_city') ? ' has-error' : '' }}">
				   			    {!! Form::label('c_city', 'ខេត្ដ/ក្រុង') !!}
				   			    {!! Form::text('c_city', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('c_city') }}</small>
				   			</div>
				   		</div>
		   			</div>
		   			<div class="col-md-12">
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
				   			    {!! Form::label('phone_number', 'ទូរស័ព្ទ') !!}
				   			    {!! Form::text('phone_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('phone_number') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('fb_id') ? ' has-error' : '' }}">
				   			    {!! Form::label('fb_id', 'Facebook Link') !!}
				   			    {!! Form::text('fb_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('fb_id') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('edu_level') ? ' has-error' : '' }}">
				   			    {!! Form::label('edu_level', 'កម្រិតវប្បធម៌') !!}
				   			    {!! Form::text('edu_level', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('edu_level') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
				   			    {!! Form::label('grade', 'និទ្ទេស') !!}
				   			    {!! Form::text('grade', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('grade') }}</small>
				   			</div>
				   		</div>
		   			</div>
		   			<div class="col-md-12">
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('from_school') ? ' has-error' : '' }}">
				   			    {!! Form::label('from_school', 'មកពីវិទ្យាល័យ') !!}
				   			    {!! Form::text('from_school', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('from_school') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('dir_school_name') ? ' has-error' : '' }}">
				   			    {!! Form::label('dir_school_name', 'ឈ្មោះនាយកវិទ្យាល័យ') !!}
				   			    {!! Form::text('dir_school_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('dir_school_name') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('dir_school_gender') ? ' has-error' : '' }}">
				   			    {!! Form::label('dir_school_gender', 'ភេទ') !!}
				   			    {!! Form::text('dir_school_gender', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('dir_school_gender') }}</small>
				   			</div>
				   		</div>
				   		<div class="col-md-3">
				   			<div class="form-group{{ $errors->has('dir_school_phone') ? ' has-error' : '' }}">
				   			    {!! Form::label('dir_school_phone', 'លេខទុរស័ព្ទនាយកវិទ្យាល័យ') !!}
				   			    {!! Form::text('dir_school_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
				   			    <small class="text-danger">{{ $errors->first('dir_school_phone') }}</small>
				   			</div>
				   		</div>
		   			</div>
    			</div>
  			</div>
  			<div class="panel panel-default">
    			<div class="panel-heading"><h4 class="font_title">អាណាព្យាបាល</h4></div>
    			<div class="panel-body">
    				<div class="col-md-12​​​ padd_block">		   				
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
					        	{!! Form::label('father_name', 'ឈ្មោះឪពុក') !!}
					        	{!! Form::text('father_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('father_name') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('mother_position') ? ' has-error' : '' }}">
					        	{!! Form::label('mother_position', 'មុខរបរ') !!}
					        	{!! Form::text('mother_position', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('mother_position') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('mother_phone_num') ? ' has-error' : '' }}">
					        	{!! Form::label('mother_phone_num', 'លេខទូរស័ព្ទ') !!}
					        	{!! Form::text('mother_phone_num', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('mother_phone_num') }}</small>
					    	</div>
					   	</div>
		   			</div>
		   			<div class="col-md-12​​​ padd_block">		   				
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
					        	{!! Form::label('mother_name', 'ឈ្មោះម្ដាយ') !!}
					        	{!! Form::text('mother_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('mother_name') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('father_position') ? ' has-error' : '' }}">
					        	{!! Form::label('father_position', 'មុខរបរ') !!}
					        	{!! Form::text('father_position', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('father_position') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('father_phone_num') ? ' has-error' : '' }}">
					        	{!! Form::label('father_phone_num', 'លេខទូរស័ព្ទ') !!}
					        	{!! Form::text('father_phone_num', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('father_phone_num') }}</small>
					    	</div>
					   	</div>
		   			</div>
		   			<div class="col-md-12​​​ padd_block">		   				
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('second_parents_2') ? ' has-error' : '' }}">
					        	{!! Form::label('second_parents_2', 'អាណាព្យាបាលទី២') !!}
					        	{!! Form::text('second_parents_2', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('second_parents_2') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('second_parents_2_postion') ? ' has-error' : '' }}">
					        	{!! Form::label('second_parents_2_postion', 'មុខរបរ') !!}
					        	{!! Form::text('second_parents_2_postion', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('second_parents_2_postion') }}</small>
					    	</div>
					   	</div>
					   	<div class="col-md-4">
					   		<div class="form-group{{ $errors->has('second_parents_2_phone_num') ? ' has-error' : '' }}">
					        	{!! Form::label('second_parents_2_phone_num', 'លេខទូរស័ព្ទ') !!}
					        	{!! Form::text('second_parents_2_phone_num', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        	<small class="text-danger">{{ $errors->first('second_parents_2_phone_num') }}</small>
					    	</div>
					   	</div>
		   			</div>
		   			<div class="col-md-12">
		   			<div class="col-md-12 padd_block col-md-12">
		   				<div class="form-group{{ $errors->has('address_parents') ? ' has-error' : '' }}">
		   				    {!! Form::label('address_parents', 'អាសយដ្ឋាន') !!}
		   				    {!! Form::text('address_parents', null, ['class' => 'form-control', 'required' => 'required']) !!}
		   				    <small class="text-danger">{{ $errors->first('address_parents') }}</small>
		   				</div>
		   			</div>
		   			</div>
    			</div>
    		</div>
    		<div class="panel panel-default">
    			<div class="panel-heading"><h4 class="font_title">ភាសាបរទេស</h4></div>
    			<div class="panel-body">
    				<div class="col-md-12​​​ padd_block">

    				</div>
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


 
@endsection

