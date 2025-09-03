@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <!-- Topbar -->
        <div class="topbar">
            <h2 class="heading">All Refund Cases</h2>
            <div class="topbar-actions">
                <!-- <button class="themeBtn"><i class="fa fa-plus"></i></button> -->
                <a href="" class="themeBtn" id="menuBtn"><i class="fa-solid fa-bars"></i></a>
                <div class="topbar-actions__dropdown dropdown">
                    <button class="themeBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">List</a></li>
                        <li><a class="dropdown-item" href="#">Calendar</a></li>
                        <li><a class="dropdown-item" href="#">Timeline</a></li>
                        <li><a class="dropdown-item" href="#">Kanban</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- DataTable -->
        <div class="table-container">
            <table id="leadsTable" class="table table-striped table-bordered align-middle" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th><input type="checkbox" id="selectAll"></th>
                        <th>Current Status</th>
                        <th>Client Name</th>
                        <th>Client CNIC</th>
                        <th>Client Email</th>
                        <th>Refund Reason</th>
                        <th>Added Time</th>
                        <th>Modified User</th>
                        <th>Form ID/Client Code</th>
                        <th>Email Justification</th>
                        <th>Proff of IBAN</th>
                        <th>SS of Deposit</th>
                        <th>Depositor Name</th>
                        <th>Depositor CNIC</th>
                        <th>Depositor CNIC Front</th>
                        <th>Depositor CNIC Back</th>
                        <th>Depositor Amount</th>
                        <th>Depositor IBAN</th>
                        <th>Entered By</th>
                        <th>CS Agent Name</th>
                        <th>CS Agent Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Pending</td>
                        <td>Awais Ahmad</td>
                        <td>3540413948851</td>
                        <td>awais.ahmad@example.com</td>
                        <td>Duplicate Account</td>
                        <td>29-Aug-2025 10:30 AM</td>
                        <td>Ali Raza</td>
                        <td>AOF-1023 / CL-2025-01</td>
                        <td>Client requested refund</td>
                        <td><a href="#">Proof_IBAN.pdf</a></td>
                        <td><a href="#">Deposit_SS.jpg</a></td>
                        <td>Muhammad Khan</td>
                        <td>3520212345671</td>
                        <td><a href="#">Front.jpg</a></td>
                        <td><a href="#">Back.jpg</a></td>
                        <td>50,000 PKR</td>
                        <td>PK36HABB0001234567890123</td>
                        <td>System</td>
                        <td>Fizza Hassan</td>
                        <td>fizza.hassan@psx.com</td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Approved</td>
                        <td>Muhammad Subhan</td>
                        <td>3630268909591</td>
                        <td>subhan.jutt@example.com</td>
                        <td>Wrong IBAN Provided</td>
                        <td>29-Aug-2025 11:15 AM</td>
                        <td>Sara Khan</td>
                        <td>AOF-1056 / CL-2025-02</td>
                        <td>Email verified, refund issued</td>
                        <td><a href="#">Proof_IBAN.png</a></td>
                        <td><a href="#">Deposit_SS.png</a></td>
                        <td>Hamza Ali</td>
                        <td>4210112345678</td>
                        <td><a href="#">Front.png</a></td>
                        <td><a href="#">Back.png</a></td>
                        <td>75,000 PKR</td>
                        <td>PK45MEZN0009876543210987</td>
                        <td>System</td>
                        <td>Fizza Hassan</td>
                        <td>fizza.hassan@psx.com</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
