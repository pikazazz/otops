@extends('layouts.applay')


@section('header-content')


@endsection


@section('content')
    <div class="row">

        <div class="col-sm-4">
        </div>
        <div class="col-sm-6">
            <form action="{{ route('profile.update', Auth::user()->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" style="width: 128px;height: 128px;"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Crystal_Clear_kdm_user_female.svg/1024px-Crystal_Clear_kdm_user_female.svg.png"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"></h3>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">


                            </div>
                            <div class="col"></div>
                        </div>

                        <p class="text-muted text-center">ผู้ใช้งาน</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>ชื่อ-นามสกุล</b> <a class="float-right"></a>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">


                            </li>
                            <li class="list-group-item">
                                <b>เบอร์โทรศัพท์</b> <a class="float-right"></a>
                                <input type="text" class="form-control" name="tel" value="{{ Auth::user()->tel }}">


                            </li>
                            <li class="list-group-item">
                                <b>อีเมล์</b> <a class="float-right"></a>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">

                            </li>
                        </ul>
                        @php
                            $id = Auth::user()->id;
                        @endphp
                        <button type="submit" class="btn btn-success">บันทึก</button>


                    </div>
                    <!-- /.card-body -->
                </div>
            </form>

        </div><!-- /.col -->
        <div class="col-sm-2">
        </div>
    </div>


@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
