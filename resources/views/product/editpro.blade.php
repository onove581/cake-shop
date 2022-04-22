@extends('layout_admin')
@section('noidung')
  
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title pr-5">THEM SP</h3>
            
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
           <?php
                $message= session()->get('message');
                if ($message) {
                    echo  '
                    <div class="alert alert-success" role="alert">
                      '.$message.'
                    </div>
                    ';
                    session()->put('message',null);
                }
                ?>
        <div class="card-body">
          @foreach ($editpro as $item)
        <form id="quickForm" method="post" action="{{$item->id}}" enctype="multipart/form-data">
               @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name product</label>
                    <input type="text" name="name" value="{{$item->name}}"  class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">price</label>
                    <input type="number" name="price" value="{{$item->price}}"    class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> sale price</label>
                    <input type="number" name="price_sale" value="{{$item->sale_price}}"    class="form-control" id="exampleInputPassword1" >
                  </div>
                
                   <div class="form-group ">
                        <label for="exampleInputFile">image</label>
                        <div class="controls">
                          <input type="file" name="image" class="form-control" required>
                          <img src="{{asset('/upload/'.$item->image)}}" alt="" width="100px" height="100px">
                        </div>
                  </div>
                   <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="desc" rows="3" placeholder="Enter ...">{{$item->description}}</textarea>
                      </div>

                        <div class="form-group">
                        <label>type product</label>
                        <select class="form-control" name="type_product">
                          @foreach ($intocata as $ca)
                          @if ($ca->dm_id==$item->id_type)
                              <option selected value="{{$ca->dm_id}}">{{$ca->dm_name}}</option>
                          @endif
                             <option value="{{$ca->dm_id}}">{{$ca->dm_name}}</option>
                            @endforeach
                          {{-- <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option> --}}
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- /.card-body -->
         @endforeach
            
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
 @endsection
