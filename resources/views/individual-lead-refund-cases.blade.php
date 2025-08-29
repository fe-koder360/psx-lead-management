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
                        <th>Client CNIC</th>
                        <th>Client Name</th>
                        <th>CS Agent Email</th>
                        <th>Client Email</th>
                        <th>SS of Deposit</th>
                        <th>Current Status</th>
                        <th>Form ID/Client Code</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>3540413948851</td>
                        <td>Awais Ahmad</td>
                        <td>fizza.hassan@psx.com</td>
                        <td>awais.ahmad@example.com</td>
                        <td><a href="#">Deposit_SS.jpg</a></td>
                        <td>Pending</td>
                        <td>AOF-1023 / CL-2025-01</td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>3630268909591</td>
                        <td>Muhammad Subhan</td>
                        <td>fizza.hassan@psx.com</td>
                        <td>subhan.jutt@example.com</td>
                        <td><a href="#">Deposit_SS.png</a></td>
                        <td>Approved</td>
                        <td>AOF-1056 / CL-2025-02</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection