@extends('Backend.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="card card-custom">
                    <div class="card-body bg-info">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="card-title">{{ $users }}</h3>
                                <p>Total Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag display-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('user.index') }}" class= small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card card-custom">
                    <div class="card-body bg-success">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="card-title">{{ $products }}</h3>
                                <p>Total Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag display-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('user.index') }}" class= small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
