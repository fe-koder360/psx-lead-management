@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <!-- Topbar -->
        <div class="topbar">
            <h2 class="heading">Documents submission Form Report</h2>
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
                        <th>Current Status in PSX CRM</th>
                        <th>Added Time</th>
                        <th>CNIC</th>
                        <th>Occupation</th>
                        <th>Dependent CNIC Front</th>
                        <th>Dependent CNIC Back</th>
                        <th>Student ID Card</th>
                        <th>Dependent Salary Slip</th>
                        <th>Salary Slip</th>
                        <th>Signature</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Pending</td>
                        <td>29-Aug-2025 10:30 AM</td>
                        <td>3540413948851</td>
                        <td>Software Engineer</td>
                        <td><a href="#">Dep_CNIC_Front.jpg</a></td>
                        <td><a href="#">Dep_CNIC_Back.jpg</a></td>
                        <td><a href="#">Student_ID.pdf</a></td>
                        <td><a href="#">Dep_SalarySlip.pdf</a></td>
                        <td><a href="#">SalarySlip_Awais.pdf</a></td>
                        <td><a href="#">Signature_Awais.png</a></td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Approved</td>
                        <td>29-Aug-2025 11:15 AM</td>
                        <td>3630268909591</td>
                        <td>Businessman</td>
                        <td><a href="#">Dep_CNIC_Front.png</a></td>
                        <td><a href="#">Dep_CNIC_Back.png</a></td>
                        <td><a href="#">Student_ID.png</a></td>
                        <td><a href="#">Dep_SalarySlip.png</a></td>
                        <td><a href="#">SalarySlip_Subhan.pdf</a></td>
                        <td><a href="#">Signature_Subhan.png</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
