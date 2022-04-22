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
          <h3 class="card-title pr-5">CATEGORY</h3>
            <a class="btn btn-info btn-sm " href="/addcata">
              <i class="fas fa-pencil-alt">
              </i>
              add
             </a>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name category</th>
                    <th>status</th>
                  <th>chức năng</th>
                  </tr>
                  </thead>
                   @foreach ($all as $item)
                  <tbody>
                  <tr>
                  <td>{{$item->dm_id}}</td>
                    <td>{{$item->dm_name}}
                    </td>
                      <td>      
                                 <!-- show an hien -->
                          <?php
                          if ($item->dm_status==0) {
                          ?>
                          <a href="{{URL::to('active_cata/'.$item->dm_id)}}"><span class="  fa fa-thumbs-up" style="font-size: 24px;
                              color: green;"></span></a>

                          <?php
                          }else{
                          ?>
                              <a href="{{URL::to('unactive_cata/'.$item->dm_id)}}"><span class=" fa fa-thumbs-down" style="font-size: 24px;
                                color: red;"></span></a>
                              <?php
                          }
                          ?>
                            
                          
                          </td>
                 
                        <td> <a class="btn btn-warning btn-sm" href="editcata/{{$item->dm_id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="deletecata/{{$item->dm_id}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a></td>
                  </tr>
               
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
               <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
 @endsection
