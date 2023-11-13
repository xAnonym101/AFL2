@extends('layouts.template')

@section('layout_content1')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2 class="text-center">{{ $content->furniture_name }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $content->products_picture }}" alt="{{ $content->furniture_name }}"
                                    class="img-fluid" style="min-width: 200px; min-height: 200px; width: 100%;">
                            </div>
                            <div class="col-md-6">
                                <p class="lead">Price: Rp {{ $content->price }}0000</p>
                                <p class="lead">Discount: 20% Off</p>
                                <p class="lead">Sold At:</p>
                                <ul class="list-unstyled">
                                    @if (is_array($result))
                                        @foreach ($result as $middle)
                                            @foreach ($middle as $name)
                                                <li>{{ $name[0] }}</li>
                                            @endforeach
                                        @endforeach
                                    @else
                                        <li>{{ $result }}</li>
                                    @endif
                                    {{-- {{$result   }} --}}
                                </ul>
                                <div class="mt-4 text-left">
                                    <a href="{{ url()->previous() }}" class="btn btn-primary bg-dark">Back</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-4">
                        <p class="lead">Product Description:</p>
                        <p>{{ $content->description }}</p>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
