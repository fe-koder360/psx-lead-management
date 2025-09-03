<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lead Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebarAccordion">
        <h4>PSX CRM</h4>

        <!-- Performance Dashboard (no collapse) -->
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
            Performance Dashboard
        </a>

        <!-- Onboarding Form -->
        <a class="sidebar-parent" data-bs-toggle="collapse" href="#onboardingMenu" role="button"
            aria-expanded="{{ Request::is('leads*') || Request::is('all-leads-report') || Request::is('individual-lead') || Request::is('called-pending-documents') ? 'true' : 'false' }}"
            aria-controls="onboardingMenu">
            Onboarding Form
        </a>
        <div class="collapse {{ Request::is('leads*') || Request::is('all-leads-report') || Request::is('individual-lead') || Request::is('called-pending-documents') ? 'show' : '' }}"
            id="onboardingMenu" data-bs-parent="#sidebarAccordion">
            <a href="{{ url('leads') }}" class="sidebar-link {{ Request::is('leads*') ? 'active' : '' }}">Leads</a>
            <a href="{{ url('all-leads-report') }}"
                class="sidebar-link {{ Request::is('all-leads-report') ? 'active' : '' }}">All Leads Report</a>
            <!-- <a href="{{ url('individual-lead') }}" class="sidebar-link {{ Request::is('individual-lead') ? 'active' : '' }}">Individual Lead</a> -->
            <a href="{{ url('called-pending-documents') }}"
                class="sidebar-link {{ Request::is('called-pending-documents') ? 'active' : '' }}">
                Called / Pending Documents
            </a>
        </div>

        <!-- Refund Cases -->
        <a class="sidebar-parent" data-bs-toggle="collapse" href="#refundMenu" role="button"
            aria-expanded="{{ Request::is('refund*') || Request::is('all-refund-cases') || Request::is('individual-lead-refund-cases') ? 'true' : 'false' }}"
            aria-controls="refundMenu">
            Refund Cases
        </a>
        <div class="collapse {{ Request::is('refund*') || Request::is('all-refund-cases') || Request::is('individual-lead-refund-cases') ? 'show' : '' }}"
            id="refundMenu" data-bs-parent="#sidebarAccordion">
            <a href="{{ url('refund-cases') }}"
                class="sidebar-link {{ Request::is('refund-cases') ? 'active' : '' }}">Refund Cases</a>
            <a href="{{ url('all-refund-cases') }}"
                class="sidebar-link {{ Request::is('all-refund-cases') ? 'active' : '' }}">All Refund Cases</a>
            <!-- <a href="{{ url('individual-lead-refund-cases') }}"
                class="sidebar-link {{ Request::is('individual-lead-refund-cases') ? 'active' : '' }}">Individual Lead (Refund
                Cases)</a> -->
        </div>

        <!-- KASB Website Leads -->
        <a class="sidebar-parent" data-bs-toggle="collapse" href="#kasbMenu" role="button"
            aria-expanded="{{ Request::is('kasb*') || Request::is('kasb-website-leads-report') ? 'true' : 'false' }}"
            aria-controls="kasbMenu">
            KASB Website Leads
        </a>
        <div class="collapse {{ Request::is('kasb*') || Request::is('kasb-website-leads-report') ? 'show' : '' }}"
            id="kasbMenu" data-bs-parent="#sidebarAccordion">
            <a href="{{ url('kasb-open-psx') }}"
                class="sidebar-link {{ Request::is('kasb-open-psx') ? 'active' : '' }}">Open PSX Account</a>
            <a href="{{ url('kasb-website-leads-report') }}"
                class="sidebar-link {{ Request::is('kasb-website-leads-report') ? 'active' : '' }}">KASB Website Leads
                Report</a>
        </div>

        <!-- KYC Form -->
        <a class="sidebar-parent" data-bs-toggle="collapse" href="#kycMenu" role="button"
            aria-expanded="{{ Request::is('kyc*') || Request::is('kyc-form-report') ? 'true' : 'false' }}"
            aria-controls="kycMenu">
            KYC Form
        </a>
        <div class="collapse {{ Request::is('kyc*') || Request::is('kyc-form-report') ? 'show' : '' }}" id="kycMenu"
            data-bs-parent="#sidebarAccordion">
            <a href="{{ url('kyc-form') }}" class="sidebar-link {{ Request::is('kyc-form') ? 'active' : '' }}">Know Your
                Customer (KYC)</a>
            <a href="{{ url('kyc-form-report') }}"
                class="sidebar-link {{ Request::is('kyc-form-report') ? 'active' : '' }}">KYC
                Form Report</a>
        </div>

        <!-- Documents submission Form -->
        <a class="sidebar-parent" data-bs-toggle="collapse" href="#docMenu" role="button"
            aria-expanded="{{ Request::is('documents*') ? 'true' : 'false' }}" aria-controls="docMenu">
            Documents submission Form
        </a>
        <div class="collapse {{ Request::is('documents*') ? 'show' : '' }}" id="docMenu"
            data-bs-parent="#sidebarAccordion">
            <a href="{{ url('documents-form') }}"
                class="sidebar-link {{ Request::is('documents-form') ? 'active' : '' }}">Documents submission Form</a>
            <a href="{{ url('documents-report') }}"
                class="sidebar-link {{ Request::is('documents-report') ? 'active' : '' }}">Documents submission Form
                Report</a>
        </div>
        <div class="sidebar-bottom">
            <div class="sidebar-bottom__profile">
                <img src="{{ asset('assets/images/profile.png') }}" alt="image" class="img-fluid">
                <h4>fizza.hassan</h4>
            </div>
            <a href="" class="sidebar-bottom__icon">
                <i class="fa-solid fa-power-off"></i>
            </a>
        </div>
    </div>
