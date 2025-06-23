@extends('layouts.app', ['title'=>"Acceuil"])
@section('content')
    <div class="row">
        <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Purchase History</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                            <tr>
                                <th>Customer</th>
                                <th>Project</th>
                                <th>Invoice</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/faces/face1.jpg" alt="image" />
                                    <div class="table-user-name ml-3">
                                    <p class="mb-0 font-weight-medium"> Cecelia Cooper </p>
                                    <small> Payment on hold</small>
                                    </div>
                                </div>
                                </td>
                                <td>Angular Admin</td>
                                <td>
                                <div class="badge badge-inverse-success"> Completed </div>
                                </td>
                                <td>$ 77.99</td>
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/faces/face10.jpg" alt="image" />
                                    <div class="table-user-name ml-3">
                                    <p class="mb-0 font-weight-medium"> Victor Watkins </p>
                                    <small>Email verified</small>
                                    </div>
                                </div>
                                </td>
                                <td>Angular Admin</td>
                                <td>
                                <div class="badge badge-inverse-success"> Completed </div>
                                </td>
                                <td>$245.30</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="text-black mt-3 d-block pl-4" href="#">
                    <span class="font-weight-medium h6">View all order history</span>
                    <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title font-weight-medium"> Business Survey </div>
                    <p class="text-muted"> Lorem ipsum dolor sitadipiscing elit, sed amet do eiusmod tempor we find a new solution </p>
                    <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                        <img class="survey-img mb-lg-3" src="assets/images/dashboard/img_3.jpg" alt="" />
                        <div class="pt-2">
                            <h5 class="mb-0">Villa called Archagel</h5>
                            <p class="mb-0 text-muted">St, San Diego, CA</p>
                            <h5 class="mb-0">$600/mo</h5>
                        </div>
                    </div>

                    <a class="text-black mt-3 d-block font-weight-medium h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <canvas id="pieChart" style="height: 250px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Scatter chart</h4>
                    <canvas id="scatterChart" style="height: 250px;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
