<header class="header-section">
    <div class="mx-5 w-100 d-flex justify-content-between align-items-center">
        <div class="logo p-0">
            <a href="/">
                <!-- <img src={{ url('/img/logo.png') }} alt=""> -->
                <img class="img-fluid" src={{ url('/img/unique_events_logo.png') }} alt=""
                    style="max-width: 200px;">
            </a>
        </div>
        <div>
            <div class="nav-menu ">
                <nav class=" d-flex align-items-center mobile-menu">
                    <div class="mainmenu">
                        <ul>
                            <li class="{{ Request::path() == '/' ? 'active' : '' }} "><a href="{{ url('/') }}"
                                    class="text-decoration-none">Home </a></li>
                            <li class="{{ Request::path() == 'about-us' ? 'active' : '' }}"><a
                                    href="{{ url('/about-us') }}" class="text-decoration-none">About</a></li>
                            <li class="{{ Request::path() == 'speaker' ? 'active' : '' }}"><a
                                    href="{{ url('/speaker') }}" class="text-decoration-none">Speakers</a>
                                <!-- <ul class="dropdown ">
                                <li><a href="#">Jayden</a></li>
                                <li><a href="#">Sara</a></li>
                                <li><a href="#">Emma</a></li>
                                <li><a href="#">Harriet</a></li>
                            </ul> -->
                            </li>
                            <li class="{{ Request::path() == 'schedule' ? 'active' : '' }}"><a
                                    href="{{ url('/schedule') }}" class="text-decoration-none">Schedule</a></li>
                            <!-- <li class="{{ Request::path() == 'blog' ? 'active' : '' }}"><a href="./blog" class="text-decoration-none">Blog</a></li> -->
                            <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a
                                    href="{{ url('/contact') }}" class="text-decoration-none">Contacts</a></li>

                            @if (Request::path() != 'about-us' && Request::path() != '/')
                                <a href="{{ url('/#ticket_detail_section') }}"
                                    class="primary-btn top-btn text-decoration-none"><i class="fa fa-ticket"></i>
                                    Ticket</a>
                            @else
                                <a href="{{ url('#ticket_detail_section') }}"
                                    class="primary-btn top-btn text-decoration-none"><i class="fa fa-ticket"></i>
                                    Ticket</a>
                            @endif
                            <!-- <a href='#ticket_detail_section' class="primary-btn top-btn text-decoration-none"><i
                        class="fa fa-ticket"></i> Login</a> -->
                            {{-- <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                            {{-- </button> --}}

                        </ul>
                    </div>
                </nav>



            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
        @if (session()->has('auth'))
            <div>
                <div class="dropdown" data-bs-toggle="dropdown" aria-expanded="false">

                    <svg class="btn-bg-gradient rounded-circle shadow-md" xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
                <ul class="dropdown-menu">
                    <li class="dropdown-item text-capitalize ">User name : {{session()->get('userName')}}</a>
                    </li>
                    <li class="dropdown-item"><a class="d-flex align-items-center gap-2 text-dark"
                            href="{{ url('/profile') }}"><i class="fa fa-user fa-lg" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li class="dropdown-item  "><a class=" d-flex align-items-center gap-2 text-dark"
                            href="{{ url('/ticket-details') }}"><i class="fa fa-ticket fa-lg"
                                aria-hidden="true"></i>Ticket Details</a></li>
                    <hr class="m-0">
                    <li class="dropdown-item pointer-events-none">
                        <div class="gap-2 d-flex align-items-center py-2">
                            <i class="fa fa-life-ring fa-lg" aria-hidden="true"></i>
                            <p class="m-0">Support</p>
                        </div>
                        <div>
                            <p class="m-0">(+91)-812-457-7775</p>
                            <p class="m-0">support@uniqueeventmanagements.com</p>
                        </div>
                    </li>
                    <hr class="m-0">
                    <li class="dropdown-item "><a class=" d-flex align-items-center gap-2 text-dark" href="/logout">
                            <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>Logout</a></li>
                </ul>
            @else
                <a href="/login" class="primary-btn">Login</a>
                {{-- <li class="d-flex"><a class="dropdown-item" href="/login">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>Login</a></li> --}}
        @endif
    </div>

    </div>
</header>
