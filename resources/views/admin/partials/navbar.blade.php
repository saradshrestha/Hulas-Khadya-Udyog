
<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="{{ asset(getSiteSetting('logo')) }}" class="navbar-logo" alt="{{ getSiteSetting('site_title') }}">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"> {{ getSiteSetting('site_title') }} </a>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search" method="get" action="{{ route('admin.search') }}">
                    <div class="search-bar">
                        <input type="text" name="search" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-auto">


            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </a>
                <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                    <div class="">

                        @if(getContactMessages())
                            @foreach(getContactMessages() as $contactMessage)
                                <a class="dropdown-item" href="{{ route('admin.contact') }}">
                                    <div class="">

                                        <div class="media">

                                            <div class="media-body">
                                                <div class="">
                                                    <h5 class="usr-name">{{ $contactMessage->name }}</h5>
                                                    <p class="msg-title">{{ $contactMessage->subject }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            @endforeach
                        @else

                            <a class="dropdown-item" href="{{ route('admin.contact') }}">
                                <div class="">

                                    <div class="media">

                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">No New Message</h5>
                                                <p class="msg-title">View All</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endif

                    </div>
                </div>
            </li>


            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{{ asset(Auth::user()->image??'') }}" alt="{{ Auth::user()->name }}">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="{{ route('admin.user.profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a>
                        </div>
                        <div class="dropdown-item">
                            @if(Auth::check())
                                <form method="POST" action="{{ route('logout')  }}" id="form-submit">
                                    {{ csrf_field() }}
                                    <a onclick="document.getElementById('form-submit').submit()" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>

                                </form>
                            @endif

                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

