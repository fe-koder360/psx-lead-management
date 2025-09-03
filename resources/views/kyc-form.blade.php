@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>
            <h2 class="heading">Know Your Customer (KYC)</h2>
            <!-- Basic Details -->
            <div class="section-box">
                <div class="section-header">Basic Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>CNIC</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Select Account Type</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="account-type" class="form-check-input">
                                <label class="form-check-label">Normal Account</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="account-type" class="form-check-input">
                                <label class="form-check-label">Sahulat Account</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Mother Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Marital Status</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Single</option>
                            <option>Married</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Nationality</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Province</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Punjab</option>
                            <option>Sindh</option>
                            <option>Khyber Pakhtunkhwa (KP)</option>
                            <option>Balochistan</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Current City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Current Address</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label>Select Occupation</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Employee</option>
                            <option>Business Owner</option>
                            <option>Housewife</option>
                            <option>Student</option>
                            <option>Freelancer</option>
                            <option>Government Employee</option>
                            <option>Advocate</option>
                            <option>Retired Person</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Source of Income</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Gross Annual Income</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Up to 100,000</option>
                            <option>100,001 - 250,000</option>
                            <option>250,001 - 500,000</option>
                            <option>500,001 - 1,000,000</option>
                            <option>1,000,001 - 2,500,000</option>
                            <option>More than 2,500,000</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="btnWrapper justify-content-center my-3">
                <button type="submit" class="themeBtn">Submit</button>
                <button type="reset" class="themeBtn themeBtn--light">Reset</button>
            </div>

        </form>
    </div>
</div>

@endsection
