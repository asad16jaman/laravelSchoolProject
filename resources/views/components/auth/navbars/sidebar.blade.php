@props(['activePage', 'activeItem', 'activeSubitem'])
<aside style="background:white" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex align-items-center text-wrap text-center" href="">
            <i class="material-icons-round opacity-10">
                School
            </i>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- //admin Section start------------------------------ -->
            
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-dark{{ $activePage == 'dropdown' ? ' active ' : '' }}" aria-controls="ProfileNav" role="button" aria-expanded="false">
                    @if(Auth::user()->picture)
                        <img src="{{ asset('storage').'/'.Auth::user()->picture }}" alt="avatar" class="avatar">
                    @else
                        <img src="{{ asset('assets') }}/img/default-avatar.png" alt="avatar" class="avatar">
                    @endif
                    @if(Auth::user()->role_id == '1')
                        <span class="nav-link-text ms-2 ps-1">{{Auth::user()->name }} </span>
                    @else
                        <span class="nav-link-text ms-2 ps-1">{{Auth::user()->name }} (Admin)</span>
                    @endif
                    
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('user-profile') }}">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
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

            

            @if(Auth::user()->role_id == '1')


                <!-- //School route for Admin Start ------------------------------ -->
                
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#viewSchool" class="nav-link text-dark {{ $activePage == 'user-upload' ? ' active ' : '' }}" aria-controls="viewSchool" role="button" aria-expanded="false">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Upload File</span>
                    </a>
                    <div class="collapse" id="viewSchool" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('template.upload')}}">
                                <i class="material-icons-round opacity-10">upload</i>
                                    <span class="sidenav-normal  ms-3  ps-1">File Upload</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- //School route for Admin end------------------------------ -->

                <li class="nav-item">
                    <a href="{{ route('template.download') }}" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">download</i>
                        <span class="nav-link-text ms-2 ps-1">Download Template</span>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="{{ route('assesment.download') }}" class="nav-link text-dark {{ $activePage == 'download-assesment' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">download</i>
                        <span class="nav-link-text ms-2 ps-1">Assessment Download</span>
                    </a>
                <!-- </li> <li class="nav-item">
                    <a href="" class="nav-link text-dark {{ $activePage == 'calendar' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">date_range</i>
                        <span class="nav-link-text ms-2 ps-1">User Setting</span>
                    </a>
                </li>  -->



            @else
                <hr class="horizontal light mt-0">
                <li class="nav-item">
                    <a href="{{ route('school.create') }}" class="nav-link text-dark {{ $activePage == 'schools-create' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Add New School</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link text-dark {{ $activePage == 'laravel-examples' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">people</i>
                        <span class="nav-link-text ms-2 ps-1">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('template') }}" class="nav-link text-dark {{ $activePage == 'template' ? ' active ' : '' }} ">
                        <i class="material-icons-round opacity-10">upload</i>
                        <span class="nav-link-text ms-2 ps-1">Template</span>
                    </a>
                </li>

                <!-- //School route for Admin Start ------------------------------ -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#viewSchool" class="nav-link text-dark {{ $activePage == 'school-view' ? ' active ' : '' }}" aria-controls="viewSchool" role="button" aria-expanded="false">
                        <i class="material-icons-round opacity-10">pages</i>
                        <span class="nav-link-text ms-2 ps-1">View School</span>
                    </a>
                    <div class="collapse" id="viewSchool" style="">
                        <ul class="nav ">
                            <li class="nav-item {{ $activeItem == 'basic' ? ' active ' : '' }}">
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
