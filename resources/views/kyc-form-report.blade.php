@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <!-- Topbar -->
        <div class="topbar">
            <h2>All Leads Report</h2>
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
                        <th>CNIC</th>
                        <th>Select Account Type</th>
                        <th>Select Occupation</th>
                        <th>Nationality</th>
                        <th>Marital Status</th>
                        <th>Mother Name</th>
                        <th>Place of Birth</th>
                        <th>Added Time</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>3540413948851</td>
                        <td>Individual</td>
                        <td>Software Engineer</td>
                        <td>Pakistani</td>
                        <td>Single</td>
                        <td>Nasreen Bibi</td>
                        <td>Lahore</td>
                        <td>29-Aug-2025 10:30 AM</td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>3630268909591</td>
                        <td>Joint</td>
                        <td>Businessman</td>
                        <td>Pakistani</td>
                        <td>Married</td>
                        <td>Shazia Khan</td>
                        <td>Karachi</td>
                        <td>29-Aug-2025 11:15 AM</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
