@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content dashboard">
    <div class="container-fluid my-4">
        <div class="main-content__top">
            <h2 class="heading">Performance Dashboard</h2>
            <a href="" class="themeBtn" id="menuBtn"><i class="fa-solid fa-bars"></i></a>
        </div>
        <div class="dashboard-boxes">
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">5,060</h4>
                        <h5 class="subTitle">Total number of records</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number"> 16.70%</h4>
                        <h5 class="subTitle">Conversion Rate</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">47.41%</h4>
                        <h5 class="subTitle">Churn Out Rate</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">0</h4>
                        <h5 class="subTitle">Not Called</h5>
                    </div>
                </div>
                <div class="col-lg col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">156</h4>
                        <h5 class="subTitle">Invalid Data</h5>
                    </div>
                </div>
                <div class="col-lg col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">916</h4>
                        <h5 class="subTitle">No Answer</h5>
                    </div>
                </div>
                <div class="col-lg col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">156</h4>
                        <h5 class="subTitle">Incomplete Details</h5>
                    </div>
                </div>
                <div class="col-lg col-md-4">
                    <div class="dashboard-box">
                        <h4 class="number">200</h4>
                        <h5 class="subTitle">Invalid IBAN</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">432</h4>
                        <h5 class="subTitle">Pending Documents</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">0</h4>
                        <h5 class="subTitle">OTP Rejected by NCCPL</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">1,146</h4>
                        <h5 class="subTitle">Pending OTP Verification</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">6</h4>
                        <h5 class="subTitle">Compliance</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">6</h4>
                        <h5 class="subTitle">Operations</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">14</h4>
                        <h5 class="subTitle">Account already Exists somewhere</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">28</h4>
                        <h5 class="subTitle">Opened Non funded Account</h5>
                    </div>
                </div>
                <div class="col-md">
                    <div class="dashboard-box">
                        <h4 class="number">845</h4>
                        <h5 class="subTitle">Total Number of Onboarded Clients</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-12">
                    <div class="dashboard-box">
                        <h4 class="number">26,962,830</h4>
                        <h5 class="subTitle">Total Deposits</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
