<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f6fa;
            font-size: 14px;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            height: 100vh;
            background: #1f2937;
            color: #fff;
            padding-top: 20px;
        }

        .sidebar h4 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
            color: #10b981;
        }

        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #d1d5db;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            margin: 3px 10px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #374151;
            color: #fff;
        }

        /* Main Content */
        .main-content {
            margin-left: 240px;
            /* space for sidebar */
            padding: 20px;
        }

        .section-box {
            border: 1px solid #ddd;
            background: #fff;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        .section-header {
            background: #134c67;
            color: #fff;
            padding: 8px 12px;
            border-radius: 6px 6px 0 0;
            font-size: 15px;
            font-weight: 600;
        }

        .section-body {
            padding: 15px;
        }

        label {
            font-weight: 500;
            margin-bottom: 4px;
        }

        .form-control,
        .form-select {
            font-size: 13px;
            padding: 6px 10px;
        }

        .form-check {
            margin-top: 6px;
        }

        .btn-submit {
            background: #198754;
            color: #fff;
        }

        .btn-reset {
            background: #6c757d;
            color: #fff;
        }

    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>PSX CRM</h4>
        <a href="#" class="active">Leads</a>
        <a href="#">All Leads Report</a>
        <a href="#">Individual Lead</a>
        <a href="#">Credit / Pending Clearance</a>
        <a href="#">Referral Cases</a>
        <a href="#">Performance Dashboard</a>
        <a href="#">KARB Website Leads</a>
        <a href="#">KYC Forms</a>
        <a href="#">Documents Submission</a>
    </div>