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
                        <th>Current Status</th>
                        <th>Signup Date</th>
                        <th>Name</th>
                        <th>CNIC/SNIC/NICOP Number</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Account Opening Form ID</th>
                        <th>CNIC Front Upload</th>
                        <th>CNIC Back Upload</th>
                        <th>IBAN</th>
                        <th>CS Agent Name</th>
                        <th>CNIC Document Link</th>
                        <th>Old Zoho Unique ID</th>
                        <th>Client Code</th>
                        <th>Account Type</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Not Called</td>
                        <td>29-Aug-2025</td>
                        <td>Awais Ahmad</td>
                        <td>3540413948851</td>
                        <td>923348723915</td>
                        <td>mustaqim7894@gmail.com</td>
                        <td>AOF-1023</td>
                        <td><a href="#">Front.jpg</a></td>
                        <td><a href="#">Back.jpg</a></td>
                        <td>PK36HABB0001234567890123</td>
                        <td>Fizza Hassan</td>
                        <td><a href="#">View Doc</a></td>
                        <td>101</td>
                        <td>CL-2025-01</td>
                        <td>Individual</td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="rowCheckbox"></td>
                        <td>Not Called</td>
                        <td>29-Aug-2025</td>
                        <td>Muhammad Subhan</td>
                        <td>3630268909591</td>
                        <td>923098636008</td>
                        <td>muhammadsubhanjutt82@gmail.com</td>
                        <td>AOF-1056</td>
                        <td><a href="#">Front.png</a></td>
                        <td><a href="#">Back.png</a></td>
                        <td>PK45MEZN0009876543210987</td>
                        <td>Fizza Hassan</td>
                        <td><a href="#">View Doc</a></td>
                        <td>102</td>
                        <td>CL-2025-02</td>
                        <td>Joint</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
