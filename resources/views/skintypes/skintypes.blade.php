@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12">

            <div class="box">
                <div class="box-header">
                     <h3 class="box-title">Skin types</h3>
                      <button style="float:right;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">Add New Skin type</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($skintypes as $key=>$skintype)
                            <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$skintype->skintype_name}}</td>
                                    <td>{{$skintype->skintype_status}}</td>
                                    <td>
                                       <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateModal{{$skintype->id}}">Update</button>
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{$skintype->id}}">Delete</button>
                                    </td>
                                     
                            </tr>


                            <!--UPDATE MODAL-->


                             <div class="modal fade" id="updateModal{{$skintype->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Update Skintype</h4>
                                  </div>
                                  <form method="POST"  action="{{route('updateSkintype')}}">
                                    @csrf
                                  <div class="modal-body">

                                    <input type="text" name="id" value="{{$skintype->id}}" hidden="true">
                                    <label>Name</label>
                                    <input type="text" name="skintype_name" class="form-control" value="{{$skintype->skintype_name}}" required>

                                    <label>Staus</label>
                                    <select class="form-control" name="skintype_status" required>
                                          <option value="{{$skintype->skintype_status}}">{{$skintype->skintype_status}}</option>
                                          <option value="Active">Active</option>
                                          <option value="Suspended">Suspended </option>
                                    </select>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="border-radius:50px">Close</button>
                                    <button type="submit" class="btn btn-success" style="border-radius:50px">Save</button>
                                  </div>
                                </form>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                             </div>
             


                            <!--END OF UPDATE MODAL-->


                            <!--DELETE MODAL-->


                             <div class="modal fade" id="deleteModal{{$skintype->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="border:1px solid white;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Are you sure you want to delete this record ?</h4>
                                  </div>
                                  <form method="POST"  action="{{route('deleteSkintype')}}">
                                    @csrf
                                  <div class="modal-body"  style="border:1px solid white;">

                                    <input type="text" name="id" value="{{$skintype->id}}" hidden="true">
                                   
                                  </div>
                                  <div class="modal-footer"  style="border:1px solid white;">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="border-radius:50px">Close</button>
                                    <button type="submit" class="btn btn-success" style="border-radius:50px">Delete</button>
                                  </div>
                                </form>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                             </div>
             

                            <!--END OF DELETE MODAL-->
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>


        </div>
    </div>





        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Skintype</h4>
              </div>
              <form method="POST"  action="{{route('addSkintype')}}">
                @csrf
              <div class="modal-body">

               
                <label>Name</label>
                <input type="text" name="skintype_name" class="form-control" required>

                <label>Staus</label>
                <select class="form-control" name="skintype_status" required>
                       <option value="">Select ... </option>
                       <option value="Active">Active</option>
                       <option value="Suspended">Suspended </option>
                </select>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="border-radius:50px">Close</button>
                <button type="submit" class="btn btn-success" style="border-radius:50px">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



</section>
@endsection