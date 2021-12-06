@extends('layouts.applay')


@section('header-content')


@endsection


@section('content')
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
                    <div class="row">
                        @foreach ($News as $new)
                            <div class="col-12 col-sm-12">
                                <h3 class="my-3">{{ $new->news_title }}</h3>


                                <div class="row">
                                    <div class="col">
                                        <p> {!! $new->news_detail !!}</p>
                                    </div>

                                </div>


                                <hr>
                                <h4>Create At</h4>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    {{ $new->updated_at }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <button class="btn btn-success" onclick="history.back()">ย้อนกลับ</button>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

    </div>

@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
