@extends('layout_main.main_container')
@section('body')
<div class="row">
        <!-- page header -->
       <div class="col-lg-12">
           <h1 class="page-header">Transaction</h1>
       </div>
       <!--end page header -->
   </div>
   <div class="row">
       <div class="col-lg-12">
           <!-- Form Elements -->
           <div class="panel panel-default">
               <div class="panel-heading">
                    Transaction List
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class="col-lg-12">
                            <table id="example" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Description</th>
                                        <th>Date/Time</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>021554225</td>
                                        <td>Tournament Fess for kolkata</td>
                                        <td>12/11/2019, 12:20pm</td>
                                        <td>Rs. 5000</td>
                                        <td>
                                            <label class="label label-success">Success</label>
                                            <label class="label label-danger">Failed</label>
                                        </td>
                                        {{-- <td>
                                            <a href="#" class="btn btn-success">
                                                Edit
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td> --}}
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

