<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

// Pages
Route::get('/projects', function () {
    return view('projects.index');
})->name('projects');

Route::get('/task', function () {
    return view('task.index');
})->name('task');

Route::get('/employee', function () {
    return view('employee.index');
})->name('employee');

Route::get('/desk', function () {
    return view('desk.index');
})->name('desk');

Route::get('/calender', function () {
    return view('calender.index');
})->name('calender');

// Backend Pages
Route::get('/blank-page', function () {
    return view('backend.pages.blank-page.index');
})->name('blank-page');

Route::get('/invoice', function () {
    return view('backend.pages.invoice.index');
})->name('invoice');

Route::get('/timeline', function () {
    return view('backend.pages.timeline.index');
})->name('timeline');

Route::get('/maintenance', function () {
    return view('backend.pages.maintenance.index');
})->name('maintenance');

// Authentication
Route::get('/authentication/auth-sign-in', function () {
    return view('backend.pages.authentication.auth-sign-in');
})->name('auth-sign-in');

Route::get('/authentication/auth-sign-up', function () {
    return view('backend.pages.authentication.auth-sign-up');
})->name('auth-sign-up');

Route::get('/authentication/auth-recoverpw', function () {
    return view('backend.pages.authentication.auth-recoverpw');
})->name('auth-recoverpw');

Route::get('/authentication/auth-confirm-mail', function () {
    return view('backend.pages.authentication.auth-confirm-mail');
})->name('auth-confirm-mail');

Route::get('/authentication/auth-lock-screen', function () {
    return view('backend.pages.authentication.auth-lock-screen');
})->name('auth-lock-screen');

// Forms
Route::get('/forms/form-chechbox', function () {
    return view('backend.pages.forms.form-chechbox');
})->name('form-chechbox');

Route::get('/forms/form-datepicker', function () {
    return view('backend.pages.forms.form-datepicker');
})->name('form-datepicker');

Route::get('/forms/form-file-uploader', function () {
    return view('backend.pages.forms.form-file-uploader');
})->name('form-file-uploader');

Route::get('/forms/form-input-group', function () {
    return view('backend.pages.forms.form-input-group');
})->name('form-input-group');

Route::get('/forms/form-layout', function () {
    return view('backend.pages.forms.form-layout');
})->name('form-layout');

Route::get('/forms/form-quill', function () {
    return view('backend.pages.forms.form-quill');
})->name('form-quill');

Route::get('/forms/form-radio', function () {
    return view('backend.pages.forms.form-radio');
})->name('form-radio');

Route::get('/forms/form-select', function () {
    return view('backend.pages.forms.form-select');
})->name('form-select');

Route::get('/forms/form-switch', function () {
    return view('backend.pages.forms.form-switch');
})->name('form-switch');

Route::get('/forms/form-textarea', function () {
    return view('backend.pages.forms.form-textarea');
})->name('form-textarea');

Route::get('/forms/form-validation', function () {
    return view('backend.pages.forms.form-validation');
})->name('form-validation');

Route::get('/forms/form-wizard', function () {
    return view('backend.pages.forms.form-wizard');
})->name('form-wizard');

Route::get('/forms/form-wizard-validate', function () {
    return view('backend.pages.forms.form-wizard-validate');
})->name('form-wizard-validate');

Route::get('/forms/form-wizard-vertical', function () {
    return view('backend.pages.forms.form-wizard-vertical');
})->name('form-wizard-vertical');

// Pricing
Route::get('/pricing/pricing', function () {
    return view('backend.pages.pricing.pricing');
})->name('pricing');

Route::get('/pricing/pricing-1', function () {
    return view('backend.pages.pricing.pricing-1');
})->name('pricing-1');

Route::get('/pricing/pricing-2', function () {
    return view('backend.pages.pricing.pricing-2');
})->name('pricing-2');

Route::get('/pricing/pricing-3', function () {
    return view('backend.pages.pricing.pricing-3');
})->name('pricing-3');

// Chart
Route::get('/chart/chart-am', function () {
    return view('backend.pages.chart.chart-am');
})->name('chart-am');

Route::get('/chart/chart-apex', function () {
    return view('backend.pages.chart.chart-apex');
})->name('chart-apex');

Route::get('/chart/chart-high', function () {
    return view('backend.pages.chart.chart-high');
})->name('chart-high');

Route::get('/chart/chart-morries', function () {
    return view('backend.pages.chart.chart-morries');
})->name('chart-morries');

// Contact
Route::get('/contact/contact-detail', function () {
    return view('backend.pages.contact.contact-detail');
})->name('contact-detail');

Route::get('/contact/contact-list', function () {
    return view('backend.pages.contact.contact-list');
})->name('contact-list');

// Tables
Route::get('/table/tables-basic', function () {
    return view('backend.pages.table.tables-basic');
})->name('tables-basic');

Route::get('/table/table-data', function () {
    return view('backend.pages.table.table-data');
})->name('table-data');

Route::get('/table/table-tree', function () {
    return view('backend.pages.table.table-tree');
})->name('table-tree');

Route::get('/table/table-editable', function () {
    return view('backend.pages.table.table-editable');
})->name('table-editable');

// UI Elements
$uiElements = [
    'avatars',
    'alerts',
    'badges',
    'breadcrumb',
    'buttons',
    'buttons-group',
    'boxshadow',
    'colors',
    'cards',
    'carousel',
    'grid',
    'helper-classes',
    'images',
    'list-group',
    'media-object',
    'modal',
    'notifications',
    'pagination',
    'popovers',
    'progressbars',
    'typography',
    'tabs',
    'tooltips',
    'embed-video',
];

foreach ($uiElements as $element) {
    Route::get('/ui-elements/ui-' . $element, function () use ($element) {
        return view('backend.pages.ui-elements.ui-' . $element);
    })->name('ui-' . $element);
}

// Errors
Route::get('/404', function () {
    return view('errors.404');
})->name('404');

Route::get('/500', function () {
    return view('errors.500');
})->name('500');

// User Details
Route::get('/user-details/user-profile', function () {
    return view('backend.pages.user-details.user-profile');
})->name('user-profile');

Route::get('/user-details/user-add', function () {
    return view('backend.pages.user-details.user-add');
})->name('user-add');

Route::get('/user-details/user-list', function () {
    return view('backend.pages.user-details.user-list');
})->name('user-list');

Route::get('/user-details/user-account-setting', function () {
    return view('backend.pages.user-details.user-account-setting');
})->name('user-account-setting');

Route::get('/user-details/user-privacy-setting', function () {
    return view('backend.pages.user-details.user-privacy-setting');
})->name('user-privacy-setting');

Route::get('/user-details/user-profile-edit', function () {
    return view('backend.pages.user-details.user-profile-edit');
})->name('user-profile-edit');


Route::get('/icon-remixicon', function () {
    return view('backend.pages.icon-remixicon');
})->name('icon-remixicon');

Route::get('/pages-comingsoon', function () {
    return view('backend.pages.pages-comingsoon');
})->name('pages-comingsoon');

Route::get('/pages-faq', function () {
    return view('backend.pages.pages-faq');
})->name('pages-faq');

Route::get('/pages-subscribers', function () {
    return view('backend.pages.pages-subscribers');
})->name('pages-subscribers');

Route::get('/privacy-policy', function () {
    return view('backend.pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function () {
    return view('backend.pages.terms-of-service');
})->name('terms-of-service');
