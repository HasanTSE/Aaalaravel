@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Bank Information List</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
     
           <div class="row">
                <div class="col-sm-8">
                    <form method="get">
                <input type="text" class="form-controller" name="search" value="{{ $_GET['search']?? ''}}">
                <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>
            </div>    
                
            <div class="row">
                <div class="col-sm-4">
                <a href="bankInfo_Create" class="text-left">
                 <button class="btn btn-primary btn-sm">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create
                 </button>
                 </a>
                </div>
            </div>


        
            <table class="table mt-5">
                    <thead>

                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Bank Name</th>
                        <th scope="col">Short Name</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Action</th>
                      </tr>

                    </thead>

                    <tbody>
                        @foreach ( $bank_informations as $key => $bank_infos )
                        <tr>
                            <!-- <td scope="col">{{ ++$key }}</td> -->
                            <td scope="col">{{ $bank_infos->bank_name }}</td>                                              
                            <td scope="col">{{ $bank_infos->short_name }}</td>                                              
                            <td scope="col">
                                @if($bank_infos->is_active == 1)
                                        Yes
                                @else  
                                        No   
                                @endif                                      
                            </td>

                           <td scope="col">
                              <a href="{{ route('bankInfo_Edit.edit', $bank_infos->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('bankInfo_Delete.delete', $bank_infos->id) }}" method="POST" style ="display:inline">
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
