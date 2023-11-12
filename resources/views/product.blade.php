@extends('layouts.template')

@section('layout_content1')

<div class="justify-content-center mt-3">
    <h2 class="text-light text-center">Furnitures</h2>
</div>
    
@endsection

@section('layout_content2')

<div class="ms-5 me-5">
    {{-- <div class="row">
        <div class="col-md-1 mt-3">
            <div class="mt-5 justify-content-center">
                <div class="card responsive-card">
                    <div style="overflow: hidden; aspect-ratio: 16/10;">
                        <img src="https://media.istockphoto.com/id/1173959961/photo/scandinavian-style-coffee-table.jpg?s=612x612&w=0&k=20&c=LXcq-MgkOTWbxrOAPpfV_14VgdaU-SRRramgm_HizDU=" class="card-img-top mx-auto" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Coffee Table</h5>
                        <p class="card-text">Rp 1.000.000</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col mt-3">
            <div class="row justify-content-center">
                @foreach($content as $content) 
                <div class="col-md-3 mt-3 ms-2 me-2">
                    <a href="{{ route('products.show', ['id' => $content->id]) }}" class="card-link">
                        <div class="card position-relative">
                            <div style="overflow: hidden; aspect-ratio: 16/10;">
                                <img src="{{$content->products_picture}}" class="card-img-top mx-auto" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="overlay position-absolute top-50 start-50 translate-middle text-center">
                                <h5 class="card-title text-white OverlayMargin">{{$content->furniture_name}}</h5>
                                <p class="card-text text-white">Rp {{$content->price}}0000</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                
                @endforeach
            </div>
        </div>
        
    </div>
</div>

@endsection
