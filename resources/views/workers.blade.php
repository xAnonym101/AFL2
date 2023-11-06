@extends('layouts.template')

@section('layout_content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Branch Code</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Marital</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($workers as $x)
          <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->branches_id}}</td>
            <td>{{$x->first_name}}</td>
            <td>{{$x->last_name}}</td>
            <td>{{$x->age}}</td>
            <td>{{$x->email}}</td>
            <td>{{$x->phone}}</td>
            <td>{{$x->marital}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection