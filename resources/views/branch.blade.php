@extends('layouts.template')

@section('layout_content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Location</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Workers</th>
        <th scope="col">Products</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($branches as $x)
          <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->branch_location}}</td>
            <td>{{$x->branch_email}}</td>
            <td>{{$x->branch_pnumber}}</td>
            <td>{{$x->workers_count}}</td>
            <td>{{$x->products_count}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection