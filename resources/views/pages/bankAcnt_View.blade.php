@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Bank Accounts Information List</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-12">

            <div class="row">
                <div class="col-sm-10">
                    <form method="get">
                <input type="text" class="form-controller" name="search" value="{{ $_GET['search']?? ''}}">
                <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>
           </div>
                
             <div class="row">
                <div class="col-sm-2">
                <a href="bankAcnt_Create">
                 <button class="btn btn-primary btn-sm">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create
                 </button>
                 </a>
                </div>
            </div>

            <table class="table">
                    <thead>
                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Account Name</th>
                        <th scope="col">Account No</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Opening Date</th>
                        <th scope="col">Opening Balance</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                     <tbody>
                        @foreach ( $bank_acnts as $key => $bank_acnt )
                        <tr>
                            <!-- <td scope="col">{{ ++$key }}</td> -->
                            <td scope="col">{{ $bank_acnt->account_name }}</td>
                            <td scope="col">{{ $bank_acnt->account_no }}</td>
                            <td scope="col">{{ $bank_acnt->bank_information->bank_name ?? '' }}</td>
                            <td scope="col">{{ $bank_acnt->branch_name }}</td>
                            <td scope="col">{{ $bank_acnt->opening_date }}</td>
                            <td scope="col">{{ $bank_acnt->opening_balance }}</td>                           
                            <td scope="col">
                                @if($bank_acnt->is_active == 1)
                                        Yes
                                @else  
                                        No   
                                @endif                                      
                            </td>

                           <td scope="col">
                              <a href="{{ route('bankAcnt_Edit.edit', $bank_acnt->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('bankAcnt.delete', $bank_acnt->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                              </tr>
                        @endforeach
                    </tbody>
                  </table>
           

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
