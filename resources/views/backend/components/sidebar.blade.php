
<div class="iq-sidebar  sidebar-default ">
    {{-- <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="../assets/images/logo.svg" alt="logo">
            <h3 class="logo-title light-logo">Omeans Team</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div> --}}
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Nama Project</span>
                    </a>
                </li>
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class="{{ Request::is('projects') ? 'active' : '' }}">
                    <a href="{{ route('projects') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path
                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                            </path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Projects</span>
                    </a>
                </li>
                <li class="{{ Request::is('task') ? 'active' : '' }}">
                    <a href="{{ route('task') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                            </rect>
                        </svg>
                        <span class="ml-4">Task</span>
                    </a>
                </li>
                <li class="{{ Request::is('employee') ? 'active' : '' }}">
                    <a href="{{ route('employee') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-4">Employees</span>
                    </a>
                </li>
                <li class="{{ Request::is('desk') ? 'active' : '' }}">
                    <a href="{{ route('desk') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Desk</span>
                    </a>
                </li>
                <li class="{{ Request::is('calender') ? 'active' : '' }}">
                    <a href="{{ route('calender') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                            </rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span class="ml-4">Calender</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                            </path>
                        </svg>
                        <span class="ml-4">other page</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="#user" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash10" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="ml-4">User Details</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('user-details/user-profile') ? 'active' : '' }}">
                                    <a href="{{ route('user-profile') }}">
                                        <i class="las la-minus"></i><span>User Profile</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('user-details/user-add') ? 'active' : '' }}">
                                    <a href="{{ route('user-add') }}">
                                        <i class="las la-minus"></i><span>User Add</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('user-details/user-list') ? 'active' : '' }}">
                                    <a href="{{ route('user-list') }}">
                                        <i class="las la-minus"></i><span>User List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ui" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash11" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                </svg>
                                <span class="ml-4">UI Elements</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('ui-elements/ui-avatars') ? 'active' : '' }}">
                                    <a href="{{ route('ui-avatars') }}">
                                        <i class="las la-minus"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-alerts') ? 'active' : '' }}">
                                    <a href="{{ route('ui-alerts') }}">
                                        <i class="las la-minus"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-badges') ? 'active' : '' }}">
                                    <a href="{{ route('ui-badges') }}">
                                        <i class="las la-minus"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-breadcrumb') ? 'active' : '' }}">
                                    <a href="{{ route('ui-breadcrumb') }}">
                                        <i class="las la-minus"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-buttons') ? 'active' : '' }}">
                                    <a href="{{ route('ui-buttons') }}">
                                        <i class="las la-minus"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-buttons-group') ? 'active' : '' }}">
                                    <a href="{{ route('ui-buttons-group') }}">
                                        <i class="las la-minus"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-boxshadow') ? 'active' : '' }}">
                                    <a href="{{ route('ui-boxshadow') }}">
                                        <i class="las la-minus"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-colors') ? 'active' : '' }}">
                                    <a href="{{ route('ui-colors') }}">
                                        <i class="las la-minus"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-cards') ? 'active' : '' }}">
                                    <a href="{{ route('ui-cards') }}">
                                        <i class="las la-minus"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-carousel') ? 'active' : '' }}">
                                    <a href="{{ route('ui-carousel') }}">
                                        <i class="las la-minus"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-grid') ? 'active' : '' }}">
                                    <a href="{{ route('ui-grid') }}">
                                        <i class="las la-minus"></i><span>Grid</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-helper-classes') ? 'active' : '' }}">
                                    <a href="{{ route('ui-helper-classes') }}">
                                        <i class="las la-minus"></i><span>Helper classes</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-images') ? 'active' : '' }}">
                                    <a href="{{ route('ui-images') }}">
                                        <i class="las la-minus"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-list-group') ? 'active' : '' }}">
                                    <a href="{{ route('ui-list-group') }}">
                                        <i class="las la-minus"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-media-object') ? 'active' : '' }}">
                                    <a href="{{ route('ui-media-object') }}">
                                        <i class="las la-minus"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-modal') ? 'active' : '' }}">
                                    <a href="{{ route('ui-modal') }}">
                                        <i class="las la-minus"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-notifications') ? 'active' : '' }}">
                                    <a href="{{ route('ui-notifications') }}">
                                        <i class="las la-minus"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-pagination') ? 'active' : '' }}">
                                    <a href="{{ route('ui-pagination') }}">
                                        <i class="las la-minus"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-popovers') ? 'active' : '' }}">
                                    <a href="{{ route('ui-popovers') }}">
                                        <i class="las la-minus"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-progressbars') ? 'active' : '' }}">
                                    <a href="{{ route('ui-progressbars') }}">
                                        <i class="las la-minus"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-typography') ? 'active' : '' }}">
                                    <a href="{{ route('ui-typography') }}">
                                        <i class="las la-minus"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-tabs') ? 'active' : '' }}">
                                    <a href="{{ route('ui-tabs') }}">
                                        <i class="las la-minus"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-tooltips') ? 'active' : '' }}">
                                    <a href="{{ route('ui-tooltips') }}">
                                        <i class="las la-minus"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('ui-elements/ui-embed-video') ? 'active' : '' }}">
                                    <a href="{{ route('ui-embed-video') }}">
                                        <i class="las la-minus"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash12" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13">
                                    </line>
                                    <line x1="16" y1="17" x2="8" y2="17">
                                    </line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Authentication</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('authentication/auth-sign-in') ? 'active' : '' }}">
                                    <a href="{{ route('auth-sign-in') }}">
                                        <i class="las la-minus"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('authentication/auth-sign-up') ? 'active' : '' }}">
                                    <a href="{{ route('auth-sign-up') }}">
                                        <i class="las la-minus"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('authentication/auth-recoverpw') ? 'active' : '' }}">
                                    <a href="{{ route('auth-recoverpw') }}">
                                        <i class="las la-minus"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('authentication/auth-confirm-mail') ? 'active' : '' }}">
                                    <a href="{{ route('auth-confirm-mail') }}">
                                        <i class="las la-minus"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('authentication/auth-lock-screen') ? 'active' : '' }}">
                                    <a href="{{ route('auth-lock-screen') }}">
                                        <i class="las la-minus"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#form" class="collapsed svg-icon" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash13" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                    </path>
                                    <rect x="8" y="2" width="8" height="4" rx="1"
                                        ry="1"></rect>
                                </svg>
                                <span class="ml-4">Forms</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('forms/form-chechbox') ? 'active' : '' }}">
                                    <a href="{{ route('form-chechbox') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-datepicker') ? 'active' : '' }}">
                                    <a href="{{ route('form-datepicker') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Datepicker</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-file-uploader') ? 'active' : '' }}">
                                    <a href="{{ route('form-file-uploader') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form File Uploader</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-input-group') ? 'active' : '' }}">
                                    <a href="{{ route('form-input-group') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Input</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-layout') ? 'active' : '' }}">
                                    <a href="{{ route('form-layout') }}">
                                        <i class="las la-minus"></i><span class="">Form Elements</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-quill') ? 'active' : '' }}">
                                    <a href="{{ route('form-quill') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Quill</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-radio') ? 'active' : '' }}">
                                    <a href="{{ route('form-radio') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Radio</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-select') ? 'active' : '' }}">
                                    <a href="{{ route('form-select') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Select</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-switch') ? 'active' : '' }}">
                                    <a href="{{ route('form-switch') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Switch</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-textarea') ? 'active' : '' }}">
                                    <a href="{{ route('form-textarea') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Textarea</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-validation') ? 'active' : '' }}">
                                    <a href="{{ route('form-validation') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Validation</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-wizard') ? 'active' : '' }}">
                                    <a href="{{ route('form-wizard') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-wizard-validate') ? 'active' : '' }}">
                                    <a href="{{ route('form-wizard-validate') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Wizard Validate</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('forms/form-wizard-vertical') ? 'active' : '' }}">
                                    <a href="{{ route('form-wizard-vertical') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Wizard Vertical</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#table" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash14" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="ml-4">Table</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('table/tables-basic') ? 'active' : '' }}">
                                    <a href="{{ route('tables-basic') }}">
                                        <i class="las la-minus"></i><span>Basic Tables</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('table/table-data') ? 'active' : '' }}">
                                    <a href="{{ route('table-data') }}">
                                        <i class="las la-minus"></i><span>Data Table</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('table/table-tree') ? 'active' : '' }}">
                                    <a href="{{ route('table-tree') }}">
                                        <i class="las la-minus"></i><span>Table Tree</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('table/table-editable') ? 'active' : '' }}">
                                    <a href="{{ route('table-editable') }}">
                                        <i class="las la-minus"></i><span>Table Editable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pricing" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash16" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <ellipse cx="12" cy="5" rx="9" ry="3">
                                    </ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                                <span class="ml-4">Pricing</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('pricing/pricing') ? 'active' : '' }}">
                                    <a href="{{ route('pricing') }}">
                                        <i class="las la-minus"></i><span>Pricing</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('pricing/pricing-1') ? 'active' : '' }}">
                                    <a href="{{ route('pricing-1') }}">
                                        <i class="las la-minus"></i><span>Pricing 1</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('pricing/pricing-2') ? 'active' : '' }}">
                                    <a href="{{ route('pricing-2') }}">
                                        <i class="las la-minus"></i><span>Pricing 2</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('pricing/pricing-3') ? 'active' : '' }}">
                                    <a href="{{ route('pricing-3') }}">
                                        <i class="las la-minus"></i><span>Pricing 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#chart" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13">
                                    </line>
                                    <line x1="12" y1="17" x2="12.01" y2="17">
                                    </line>
                                </svg>
                                <span class="ml-4">Chart</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="chart" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('chart/chart-am') ? 'active' : '' }}">
                                    <a href="{{ route('chart-am') }}">
                                        <i class="las la-minus"></i><span>Chart Am</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('chart/chart-apex') ? 'active' : '' }}">
                                    <a href="{{ route('chart-apex') }}">
                                        <i class="las la-minus"></i><span>Chart Apex</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('chart/chart-high') ? 'active' : '' }}">
                                    <a href="{{ route('chart-high') }}">
                                        <i class="las la-minus"></i><span>Chart High</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('chart/chart-morries') ? 'active' : '' }}">
                                    <a href="{{ route('chart-morries') }}">
                                        <i class="las la-minus"></i><span>Chart Morries</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#contact" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13">
                                    </line>
                                    <line x1="12" y1="17" x2="12.01" y2="17">
                                    </line>
                                </svg>
                                <span class="ml-4">Contact</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="contact" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('contact/contact-detail') ? 'active' : '' }}">
                                    <a href="{{ route('contact-detail') }}">
                                        <i class="las la-minus"></i><span>Contact Detail</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('contact/contact-list') ? 'active' : '' }}">
                                    <a href="{{ route('contact-list') }}">
                                        <i class="las la-minus"></i><span>Contact List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13">
                                    </line>
                                    <line x1="12" y1="17" x2="12.01" y2="17">
                                    </line>
                                </svg>
                                <span class="ml-4">Error</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('404') ? 'active' : '' }}">
                                    <a href="{{ route('404') }}">
                                        <i class="las la-minus"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('500') ? 'active' : '' }}">
                                    <a href="{{ route('500') }}">
                                        <i class="las la-minus"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('timeline') ? 'active' : '' }}">
                            <a href="{{ route('timeline') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash016" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span class="ml-4">Timeline</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('invoice') ? 'active' : '' }}">
                            <a href="{{ route('invoice') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash07" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13">
                                    </line>
                                    <line x1="16" y1="17" x2="8" y2="17">
                                    </line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Invoice</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse"
                                aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13">
                                    </line>
                                    <line x1="12" y1="17" x2="12.01" y2="17">
                                    </line>
                                </svg>
                                <span class="ml-4">Error</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ Request::is('404') ? 'active' : '' }}">
                                    <a href="{{ route('404') }}">
                                        <i class="las la-minus"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('500') ? 'active' : '' }}">
                                    <a href="{{ route('500') }}">
                                        <i class="las la-minus"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                            <a href="{{ route('blank-page') }}">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Blank Page</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('maintenance') ? 'active' : '' }}">
                            <a href="{{ route('maintenance') }}">
                                <svg class="svg-icon" id="p-dash19" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                    </path>
                                </svg>
                                <span class="ml-4">Maintenance</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('icon-remixicon') ? 'active' : '' }}">
                            <a href="{{ route('icon-remixicon') }}">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Remixicon</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('pages-comingsoon') ? 'active' : '' }}">
                            <a href="{{ route('pages-comingsoon') }}">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Comingsoon</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('pages-faq') ? 'active' : '' }}">
                            <a href="{{ route('pages-faq') }}">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">FAQ</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('pages-subscribers') ? 'active' : '' }}">
                            <a href="{{ route('pages-subscribers') }}">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none mb-0 shadow-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <h5 class="mb-3">Task Performed</h5>
                        <div id="circle-progress-6"
                            class="sidebar-circle circle-progress circle-progress-primary mb-4"
                            data-min-value="0" data-max-value="100" data-value="55" data-type="percent">
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio6" name="customRadio-1"
                                class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio6">Performed task</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio-1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
