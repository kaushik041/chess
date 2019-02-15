@extends('layout_main.main_container')
@section('body')
<div class="row">
        <!-- page header -->
       <div class="col-lg-12">
           <h1 class="page-header">User</h1>
       </div>
       <!--end page header -->
   </div>
   <div class="row">
       <div class="col-lg-12">
           <!-- Form Elements -->
           <div class="panel panel-default">
               <div class="panel-heading">
                  User List
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class="col-lg-12">
                            <table id="example" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gurdian Name</th>
                                        <th>DOB</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>District</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($users))
                                    @foreach ($users as $item)
                                    <tr>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->guardian_name}}</td>
                                    <td>{{$item->dob}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$dist[$item->dist]}}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                Edit
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

