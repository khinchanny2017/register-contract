
@extends('backend.layouts.app')


@section('content')
<thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Date &amp; Time</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">763648</a></td>
                                                <td>Steve</td>
                                                <td>$122</td>
                                                <td>Oct 21, 2016</td>
                                                <td><span class="label label-success">COMPLETED</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">763649</a></td>
                                                <td>Amber</td>
                                                <td>$62</td>
                                                <td>Oct 21, 2016</td>
                                                <td><span class="label label-warning">PENDING</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">763650</a></td>
                                                <td>Michael</td>
                                                <td>$34</td>
                                                <td>Oct 18, 2016</td>
                                                <td><span class="label label-danger">FAILED</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">763651</a></td>
                                                <td>Roger</td>
                                                <td>$186</td>
                                                <td>Oct 17, 2016</td>
                                                <td><span class="label label-success">SUCCESS</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">763652</a></td>
                                                <td>Smith</td>
                                                <td>$362</td>
                                                <td>Oct 16, 2016</td>
                                                <td><span class="label label-success">SUCCESS</span></td>
                                            </tr>
                                        </tbody>



@endsection()