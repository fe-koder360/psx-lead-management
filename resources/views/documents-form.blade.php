@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>
            <h2 class="heading">Documents submission Form</h2>
            <!-- Basic Details -->
            <div class="section-box">
                <div class="section-header">Basic Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>CNIC</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Occupation</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Employee</option>
                            <option>Business Owner</option>
                            <option>Student</option>
                            <option>Freelancer</option>
                            <option>Government Employee</option>
                            <option>Housewife</option>
                            <option>Advocate</option>
                            <option>Retired Person</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Signature</label>
                        <input type="file" class="form-control">
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
