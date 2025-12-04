@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12">

            <div class="box">
                <div class="box-header">
                     <h3 class="box-title">Brands</h3>
                      <button style="float:right;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">Add New Brand</button>
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
                        
                            @foreach($brands as $key=>$brand)
                            <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_status}}</td>
                                    <td>
                                       <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateModal{{$brand->id}}">Update</button>
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{$brand->id}}">Delete</button>
                                    </td>
                                     
                            </tr>


                            <!--UPDATE MODAL-->


                             <div class="modal fade" id="updateModal{{$brand->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Update Brand</h4>
                                  </div>
                                  <form method="POST"  action="{{route('updateBrand')}}">
                                    @csrf
                                  <div class="modal-body">

                                    <input type="text" name="id" value="{{$brand->id}}" hidden="true">
                                    <label>Name</label>
                                    <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}" required>

                                    <label>Staus</label>
                                    <select class="form-control" name="brand_status" required>
                                          <option value="{{$brand->brand_status}}">{{$brand->brand_status}}</option>
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


                             <div class="modal fade" id="deleteModal{{$brand->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="border:1px solid white;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Are you sure you want to delete this record ?</h4>
                                  </div>
                                  <form method="POST"  action="{{route('deleteBrand')}}">
                                    @csrf
                                  <div class="modal-body"  style="border:1px solid white;">

                                    <input type="text" name="id" value="{{$brand->id}}" hidden="true">
                                   
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
                <h4 class="modal-title">Add New Brand</h4>
              </div>
              <form method="POST"  action="{{route('addBrand')}}">
                @csrf
              <div class="modal-body">

               
                <label>Name</label>
                <input type="text" name="brand_name" class="form-control" required>

                <label>Staus</label>
                <select class="form-control" name="brand_status" required>
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