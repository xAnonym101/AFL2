@extends('layouts.template')

@section('layout_content1')
    <h2 class="text-center text-light mt-3"> Employees :</h2>
@endsection

@section('layout_content2')
<table class="table table-striped table-dark me-2 mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Marital</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->full_name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->marital}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-5 text-center">
    <a href="/Contact-Us" class="btn btn-primary bg-dark">Back</a>
</div>

@endsection