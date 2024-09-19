@php
    $user = 5
@endphp
@props(['activePage', 'activeItem', 'activeSubitem'])
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex align-items-center text-wrap text-center" href="">
            <img src="{{ asset('assets/frontend/') }}/img/logo/logo.png" class="navbar-brand-img h-100" alt="main_logo" style="min-height: 50px"> 
              <!-- <a href="{{url('/')}}"><img src="{{ asset('assets/frontend/') }}/img/logo/logo.png" alt="logo" style="height: 65px;"></a> -->
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- //admin Section start------------------------------ -->
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-dark" aria-controls="ProfileNav" role="button" aria-expanded="false">
                    <img src="{{ asset('assets') }}/img/default-avatar.png" alt="avatar" class="avatar">
                    @if($user == 1)
                    <span class="nav-link-text ms-2 ps-1">User</span>
                    @else
                    <span class="nav-link-text ms-2 ps-1">Admin</span>
                    @endif
                    
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                            </a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                            @csrf
                        </form>
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- //admin Section end------------------------------ -->

            @if($user == 1)


                <!-- //School route for Admin Start ------------------------------ -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#viewSchool" class="nav-link text-dark" aria-controls="viewSchool" role="button" aria-expanded="false">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Upload File</span>
                    </a>
                    <div class="collapse" id="viewSchool" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('user.upload')}}">
                                <i class="material-icons-round opacity-10">upload</i>
                                    <span class="sidenav-normal  ms-3  ps-1">File Upload</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- //School route for Admin end------------------------------ -->

                <li class="nav-item">
                    <a href="" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">download</i>
                        <span class="nav-link-text ms-2 ps-1">Download Template</span>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="{{ route('user.download')}}" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">download</i>
                        <span class="nav-link-text ms-2 ps-1">Assessment Download</span>
                    </a>
                </li> <li class="nav-item">
                    <a href="" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">date_range</i>
                        <span class="nav-link-text ms-2 ps-1">User Setting</span>
                    </a>
                </li> 



            @else
                <hr class="horizontal light mt-0">
                <li class="nav-item">
                    <a href="{{ route('school.create') }}" class="nav-link text-dark {{ $activePage == 'schools-create' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Add New School</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link text-dark {{ $activePage == 'schools-create' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Users</span>
                    </a>
                </li>

                <!-- //School route for Admin Start ------------------------------ -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#viewSchool" class="nav-link text-dark" aria-controls="viewSchool" role="button" aria-expanded="false">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">View School</span>
                    </a>
                    <div class="collapse" id="viewSchool" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('basic.index')}}">
                                    <span class="sidenav-normal  ms-3  ps-1">Basic School</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('senior.index')}}">
                                    <span class="sidenav-normal  ms-3  ps-1">Senior Heigh School </span>
                                </a>
                            </li>
                            
                        
                        </ul>
                    </div>
                </li>
                <!-- //School route for Admin end------------------------------ -->

                <li class="nav-item">
                    <a href="" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">date_range</i>
                        <span class="nav-link-text ms-2 ps-1">Admin Setting</span>
                    </a>
                </li> 

            @endif

            
         

           

           
           
       

          
            
          
           

        </ul>
    </div>

</aside>
