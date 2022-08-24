@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('plugins/datepicker/bootstrap-datepicker3.min.css') }}">

<style>
@use postcss-color-function;
@use postcss-nested;
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700,900');

    .penelitian{
        background: hsla(198, 100%, 25%, 1);
        background: linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        background: -moz-linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        background: -webkit-linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#005A80", endColorstr="#00458E", GradientType=1 );
    }
    .jumlah-publikasi{
        border-radius:10px;
        border-top:5px solid #103783;
    }
    .btn-filter{
        background: hsla(198, 100%, 25%, 1);
        background: linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        background: -moz-linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        background: -webkit-linear-gradient(90deg, hsla(198, 100%, 25%, 1) 0%, hsla(211, 100%, 28%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#005A80", endColorstr="#00458E", GradientType=1 );
    }
    .card{
        border-radius:10px; 
    }
    .select-user{
        float: right;
        background: rgb(241, 246, 248);
        border: none;
        padding: 5px 15px 5px 15px;
    }
    .hilang{
        display: none;
    }
</style>
@endsection

@section('breadcumb')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ ($breadcumb ?? '') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">/</li>              
                        <li class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">{{ ($breadcumb ?? '') }}</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    
@endsection

@section('content')
 
@endsection

@section('script')


 
@endsection