@extends('layouts.template')

@section('layout_content1')
    @foreach ($branches as $item)
        @if ($item->id == 1)
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h2 class="text-left">Main Branch</h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="{{ $item->branch_picture }}" class="img-fluid"
                                            style="max-width: 300px; max-height: 250px; width: 100%;">
                                    </div>
                                    <div class="col-md-5 text-left">
                                        <p>Location: {{ $item->branch_location }}</p>
                                        <p>Email: {{ $item->branch_email }}</p>
                                        <p>Instagram: {{ $item->branch_ig }}</p>
                                        <p>Phone: {{ $item->branch_pnumber }}</p>
                                    </div>
                                    <div class="col-md-5 text-right">    
                                        <p>Available Furnitures : {{$furniture_count[$item->id-1]}}</p>
                                        <p>Number of Workers: {{ $item->workers_count }}</p>
                                        <a href="{{ route('workers', ['id'=>$item->id]) }}" class="btn btn-primary bg-dark">Employees</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($item->id == 2)
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-left">Other Branches</h2>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ $item->branch_picture }}" class="img-fluid"
                                        style="max-width: 300px; max-height: 250px; width: 100%;">
                                </div>
                                <div class="col-md-5 text-left">
                                    <p>Location: {{ $item->branch_location }}</p>
                                    <p>Email: {{ $item->branch_email }}</p>
                                    <p>Instagram: {{ $item->branch_ig }}</p>
                                    <p>Phone: {{ $item->branch_pnumber }}</p>
                                </div>
                                <div class="col-md-5 text-right">    
                                    <p>Available Furnitures : {{$furniture_count[$item->id-1]}}</p>
                                    <p>Number of Workers: {{ $item->workers_count }}</p>
                                    <a href="{{ route('workers', ['id'=>$item->id]) }}" class="btn btn-primary bg-dark">Employees</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ $item->branch_picture }}" class="img-fluid"
                                        style="max-width: 300px; max-height: 250px; width: 100%;">
                                </div>
                                <div class="col-md-5 text-left">
                                    <p>Location: {{ $item->branch_location }}</p>
                                    <p>Email: {{ $item->branch_email }}</p>
                                    <p>Instagram: {{ $item->branch_ig }}</p>
                                    <p>Phone: {{ $item->branch_pnumber }}</p>
                                </div>
                                <div class="col-md-5 text-right">    
                                    <p>Available Furnitures : {{$furniture_count[$item->id-1]}}</p>
                                    <p>Number of Workers: {{ $item->workers_count }}</p>
                                    <a href="{{ route('workers', ['id'=>$item->id]) }}" class="btn btn-primary bg-dark">Employees</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endsection
