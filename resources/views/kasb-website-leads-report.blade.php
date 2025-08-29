@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <!-- Topbar -->
        <div class="topbar">
            <h2>All Leads Report</h2>
            <div class="topbar-actions">
                <button class="themeBtn"><i class="fa fa-plus"></i></button>
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
                        <th>Transfer Lead</th>
                        <th>CS Agent Name</th>
                        <th>Added Time</th>
                        <th>Name</th>
                        <th>Mobile No. Ownership</th>
                        <th>Phone</th>
                        <th>Bank Name</th>
                        <th>IBAN</th>
                        <th>CNIC</th>
                        <th>CNIC Front Picture</th>
                        <th>CNIC Back Picture</th>
                        <th>Email</th>
                        <th>Sent Status</th>
                        <th>KYC and Document submission</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Yes</td>
                        <td>Fizza Hassan</td>
                        <td>29-Aug-2025 10:30 AM</td>
                        <td>Awais Ahmad</td>
                        <td>Own</td>
                        <td>923348723915</td>
                        <td>HBL</td>
                        <td>PK36HABB0001234567890123</td>
                        <td>3540413948851</td>
                        <td><a href="#">Front.jpg</a></td>
                        <td><a href="#">Back.jpg</a></td>
                        <td>awais.ahmad@example.com</td>
                        <td>Pending</td>
                        <td><a href="#">KYC_Form.pdf</a></td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>No</td>
                        <td>Sara Khan</td>
                        <td>29-Aug-2025 11:15 AM</td>
                        <td>Muhammad Subhan</td>
                        <td>Father</td>
                        <td>923098636008</td>
                        <td>Meezan Bank</td>
                        <td>PK45MEZN0009876543210987</td>
                        <td>3630268909591</td>
                        <td><a href="#">Front.png</a></td>
                        <td><a href="#">Back.png</a></td>
                        <td>subhan.jutt@example.com</td>
                        <td>Approved</td>
                        <td><a href="#">KYC_Form.png</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection