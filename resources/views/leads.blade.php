@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <form>
            <div class="main-content__top">
                <h2 class="heading">Leads</h2>
                <a href="" class="themeBtn" id="menuBtn"><i class="fa-solid fa-bars"></i></a>
            </div>

            <!-- Basic Client Details -->
            <div class="section-box">
                <div class="section-header">Basic Client Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Signup Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Old Signup Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CNIC/SNIC/NICOP Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Mother Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>IBAN</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
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
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>WhatsApp Phone Number</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Phone</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Mobile No. Ownership</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>
                                Mobile No Registered on your CNIC
                            </option>
                            <option>
                                Mobile No Registered on your family member name
                            </option>
                            <option>
                                Company Registered Phone Number
                            </option>
                            <option>
                                International Number
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Marital Status</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Single</option>
                            <option>Married</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Age</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Job Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Occupation</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Accountant</option>
                            <option>Employee</option>
                            <option>Business Owner</option>
                            <option>Housewife</option>
                            <option>Freelancer</option>
                            <option>Government Employee</option>
                            <option>Retired Person</option>
                            <option>Student</option>
                            <option>Advocate</option>
                            <option>Actor</option>
                            <option>Advertising</option>
                            <option>Aviation</option>
                            <option>Architect</option>
                            <option>Banker</option>
                            <option>Business</option>
                            <option>Govt. / Public Sector</option>
                            <option>Industrialist</option>
                            <option>Professional</option>
                            <option>Service</option>
                            <option>Others</option>
                            <option>Household</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Nationality</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Old Zoho Unique ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Employer/Business Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Education</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>No Formal Education</option>
                            <option>Matric / SSC</option>
                            <option>O Levels</option>
                            <option>Intermediate / HSSC</option>
                            <option>A Levels</option>
                            <option>Diploma / DAE</option>
                            <option>Bachelor's (BA, BSc, B.Com, BBA, etc.)</option>
                            <option>Master's (MA, MSc, MBA, M.Com, etc.)</option>
                            <option>MPhil / MS</option>
                            <option>PhD</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Employer/Business Address</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label>Permanent Address</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label>Overseas Pakistani</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Account Information Section -->
            <div class="section-box">
                <div class="section-header">Account Information Section</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Form Processed By</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Microlinks</option>
                            <option>Centralized Gateway Portal</option>
                            <option>NCC Smart CKO Portal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Account Opening Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Account Type</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Sahulat Account</option>
                            <option>Normal Account</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Status Change Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>RDA Bank Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Refer by</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Currency</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>PKR</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>RDA Account</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Current Status</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Welcome Email</option>
                            <option>Not Called</option>
                            <option>Invalid Documents</option>
                            <option>No Answer</option>
                            <option>Incomplete Details</option>
                            <option>Not Interested</option>
                            <option>Invalid IBAN</option>
                            <option>OTP Sent</option>
                            <option>OTP Error</option>
                            <option>OTP Expired</option>
                            <option>OTP Verified / Not Funded</option>
                            <option>Called / Documents Awaiting</option>
                            <option>OTP Rejected By NCCPL</option>
                            <option>OTP Regenerate</option>
                            <option>UKN Details Required</option>
                            <option>Sahulat Already Exist</option>
                            <option>SKA - Form Completed</option>
                            <option>Compliance</option>
                            <option>Tag a Trader</option>
                            <option>Discrepancy</option>
                            <option>Operations Discrepancy</option>
                            <option>Refund Needed</option>
                            <option>KASB Customer</option>
                            <option>Invalid UIN Not verified by NADRA</option>
                            <option>Operations</option>
                            <option>Account Closed</option>
                            <option>Onboarded</option>
                            <option>Account Opened (Awaiting Deposit)</option>
                            <option>Invalid Data</option>
                            <option>Details Already Exist (Other Broker)</option>
                            <option>Updation Required (SKA to NKA)</option>
                            <option>Duplicate</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>OTP Sent Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Client Code</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Added Lead Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Commission Structure</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Number of follow up attempts</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>More than 2</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Source</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>App Sign-up Android</option>
                            <option>App Sign-up IOS</option>
                            <option>App Sign-up</option>
                            <option>App Sign-up JC</option>
                            <option>Asaad Amaar Leads</option>
                            <option>App Sign-up MCB</option>
                            <option>BaignBaigum</option>
                            <option>Bank Alfalah</option>
                            <option>Business Owners</option>
                            <option>Email</option>
                            <option>Client Referral Leads</option>
                            <option>Employee Referral Program</option>
                            <option>Entrepreneurs</option>
                            <option>Facebook</option>
                            <option>Facebook Punjab</option>
                            <option>Freelancer</option>
                            <option>Future Fest 2025</option>
                            <option>Homemakers</option>
                            <option>Investment Expo</option>
                            <option>Meeting / Referral</option>
                            <option>Shanzay Test</option>
                            <option>NRP Signup with CNIC</option>
                            <option>Online On-boarding</option>
                            <option>Pakistan Counting</option>
                            <option>Passive Income Signup</option>
                            <option>Passive Income Signup with CNIC</option>
                            <option>Road Show</option>
                            <option>Signup with CNIC</option>
                            <option>Trading Titan</option>
                            <option>Website</option>
                            <option>UBL x KTrade</option>
                            <option>Virtual Sign-up</option>
                            <option>WhatsApp</option>
                            <option>WhatsApp Leads</option>
                            <option>WMO</option>
                            <option>Working Women</option>
                            <option>App Sign-up UBL</option>
                            <option>App Sign-up EP</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Proff 2</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Account Opening Form ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CDC Report</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>High Risk</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="risk" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="risk" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>OTP Verified</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="otp" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="otp" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Proff 1</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Documents Submitted</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="documents-submitted" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="documents-submitted" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CS Agent Details -->
            <div class="section-box">
                <div class="section-header">CS Agent Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>CS Agent Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CS Agent Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CS Agent Phone Number</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CS Agent WhatsApp Link</label>
                        <input type="url" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CS Agent Assigned Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CS Agent</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Account Manager Details -->
            <div class="section-box">
                <div class="section-header">Account Manager Details</div>
                <div class="section-body row g-3">
                    <div class="col-md-4">
                        <label>Retail Account Manager</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>AHMED SHERAZ</option>
                            <option>Ahsan Kamal</option>
                            <option>ARIF ABDUL MAJEED</option>
                            <option>Azhar Nawaz</option>
                            <option>BABER HANIF</option>
                            <option>Bharti Bai</option>
                            <option>Desk Trader</option>
                            <option>GHULAM QAMAR</option>
                            <option>HASHAM KHAN</option>
                            <option>hozaifa test</option>
                            <option>KARIM MUHAMMAD MUNIR</option>
                            <option>Lost Account Manager</option>
                            <option>Mehwish Naz</option>
                            <option>Mohsin Khalid</option>
                            <option>MUHAMMAD FAIZAN</option>
                            <option>Muhammad Saqib Aslam</option>
                            <option>Muhammad Yousaf</option>
                            <option>Nadeem Chawla</option>
                            <option>Safia Nawaz</option>
                            <option>sales1</option>
                            <option>Sameer Ahmed Chawla</option>
                            <option>SAMIULLAH</option>
                            <option>Saud- demo</option>
                            <option>Support Trader</option>
                            <option>SYED FAHIM RAZA</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Account Manager Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Account Manager Contact</label>
                        <input type="tel" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Client Deposit Information -->
            <div class="section-box">
                <div class="section-header">Client Deposit Information</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Amount Deposit</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            <option>Custody moved</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Amount Deposit Logging Time</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>SS of Amount Deposit</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Amount Deposited</label>
                        <input type="number" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Biometric Verification -->
            <div class="section-box">
                <div class="section-header">Biometric Verification</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Customer eligible for Biometric Verification?</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Biometric Verification - NCCPL APP</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Verification Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Verification Image</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Supporting Documents -->
            <div class="section-box">
                <div class="section-header">Supporting Documents</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>CNIC Front</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CNIC Back</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>CNIC Document Link</label>
                        <input type="url" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Signature Specimen</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Last 3 month Bank Statement</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Salary Slip</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Visiting card</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Shop Card</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Business Letterhead</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Tax Return</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Dependent CNIC Front</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Dependent CNIC Back</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Student Card</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Dependent Salary Slip</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Pension Slip</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Chamber Picture</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>License Card</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Compliance -->
            <div class="section-box">
                <div class="section-header">Compliance</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Discrepancy</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="disc" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="disc" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Verified & Check by Compliance</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="verify" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="verify" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Risk Level</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>High Risk</option>
                            <option>Low Risk</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Gross Annual Income Details</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Up to 100,000</option>
                            <option>100,001 to 250,000</option>
                            <option>250,001 to 500,000</option>
                            <option>500,001 to 1,000,000</option>
                            <option>1,000,001 to 2,500,000</option>
                            <option>Above 2,500,000</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Compliance Agent</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Farrukh</option>
                            <option>Sobia</option>
                            <option>Azhar Ali</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Compliance Agent Email</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Comments by CS Team/Compliance Team -->
            <div class="section-box">
                <div class="section-header">Comments by CS Team/Compliance Team</div>
                <div id="commentsWrapper">
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
                            <label>Comments</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <a href="javascript:void(0)" class="addBtn btn btn-success">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operations Section -->
            <div class="section-box">
                <div class="section-header">Operations Section</div>
                <div class="section-body row g-3">
                    <div class="col-md-3">
                        <label>Operations Discrepancy</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="ops" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="ops" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Discrepancy Type</label>
                        <select class="form-select">
                            <option hidden>Select</option>
                            <option>Cheque pic required - IBAN Exemption require</option>
                            <option>Sahulat Account already Exists</option>
                            <option>Require another IBAN</option>
                            <option>Normal Account already exists - UKN Issued detail not submit</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Comments by Operations Officer</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label>Document Upload</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Discrepancy Resolved</label>
                        <div class="form-checkWrapper">
                            <div class="form-check">
                                <input type="radio" name="resolved" class="form-check-input">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="resolved" class="form-check-input">
                                <label class="form-check-label">No</label>
                            </div>
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
