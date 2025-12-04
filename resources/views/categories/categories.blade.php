@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12">

            <div class="box">
                <div class="box-header">
                     <h3 class="box-title">Categories</h3>
                      <button style="float:right;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">Add New Category</button>
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
                        
                            @foreach($categories as $key=>$category)
                            <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->category_status}}</td>
                                    <td>
                                       <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateModal{{$category->id}}">Update</button>
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{$category->id}}">Delete</button>
                                    </td>
                                     
                            </tr>


                            <!--UPDATE MODAL-->


                             <div class="modal fade" id="updateModal{{$category->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Update Category</h4>
                                  </div>
                                  <form method="POST"  action="{{route('updateCategory')}}">
                                    @csrf
                                  <div class="modal-body">

                                    <input type="text" name="id" value="{{$category->id}}" hidden="true">
                                    <label>Name</label>
                                    <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" required>

                                    <label>Staus</label>
                                    <select class="form-control" name="category_status" required>
                                          <option value="{{$category->category_status}}">{{$category->category_status}}</option>
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


                             <div class="modal fade" id="deleteModal{{$category->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="border:1px solid white;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Are you sure you want to delete this record ?</h4>
                                  </div>
                                  <form method="POST"  action="{{route('deleteCategory')}}">
                                    @csrf
                                  <div class="modal-body"  style="border:1px solid white;">

                                    <input type="text" name="id" value="{{$category->id}}" hidden="true">
                                   
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
                <h4 class="modal-title">Add New Category</h4>
              </div>
              <form method="POST"  action="{{route('addCategory')}}">
                @csrf
              <div class="modal-body">

               
                <label>Name</label>
                <input type="text" name="category_name" class="form-control" required>

                <label>Staus</label>
                <select class="form-control" name="category_status" required>
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