@extends('layouts.template')

@section('layout_content')

<div class="mt-5">
    <div class="row justify-content-center">

        @for($i = 0; $i < 10; $i++) {
            <div class="col-md-3 mb-3 mt-5">
                <div class="card" style="">
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
        }
        @endfor
        
        
        

    </div>
</div>
{{-- <div class="col-md-4 mb-4 mx-auto mt-5">
            <div class="card" style="">
                <div style="overflow: hidden; aspect-ratio: 16/10;">
                    <img src="https://media.istockphoto.com/id/1173959961/photo/scandinavian-style-coffee-table.jpg?s=612x612&w=0&k=20&c=LXcq-MgkOTWbxrOAPpfV_14VgdaU-SRRramgm_HizDU=" class="card-img-top mx-auto" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Coffee Table</h5>
                    <p class="card-text">Rp 1.000.000</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div> --}}

@endsection
