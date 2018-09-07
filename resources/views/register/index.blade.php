@extends('layout-frontend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><a href="{{ route('create') }}">ពាក្យចូលរៀន នឹងកិច្ចសន្យា</a></h2>
            </div>
            
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
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

                    <a class="btn btn-sm btn-info" href="#">Show</a> 
                    <a class="btn btn-sm btn-primary" href="#">Edit</a>

                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>


@endsection