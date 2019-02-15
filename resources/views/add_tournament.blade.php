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
                           <form role="form" method="POST" action="{{url('/register_tournament')}}">
                            @csrf
                                <div class="form-group">
                                   <label>Tournament Name *</label>
                                   <input type="text" name="t_name" class="form-control" placeholder="Enter text" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="t_desc" placeholder="Enter text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Date *</label>
                                    <input type="date"  class="form-control" name="t_date" placeholder="Enter text" required>
                                </div>
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="time" class="form-control" name="t_time" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Place *</label>
                                    <textarea class="form-control" name="t_place" placeholder="Enter text" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fees *</label>
                                    <input type="number" class="form-control" name="t_fees" placeholder="Enter text" required>
                                </div>
                                <div class="form-group">
                                    <label>Prize Money *</label>
                                    <textarea class="form-control" name="t_prize" placeholder="Enter text" required></textarea>
                                </div>
                               <button type="submit" class="btn btn-primary">Submit</button>
                              {{-- <button type="reset" class="btn btn-success">Reset</button> --}}
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
