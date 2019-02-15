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
                                            <th>Tournament</th>
                                            <th>Place</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Entry Fee</th>
                                            <th>Prize Money</th>
                                            <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($tournaments))
                                    @foreach ($tournaments as $item)
                                    <tr>
                                        <td>{{$item->t_name}}</td>
                                        <td>{{$item->t_place}}</td>
                                        <td>{{$item->t_date}}</td>
                                        <td>{{$item->t_time}}</td>
                                        <td>{{$item->t_fees}}</td>
                                        <td>{{$item->t_prize}}</td>
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

