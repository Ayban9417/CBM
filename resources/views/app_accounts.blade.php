@extends('layouts.web')

@section('title', "Personal accounts || CBA")

@section('breadtitle', "Personal Accounts")

@section('breadli')
<li class="breadcrumb-item active">app_accounts</li>               
@endsection

@section('content')
<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Members</h4>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Account Name</th>
                                                <th>Phone No</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($accounts as $account)
                                            <tr>
                                                <td>{{$account->name}}</td>
                                                <td>{{$account->phone}}</td>
                                                <td>{{$account->email}}</td>
                                                <td>
                                                <button  data-toggle="modal" data-target="#daModal{{$account->id}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                               
                                                </td>
                                            </tr>

                                            <!-- modal -->
                    <div id="daModal{{$account->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/app-accounts/{{$account->id}}">
                                            <div class="modal-body">
                                                
                                                        @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Name:</label>
                                                        <input type="text" class="form-control" name="name" value="{{$account->name}}" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone" id="recipient-name" value="{{$account->phone}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Email</label>
                                                        <input type="text" class="form-control" name="email" id="recipient-name" value="{{$account->email}}">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                 <div id="delete{{$account->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="get" action="/app-accounts/{{$account->id}}">
                                            <div class="modal-body">
                                                
                                                        @csrf

                                                    <div class="alert alert-danger" role="alert">
                                                        Are you sure you want to delete {{$account->name}}?
                                                    </div>
                                                 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
   
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                        <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/app-accounts">
                                            <div class="modal-body">
                                                
                                                        @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Name:</label>
                                                        <input type="text" class="form-control" name="name" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone" id="recipient-name" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Email</label>
                                                        <input type="text" class="form-control" name="email" id="recipient-name" >
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
   
@endsection