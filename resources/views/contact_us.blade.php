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
                                        <p>Email: {{ $item->branch_email }}</p>
                                        <p>Instagram: {{ $item->branch_ig }}</p>
                                        <p>Phone: {{ $item->branch_pnumber }}</p>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p>Available Furnitures : {{ $furniture_count[$item->id - 1] }}</p>
                                        <p>Number of Workers: {{ $item->workers_count }}</p>
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
                                        <p>Email: {{ $item->branch_email }}</p>
                                        <p>Instagram: {{ $item->branch_ig }}</p>
                                        <p>Phone: {{ $item->branch_pnumber }}</p>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p>Available Furnitures : {{ $furniture_count[$item->id - 1] }}</p>
                                        <p>Number of Workers: {{ $item->workers_count }}</p>
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
                                        <p>Email: {{ $item->branch_email }}</p>
                                        <p>Instagram: {{ $item->branch_ig }}</p>
                                        <p>Phone: {{ $item->branch_pnumber }}</p>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p>Available Furnitures : {{ $furniture_count[$item->id - 1] }}</p>
                                        <p>Number of Workers: {{ $item->workers_count }}</p>
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
@section('layout_content2')
    <div class="text-center">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#contactModal">
            Contact us
        </button>
    </div>
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="contactModalLabel">Contact us</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="Contactusnama" class="form-label">Nama :</label>
                            <input type="text" class="form-control" id="Contactusnama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="ContactusEmail" class="form-label">Email address :</label>
                            <input type="email" class="form-control" id="ContactusEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="ContactusPerusahaan" class="form-label">Perusahaan :</label>
                            <input type="text" class="form-control" id="ContactusPerusahaan"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="ContactusPassword" class="form-label">Password :</label>
                            <input type="password" class="form-control" id="ContactusPassword">
                        </div>
                        <div class="mb-3">
                            <label for="ContactusPesan" class="form-label">pesan :</label>
                            <input type="text" class="form-control form-control-lg" id="ContactusPesan">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
