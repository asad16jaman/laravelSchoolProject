@props(['p','btn', 'textColor','svgColor'])

<div class="container-fluid {{ $p }}" style="margin-top: -35px; border-top: 1.5px solid #ddd; border-bottom: 1.5px solid #ddd">
    
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
        </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto justify-content-end">
            @auth
           
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex d-flex d-flex-column justify-content-between cursor-pointer align-items-center"  style="color: #7b809a">  Dashboard  </a> 
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex d-flex d-flex-column justify-content-between cursor-pointer align-items-center"  style="color: #7b809a">  Calendar  </a> 
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex d-flex d-flex-column justify-content-between cursor-pointer align-items-center"  style="color: #7b809a">  Social Profile  </a> 
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex d-flex d-flex-column justify-content-between cursor-pointer align-items-center"  style="color: #7b809a">  Settings  </a> 
            </li>
            <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex d-flex d-flex-column justify-content-between cursor-pointer align-items-center"  style="color: #7b809a">  Tools  </a> 
            </li> 
            
            @endauth
          
        </ul>
       
    </div>
</div>
