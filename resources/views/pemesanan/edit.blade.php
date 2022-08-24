@extends('layouts.app')

@section('style')

@endsection

@section('breadcumb')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ ($breadcumb ?? '') }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">home</li>
                    <li class="breadcrumb-item">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('master-data.index') }}">Master Data</a></li>
                    <li class="breadcrumb-item">/</li>
                    <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">{{ ($breadcumb ?? '') }}</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
      @include('sweetalert::alert')
    </div>
  </div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header text-center bg-gray1" style="border-radius:10px 10px 0px 0px;">
                <h3 class="card-title text-white">Edit Pemesanan</h3>
            </div>

            <form action="{{ route('pemesanan-update') }}" method="POST" >
                @csrf

                <div class="card-body">

                    @include('components.form-message')
                    <input type="hidden" name="idpm" value="{{ $pemesanan->id }}">
                    <div class="form-group mb-3">
                        <label for="nama_project">Nama Project<i class="ri-projector-2-fill"></i></label>
                        <input type="text" class="form-control @error('nama_project') is-invalid @enderror" id="nama_project" name="nama_project" value="{{ old('nama_project') ?? $pemesanan->nama_project }}"  placeholder="Enter Name Project">
                        @error('nama_project')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="domain">Domain<i class="ri-projector-2-fill"></i></label>
                        <input type="url" class="form-control @error('domain') is-invalid @enderror" id="domain" name="domain" value="{{ old('domain') ?? $pemesanan->domain }}"  placeholder="Example : https://www.google.com ">
                        @error('domain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi_project">Deskripsi Project</label>
                        <textarea name="deskripsi_project" class="form-control @error('deskripsi_project') is-invalid @enderror" id="deskripsi_project" name="deskripsi_project" placeholder="Enter Deskripsi Project" id="" cols="30" rows="10">{{ old('deskripsi_project') ?? $pemesanan->deskripsi_project }}</textarea>
                        @error('deskripsi_project')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="hidden" name="status" value="Process">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <h5>Informasi Pemesan</h5>

                    <div class="form-group mb-3">
                        <label for="nama_pemesan">Nama Pemesan</label>
                        <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan') ?? $pemesanan->nama_pemesan }}"  placeholder="Enter nama pemesan">

                        @error('nama_pemesan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tlp">Nomer Telepon</label>
                        <input type="number" min="0" class="form-control @error('tlp') is-invalid @enderror" id="tlp" name="tlp" value="{{ old('tlp') ?? $pemesanan->tlp }}"  placeholder="Enter nomor telepon">
                        @error('tlp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @if(Auth()->user()->getRoleNames()[0] == 'Admin')
                    <h5>Progress Project</h5>

                    <div class="form-group mb-3">
                        <label for="tlp">Nomer Telepon</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="Process" {{ $pemesanan->status == 'Process'? 'selected' : '' }}>Process</option>
                            <option value="Done" {{ $pemesanan->status == 'Done'? 'selected' : '' }}>Done</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @endif
                <!-- /.card-body -->

                <div class="card-footer bg-gray1" style="border-radius:0px 0px 10px 10px;">
                    <button type="submit" class="btn btn-success btn-footer">Add</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-footer">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection