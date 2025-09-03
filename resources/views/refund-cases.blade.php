@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>
            <h2 class="heading">Refund Cases</h2>
            <!-- Basic Details -->
            <div class="section-box">
                <div class="section-header">Basic Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Client CNIC</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Client Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Client Phone Number</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CS Agent Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CS Agent Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Client Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>SS of Deposit</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Current Status</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Pending</option>
                            <option>Compliance</option>
                            <option>Settlement</option>
                            <option>Discrepancy</option>
                            <option>Refund</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Email Justification</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Proff of IBAN</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Document</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Form ID/Client Code</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Comments by CS Team/Compliance Team -->
            <div class="section-box">
                <div class="section-header">Comments by CS Team/Compliance Team</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Date-Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Entered By</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Refund Reason</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Comments</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <!-- Depositor Details -->
            <div class="section-box">
                <div class="section-header">Depositor Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>Depositor Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Depositor CNIC</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Depositor CNIC Front</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Depositor CNIC Back</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Depositor Amount</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Depositor IBAN</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Finance / Settlement Section -->
            <div class="section-box">
                <div class="section-header">Finance / Settlement Section</div>
                <div id="commentsWrapper">
                    <div class="section-body row g-3">
                        <div class="col-md-3">
                            <label>Other Document Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Supporting Document Image</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Finance Receipt</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <a href="javascript:void(0)" class="addBtn btn btn-success">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
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
