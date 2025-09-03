@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>
            <div class="main-content__top">
                <h2 class="heading">Open PSX Account</h2>
                <a href="" class="themeBtn" id="menuBtn"><i class="fa-solid fa-bars"></i></a>
            </div>
            <!-- Basic Details -->
            <div class="section-box">
                <div class="section-header">Basic Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Phone</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Mobile No. Ownership</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Bank Name</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>AlBaraka Bank (Pakistan) Limited</option>
                            <option>Allied Bank Limited</option>
                            <option>Easypaisa (Tameer Microfinance Bank Limited)</option>
                            <option>Askari Bank Limited</option>
                            <option>JazzCash</option>
                            <option>Bank AL Habib Limited</option>
                            <option>Bank Alfalah Limited</option>
                            <option>United Bank Limited</option>
                            <option>The Bank of Punjab</option>
                            <option>BankIslami Pakistan Limited</option>
                            <option>Habib Metropolitan Bank Limited</option>
                            <option>Citibank</option>
                            <option>Faysal Bank Limited</option>
                            <option>Meezan Bank Limited</option>
                            <option>Habib Bank Limited</option>
                            <option>Dubai Islamic Bank Pakistan Limited</option>
                            <option>First Women Bank Limited</option>
                            <option>Industrial Development Bank of Pakistan</option>
                            <option>JS Bank Limited</option>
                            <option>MCB Bank Limited</option>
                            <option>National Bank of Pakistan</option>
                            <option>Samba Bank Limited</option>
                            <option>The Bank of Khyber</option>
                            <option>Sindh Bank Limited</option>
                            <option>SME Bank Limited</option>
                            <option>Soneri Bank Limited</option>
                            <option>Standard Chartered Bank (Pakistan) Ltd</option>
                            <option>Summit Bank Limited</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>IBAN</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CNIC</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CNIC Front Picture</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CNIC Back Picture</label>
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
