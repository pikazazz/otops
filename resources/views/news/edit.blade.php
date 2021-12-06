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
                        <br>
                        <button class="btn btn-success" onclick="history.back()">ย้อนกลับ</button>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            @foreach ($News as $new)
                <form action="{{ route('News.update', $new->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body">

                        <!-- general form elements -->


                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">เพิ่มข่าวสาร</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">News Title</label>
                                    <input type="text" class="form-control" name="news_title" id="exampleInputEmail1"
                                        value="{{ $new->news_title }}" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail</label>
                                    {{-- {{ $new->news_detail }} --}}

                                    <textarea id="summernote" name="news_detail"
                                        rows="50">   {!! $new->news_detail !!} </textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->

                        </div>

                        <!-- /.card -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" value="{{ $new->id }}" name="update"
                            class="btn btn-primary">Save</button>
                    </div>
                </form>
                <!-- /.card -->
            @endforeach

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->


@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
