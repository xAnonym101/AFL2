@extends('layouts.template')

@section('layout_content1')

<div class="justify-content-center mt-3">
    <h2 class="text-light text-center">Furnitures</h2>
</div>
    
@endsection

@section('layout_content2')

<div class="ms-5 me-5">
        <div class="col mt-3">
            <div class="row justify-content-center">
                @foreach($content as $content) 
                <div class="col-md-3 mt-3 ms-2 me-2">
                    <a href="/Furniture-Detailed/{{$content->id}}" class="card-link">
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
