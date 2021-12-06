

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


                    <!-- Default box -->
                    <div class="card card-solid">
                        <div class="card-body">
                            @foreach ($product as $products)
                            <form action="{{ route('Product.update',$products->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">News Title</label>
                                    <input type="text" class="form-control" name="product_title" id="exampleInputEmail1"
                                        value="{{ $products->product_title }}" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail</label>
                                    <textarea id="summernote" name="product_detail">{!! $products->product_detail !!}</textarea>
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
                                <button class="btn btn-success"  name="update" value="{{$products->id}}">Save</button>
                            </form>
                            @endforeach

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
