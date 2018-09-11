@extends('backend.layouts.app')

@section('content')

<div class="row">
	<div class ="col-md-12">
		<div class="panel">
			<div class="panel-heading">
			<h3 class="panel-title bold">បញ្ញីឈ្មោះសិស្ស</h3>
				<div class="right">
				<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
				<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
				</div>
				<div class="panel-body no-padding">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>លរ</th>
					            <th>ឈ្មោះ</th>
					            <th>ភេទ</th>
					            <th>ទូរស័ព្ទ</th>
					            <th>ទីកន្លែងកំណើត</th>
					            <th>អត្ថសញ្ញណប័ណ្ណ</th>
					            <th>ស្នាក់នៅបច្ចុប្បន្ន</th>
					            <th>FB ID</th>
					            <th>មកពីវិទ្យាល័យ</th>
					            <th>កម្រិតវប្បធម៌</th>
					            <th>និទ្ទេស</th>
					            <th>ពត៌មានលំអិត</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $product)
        					<tr>
					            <td>{{ $product->id }}</td>
					            <td>{{ $product->name }}</td>
					            <td>{{ $product->gender }}</td>
					            <td>{{ $product->phone_number }}</td>
					            <td>{{ $product->p_city }}</td>
					            <td>{{ $product->id_number }}</td>
					            <td>{{ $product->c_city }}</td>
					            <td>{{ $product->fb_id }}</td>
					            <td>{{ $product->from_school }}</td>
					            <td>{{ $product->edu_level }}</td>
					            <td>{{ $product->grade }}</td>
            				<td>
                				<form action="#" method="POST">
                				<a class="btn btn-sm btn-info" href="{{ route('show') }}">Show</a> 
                   					 {{-- <a class="btn btn-sm btn-primary" href="#">Edit</a> --}}

                    		@csrf
                			</form>
            				</td>
        				</tr>
        					@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection()