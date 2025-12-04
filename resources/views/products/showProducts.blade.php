@extends('layouts.backend')
@section('content')
<section class="content">
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Products</h3>

              <div class="box-tools">
               <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">Add New Product</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Price</th>
                              <th>Qty</th>
                              <th>Category</th>
                              <th>Brand</th>
                              <th>Skintype</th>
                              <th>Action</th>
                          
                          </tr>
                      </thead>

                        <tbody>
                          @foreach($products as $key=>$product)
                          <tr>
                              <td>{{$key+1}}</td>
                              <td><img src="{{asset('backend/images/products/'.$product->product_image)}}" style="width:60px"></td>
                              <td>{{$product->product_name}}</td>
                              <td>{{$product->product_description}}</td>
                              <td>{{$product->product_price}}</td>
                              <td>{{$product->product_qty}}</td>
                              <td>{{$product->category->category_name ?? 'NA'}}</td>
                              <td>{{$product->brand->brand_name ?? 'NA'}}</td>
                              <td>{{$product->skintype->skintype_name ?? 'NA'}}</td>
                              <td>
                                   <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#updateModal{{$product->id}}">Update</button>
                                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$product->id}}">Delete</button>
                              </td>
                          </tr>




                          
                          <div class="modal fade" id="updateModal{{$product->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title">Update Product</h4>
                                </div>
                                <form method="POST" enctype="multipart/form-data" action="{{route('updateProduct')}}">
                                  @csrf
                                <div class="modal-body">

                                  <input type="text" name="id" value="{{$product->id}}">

                                  <label>Category</label>
                                  <select name="category_id" class="form-control" required>
                                      <option value="{{$product->category_id ?? 'NA'}}" >{{$product->category->category_name ?? 'NA'}}</option>
                                      @foreach($categories as $key=>$category)
                                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                                      @endforeach
                                  </select>


                                  <label>Brand</label>
                                  <select name="brand_id" class="form-control" required>
                                      <option value="{{$product->brand_id}}" >{{$product->brand->brand_name}}</option>
                                      @foreach($brands as $key=>$brand)
                                          <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                      @endforeach
                                  </select>


                                  <label>Skin Type</label>
                                  <select name="skintype_id" class="form-control" required>
                                      <option value="{{$product->skintype_id}}" >{{$product->skintype->skintype_name}}</option>
                                      @foreach($skintypes as $key=>$skintype)
                                          <option value="{{$skintype->id}}">{{$skintype->skintype_name}}</option>
                                      @endforeach
                                  </select>


                                  <label>Product Image</label>
                                  <input type="file" name="product_image" class="form-control">

                                  <label>Product Name</label>
                                  <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">

                                  <label>Product Description</label>
                                  <textarea class="form-control" name="product_description">{{$product->product_description}}</textarea>

                                  <label>Product Price</label>
                                  <input type="text" name="product_price" class="form-control" value="{{$product->product_price}}">

                                  <label>Product Qty</label>
                                  <input type="text" name="product_qty" class="form-control" value="{{$product->product_qty}}">

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





                          <div class="modal fade" id="deleteModal{{$product->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="border:1px solid white;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Are you sure you want to delete this record ?</h4>
                                  </div>
                                  <form method="POST"  action="{{route('deleteProduct')}}">
                                    @csrf
                                  <div class="modal-body"  style="border:1px solid white;">

                                    <input type="text" name="id" value="{{$product->id}}" hidden="true">
                                   
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


                          @endforeach
                        
                        </tbody>
                        
                    </table>



            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


         <!--ADD MODAL-->

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Product</h4>
              </div>
              <form method="POST" enctype="multipart/form-data" action="{{route('addProduct')}}">
                @csrf
              <div class="modal-body">

                <label>Category</label>
                <select name="category_id" class="form-control" required>
                     <option value="" >Select ...</option>
                     @foreach($categories as $key=>$category)
                         <option value="{{$category->id}}">{{$category->category_name}}</option>
                     @endforeach
                </select>


                <label>Brand</label>
                <select name="brand_id" class="form-control" required>
                     <option value="" >Select ...</option>
                     @foreach($brands as $key=>$brand)
                         <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                     @endforeach
                </select>


                <label>Skin Type</label>
                <select name="skintype_id" class="form-control" required>
                     <option value="" >Select ...</option>
                     @foreach($skintypes as $key=>$skintype)
                         <option value="{{$skintype->id}}">{{$skintype->skintype_name}}</option>
                     @endforeach
                </select>


                <label>Product Image</label>
                <input type="file" name="product_image" class="form-control">

                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control">

                <label>Product Description</label>
                <textarea class="form-control" name="product_description"></textarea>

                <label>Product Price</label>
                <input type="text" name="product_price" class="form-control">

                <label>Product Qty</label>
                <input type="text" name="product_qty" class="form-control">

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


      <!--END OF MODAL-->
</section>
@endsection