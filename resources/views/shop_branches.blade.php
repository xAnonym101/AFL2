@extends('layouts.template')

@section('branch_table')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Branch ID</th>
        <th scope="col">Location</th>
        <th scope="col">Branch Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Workers</th>
        <th scope="col">Products</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($branches as $item)
      <tr>    
        <td>{{$item->branch_id}}</td>
        <td>{{$item->branch_location}}</td>
        <td>{{$item->branch_email}}</td>
        <td>{{$item->branch_phone_number}}</td>
        <td>{{$item->workers_count}}</td>
        <td>{{$item->products_count}}</td>
      </tr>
      @endforeach      

    </tbody>
  </table>
@endsection