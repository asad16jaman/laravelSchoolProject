<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
<x-auth.navbars.sidebar activePage="dashboard" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Sales"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible text-white mx-4" role="alert">
                            <span class="text-sm">{{ Session::get('error') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
        @endif


        @if($school)
         <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Name : {{ $school[0]->name }}</h3>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        @endif
        
    </main>
    <x-plugins></x-plugins>
    
</x-page-template>
