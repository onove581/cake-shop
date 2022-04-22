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
          <h3 class="card-title pr-5">THÊM CATEGORY</h3>
            
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
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
             <form id="quickForm" method="post" action="checkcata">
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >name category</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                  </div>
                        <div class="form-group">
                        <label>display</label>
                        <select class="form-control" name="status">
                          <option value="0">hide</option>
                          <option value="1">show</option>
                    
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- /.card-body -->
        
            
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
 @endsection
