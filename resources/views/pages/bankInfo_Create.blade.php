@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Bank Information</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                
                <form method="POST" action="{{ route('bankInfo_Create.store') }}">
                    @csrf
                    <div class="row">
                          <div class="col-md-6">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="bank_name">
                            </div>
                            <div class="col-md-6">
                                <label>Short Name</label>
                                <input type="text" class="form-control" name="short_name">
                            </div>
                    </div>

                    <div class="row">

                            <div class="col-md-12 mt-3">
                                <p>Active Status</p>
                                <input type="radio" name="is_active" value="1"> 
                                <label>Active</label>                                         
                                <input type="radio" name="is_active" value="0">
                                <label>In active</label>  
                            </div>
                    </div>

                    <div class="row">

                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Create">
                            </div>

                    </div>
                 </form>
            </div>
                
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush