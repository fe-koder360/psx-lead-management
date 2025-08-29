<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leads');
});

Route::get('/leads', function () {
    return view('leads');
});

Route::get('/all-leads-report', function () {
    return view('all-leads-report');
});

Route::get('/individual-lead', function () {
    return view('individual-lead');
});

Route::get('/called-pending-documents', function () {
    return view('called-pending-documents');
});

Route::get('/all-refund-cases', function () {
    return view('all-refund-cases');
});

Route::get('/individual-lead-refund-cases', function () {
    return view('individual-lead-refund-cases');
});

Route::get('/kasb-website-leads-report', function () {
    return view('kasb-website-leads-report');
});

Route::get('/kyc-form-report', function () {
    return view('kyc-form-report');
});