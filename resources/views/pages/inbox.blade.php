@extends('layouts.app', ['page' => __('Inbox'), 'pageSlug' => 'inbox'])


@section('content')

<div class="row">
    <div class="col-8">
        <div class="card ">
            <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th class="">
                                Inbox 
                                </th>
                                <th colspan="4"></th>
                            </tr>
                            </thead>
                        <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>test@email.com</td>
                                    <td>Hello World test</td>
                            
                                    <td class="td-actions text-right">
                                        <!-- <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-user"></i>
                                        </button> -->
                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-xs"  data-placement="top" title="View">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple btn-xs" data-placement="top" title="Archive" >
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>test@email.com</td>
                                    <td>Starbucks</td>
                                
                                    <td class="td-actions text-right">
                                     
                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>StarBucks</td>
                                    <td>test@email.com</td>
                                
                                    <td class="td-actions text-right">
                                        
                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection 