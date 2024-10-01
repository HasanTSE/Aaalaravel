@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Party Information</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                
                <form method="POST" action="{{ route('partyInfo.store') }}">
                    @csrf
                    <div class="row">
                         <div class="col-md-4">
                                <label>Party Name</label>
                                <input type="text" class="form-control" name="party_name">
                            </div>

                            <div class="col-md-4">
                                <label>Mobile No</label>
                                <input type="text" class="form-control" name="mobile_no">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Date</label>
                                <input type="date" class="form-control" name="opening_date">
                            </div>

                    </div>

                    <div class="row">
                         <div class="col-md-4">
                                <label>Short Name</label>
                                <input type="text" class="form-control" name="short_name">
                            </div>

                            <div class="col-md-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email_address">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Balance</label>
                                <input type="integer" class="form-control" name="opening_balance">
                            </div>

                    </div>

                    
                    <div class="row">
                         <div class="col-md-4">
                                <label>Party Code</label>
                                <input type="text" class="form-control" name="party_code">
                            </div>

                            <div class="col-md-4">
                                <label>Web Address</label>
                                <input type="text" class="form-control" name="web_address">
                            </div>

                             <!-- <div class="col-md-4">
                                <label>Upload Documnet (license)</label>
                                <input type="file" class="form-control" name="doc_id">
                            </div> -->

                    </div>


                         <div class="row">
                         <div class="col-md-4">
                                <label>Address</label>
                                <input type="address" class="form-control" name="present_address">
                            </div>

                             <div class="col-md-4">
                                <p>Party Type</p>
                                <input type="radio" name="party_type" value="1">   
                                <label>Customer</label>   
                                <br>     
                                <input type="radio" name="party_type" value="2">
                                <label>Supplier</label>
                            </div>

                              <div class="col-md-4">
                                <p>Active Status</p>
                                <input type="radio" name="is_active" value="1">   
                                <label>Active</label>                                 
                                <input type="radio" name="is_active" value="0">
                                <label>InActive</label>
                            </div>

                    </div>

                    <div class="row">
                        <select class="form-control" name="company_id">
                            <option value="">Select Your Company</option>
                            <option value="1">The MH3 BANK</option>
                            <option value="2">MH3 COMPANY</option>
                            <option value="3">MH3 SOFTWARE</option>
                            <option value="4">MH3 STORE</option>

                        </select>
                    </div>

                    <div class="row">

                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Create" >
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