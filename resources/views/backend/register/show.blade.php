@extends('backend.layouts.app')

@section('content')
<div class="row">
	<div class ="col-md-12">
		<div class="panel">
			<div class="panel-heading">
			<h3 class="panel-title bold">ព័ត៌មានលម្អិតពីសិស្ស</h3>
				<div class="right">
				<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
				<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
				</div>
				<div class="panel-body no-padding">
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Johnny</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection()