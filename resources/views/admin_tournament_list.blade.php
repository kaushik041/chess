@extends('layout_main.main_container')
@section('body')
<div class="row">
        <!-- page header -->
       <div class="col-lg-12">
           <h1 class="page-header">Tournament</h1>
       </div>
       <!--end page header -->
   </div>
   <div class="row">
       <div class="col-lg-12">
           <!-- Form Elements -->
           <div class="panel panel-default">
               <div class="panel-heading">
                   Add Tournament
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class="col-lg-12">
                            <table id="example" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tournament Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Place</th>
                                        <th>Fees</th>
                                        <th>Prize Money</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tournament 1</td>
                                        <td>Demo</td>
                                        <td>12/11/2019</td>
                                        <td>12:20pm</td>
                                        <td>Kolkata</td>
                                        <td>Rs. 500</td>
                                        <td>1st Prize : Rs. 5000</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                Edit
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
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

