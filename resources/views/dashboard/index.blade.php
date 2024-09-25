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


        
         <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-title text-center">
                                    <h4>Welcome To Your School</h4>
                        </div>
                        <div class="card-body border p-3 rounded">
                            @if($school)
                                <h5>School Name : {{ $school->name }}</h5>
                                <p>Head Master Name : {{ $school->headmaster_name }}</p>
                                <p>Phone : {{ $school->contact }}</p>
                                <p>Distric: {{ $school->district?? "none"}} , Region {{ $school->region?? "none" }}</p>
                                <small>Address : {{ $school->address}}</small>
                            @else
                                <h5 class="text-center">You are not assigned any school by admin</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        
    </main>
    <x-plugins></x-plugins>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
   
    @endpush
    
</x-page-template>
