@props(['p','btn', 'textColor','svgColor'])

<div class="container-fluid {{ $p }}">
    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ $textColor }}" href="{{ route('dashboard') }}" style="font-size: 24px">
           logo
    </a>
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
         
            
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
             
            <li class="nav-item">
                <a href="{{ url('sign-in') }}"
                    class="btn btn-sm  {{ $btn }}  mb-0" target="_blank">Client</a>
            </li>
        </ul>
    </div>
</div>
