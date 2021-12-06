@extends('layouts.applay')


@section('header-content')


@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1>News</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog  modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">เพิ่มสินค้า</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">เพิ่มสินค้า</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Title</label>
                                            <input type="text" class="form-control" name="product_title"
                                                id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Detail</label>
                                            <textarea id="summernote" name="product_detail"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file_img" class="custom-file-input"
                                                        id="exampleInputFile" required>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- Default box -->
            </form>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add News <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fa fa-plus"></i>
                        </button></h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">News </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 20%">
                                    Product Title
                                </th>
                                <th style="width: 50%">
                                    Product Detail
                                </th>

                                <th style="width: 15%">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($product as $product)
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            {{ $product->product_title }}
                                        </a>
                                        <br />
                                        <small>
                                            Created {{ $product->updated_at }}
                                        </small>
                                    </td>
                                    <td>
                                        ดูรายละเอียดเพิ่มเติมเลือก View
                                    </td>

                                    <td class="project-actions text-left">
                                        <form action="{{ route('Product.show',$product->id) }}" method="POST">
                                            @csrf
                                            @method('get')
                                            <button class="btn btn-primary btn-sm" type="submit" name="view"
                                                value="{{ $product->id }}"> <i class="fas fa-folder"
                                                    style="color: white">
                                                </i>
                                                View
                                            </button>
                                        </form>
                                        <form action="{{ route('Product.edit',$product->id) }}" method="POST">
                                            @csrf
                                            @method('get')
                                            <button class="btn btn-info btn-sm" type="submit" name="edit"
                                                value="{{ $product->id }}"> <i class="fas fa-pencil-alt"
                                                    style="color: white">
                                                </i>
                                                Edit
                                            </button>
                                        </form>
                                        <form action="{{ route('Product.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" name="del"
                                                value="{{ $product->id }}"> <i class="fas fa-trash"
                                                    style="color: white">
                                                </i>
                                                Delete</button>
                                        </form>

                                    </td>


                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
