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
       <div class="col-lg-6">
           <!-- Form Elements -->
           <div class="panel panel-default">
               <div class="panel-heading">
                   Add Tournament
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class="col-lg-12">
                           <form role="form" method="POST" action="">
                                <div class="form-group">
                                   <label>Tournament Name</label>
                                   <input type="text" class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" placeholder="Enter text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="time" class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Place</label>
                                    <textarea class="form-control" placeholder="Enter text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fees</label>
                                    <input type="text" class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Prize Money</label>
                                    <textarea class="form-control" placeholder="Enter text"></textarea>
                                </div>
                               <button type="submit" class="btn btn-primary">Submit</button>
                               <button type="reset" class="btn btn-success">Reset</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
            <!-- End Form Elements -->
       </div>
   </div>
</div>
@endsection
