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
            <td>{{$branches->id}}</td>
            <td>{{$branches->branch_location}}</td>
            <td>{{$branches->branch_email}}</td>
            <td>{{$branches->branch_pnumber}}</td>
            <td>{{$branches->workers_count}}</td>
            <td>{{$branches->products_count}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection