@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>

            <!-- Basic Client Details -->
            <div class="section-box">
                <div class="section-header">Basic Client Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Signup Date</label><input type="date" class="form-control"></div>
                    <div class="col-md-3"><label>Old Signup Date</label><input type="date" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Name</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>CNIC/SNIC/NICOP Number</label><input type="text" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Email</label><input type="email" class="form-control"></div>
                    <div class="col-md-3"><label>Mother Name</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>IBAN</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>Bank Name</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>WhatsApp Phone Number</label><input type="tel" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Place of Birth</label><input type="text" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Phone</label><input type="tel" class="form-control"></div>
                    <div class="col-md-3"><label>Mobile No. Ownership</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>City</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>Date of Birth</label><input type="date" class="form-control"></div>
                    <div class="col-md-3"><label>Marital Status</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Age</label><input type="number" class="form-control"></div>
                    <div class="col-md-3"><label>Job Title</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>Occupation</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Nationality</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>Education</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-6"><label>Employer/Business Name</label><input type="text" class="form-control">
                    </div>
                    <div class="col-md-6"><label>Employer/Business Address</label><textarea
                            class="form-control"></textarea>
                    </div>
                    <div class="col-md-12"><label>Permanent Address</label><textarea class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <!-- Account Information Section -->
            <div class="section-box">
                <div class="section-header">Account Information Section</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Form Processed By</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Account Opening Date</label><input type="date" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Account Type</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Status Change Time</label><input type="datetime-local"
                            class="form-control">
                    </div>
                    <div class="col-md-3"><label>RDA Bank Name</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>RDA Account</label><select class="form-select">
                            <option>Yes</option>
                            <option>No</option>
                        </select></div>
                    <div class="col-md-3"><label>Currency</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>OTP Sent Time</label><input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Client Code</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>Added Lead Time</label><input type="datetime-local"
                            class="form-control"></div>
                    <div class="col-md-3"><label>Commission Structure</label><input type="text" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Follow up Attempts</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Source</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>High Risk</label>
                        <div class="form-check"><input type="radio" name="risk" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="risk" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                    <div class="col-md-3"><label>OTP Verified</label>
                        <div class="form-check"><input type="radio" name="otp" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="otp" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                </div>
            </div>

            <!-- CS Agent Details -->
            <div class="section-box">
                <div class="section-header">CS Agent Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>CS Agent Name</label><input type="text" class="form-control"></div>
                    <div class="col-md-3"><label>CS Agent Email</label><input type="email" class="form-control">
                    </div>
                    <div class="col-md-3"><label>CS Agent Phone Number</label><input type="tel" class="form-control">
                    </div>
                    <div class="col-md-3"><label>CS Agent WhatsApp Link</label><input type="url" class="form-control">
                    </div>
                    <div class="col-md-3"><label>CS Agent Assigned Time</label><input type="datetime-local"
                            class="form-control"></div>
                </div>
            </div>

            <!-- Account Manager Details -->
            <div class="section-box">
                <div class="section-header">Account Manager Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Retail Account Manager</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Account Manager Email</label><input type="email" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Account Manager Contact</label><input type="tel" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Client Deposit Information -->
            <div class="section-box">
                <div class="section-header">Client Deposit Information</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Amount Deposit</label><input type="number" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Deposit Lagging Time</label><input type="datetime-local"
                            class="form-control">
                    </div>
                    <div class="col-md-3"><label>% of Amount Deposit</label><input type="number" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Amount Deposited</label><input type="number" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Biometric Verification -->
            <div class="section-box">
                <div class="section-header">Biometric Verification</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Customer Eligible?</label><select class="form-select">
                            <option>Yes</option>
                            <option>No</option>
                        </select></div>
                    <div class="col-md-3"><label>Biometric Verification</label><select class="form-select">
                            <option>NCOP APP</option>
                        </select></div>
                    <div class="col-md-3"><label>Verification Date</label><input type="date" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Verification Image</label><input type="file" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Supporting Documents -->
            <div class="section-box">
                <div class="section-header">Supporting Documents</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>CNIC Front</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>CNIC Back</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Signature Specimen</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Last Bank Statement</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Salary Slip</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Shop Card</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Business Letterhead</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Tax Return</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Dependent CNIC Front</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Dependent CNIC Back</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Student Card</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Dependent Salary Slip</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Pension Slip</label><input type="file" class="form-control"></div>
                    <div class="col-md-3"><label>Chamber Picture</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>License Card</label><input type="file" class="form-control"></div>
                </div>
            </div>

            <!-- Compliance -->
            <div class="section-box">
                <div class="section-header">Compliance</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Discrepancy</label>
                        <div class="form-check"><input type="radio" name="disc" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="disc" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                    <div class="col-md-3"><label>Verified by Compliance</label>
                        <div class="form-check"><input type="radio" name="verify" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="verify" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                    <div class="col-md-3"><label>Risk Level</label><select class="form-select">
                            <option>High</option>
                            <option>Low</option>
                        </select></div>
                    <div class="col-md-3"><label>Gross Annual Income</label><input type="text" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Compliance Agent</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Compliance Agent Email</label><input type="email" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Operations Section -->
            <div class="section-box">
                <div class="section-header">Operations Section</div>
                <div class="section-body row g-3">
                    <div class="col-md-3"><label>Operations Discrepancy</label>
                        <div class="form-check"><input type="radio" name="ops" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="ops" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                    <div class="col-md-3"><label>Discrepancy Type</label><select class="form-select">
                            <option>Select</option>
                        </select></div>
                    <div class="col-md-3"><label>Comments by Officer</label><textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-3"><label>Document Upload</label><input type="file" class="form-control">
                    </div>
                    <div class="col-md-3"><label>Discrepancy Resolved</label>
                        <div class="form-check"><input type="radio" name="resolved" class="form-check-input"><label
                                class="form-check-label">Yes</label></div>
                        <div class="form-check"><input type="radio" name="resolved" class="form-check-input"><label
                                class="form-check-label">No</label></div>
                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="text-center my-3">
                <button type="submit" class="btn btn-submit">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>

        </form>
    </div>
</div>

@endsection