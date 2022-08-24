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
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-gray1" style="border-radius:10px 10px 0px 0px;">
        <div class="row">
          <div class="col-6 mt-1">
            <span class="tx-bold text-lg text-white" style="font-size:1.2rem;">
              <i class="far fa-user text-lg"></i> 
              Pesanan List
            </span>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            @include('sweetalert::alert')
          </div>
        </div>
      </div>

      <div class="card-body">
        <table id="userTable" class="table table-hover table-bordered dt-responsive">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemesan</th>
              <th>Nomor Telepon</th>
              <th>Nama Project</th>
              <th>Domain</th>
              <th>Deskripsi Project</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pemesanan as $pemesanan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pemesanan->nama_pemesan }}</td>
                    <td>{{ $pemesanan->tlp }}</td>
                    <td>{{ $pemesanan->nama_project }}</td>
                    <td>{{ $pemesanan->domain }}</td>
                    <td>{{ $pemesanan->deskripsi_project }}</td>
                    <td>
                        @if( $pemesanan->status == 'Process' )
                        <span class="badge bg-warning">{{ $pemesanan->status }}</span>
                        @elseif( $pemesanan->status == 'Done' )
                        <span class="badge bg-success">{{ $pemesanan->status }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            @can('pemesanan-edit')
                            <a href="{{ route('pemesanan-edit', $pemesanan->id) }}" class="btn btn-warning text-white">
                              <i class="far fa-edit"></i>
                              Edit
                            </a>
                            @endcan
                            @can('pemesanan-delete')
                            <form action="{{ route('pemesanan-delete',$pemesanan->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger f-12">
                                    <i class="far fa-trash-alt"></i>
                                    Delete
                                </button>
                            </form>
                            @endcan
                          </div>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection