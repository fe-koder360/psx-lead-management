@extends('layouts.main')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid my-4">
        <!-- Topbar -->
        <div class="topbar">
            <h2 class="heading">Called / Pending Documents</h2>
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
                        <th>Signup Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>IBAN</th>
                        <th>Phone</th>
                        <th>WhatsApp Phone Number</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>29-Aug-2025</td>
                        <td>Awais Ahmad</td>
                        <td>mustaqim7894@gmail.com</td>
                        <td>PK36HABB0001234567890123</td>
                        <td>923348723915</td>
                        <td>923348723915</td>
                        <td>Lahore</td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>29-Aug-2025</td>
                        <td>Muhammad Subhan</td>
                        <td>muhammadsubhanjutt82@gmail.com</td>
                        <td>PK45MEZN0009876543210987</td>
                        <td>923098636008</td>
                        <td>923098636008</td>
                        <td>Karachi</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
