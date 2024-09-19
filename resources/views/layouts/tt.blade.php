<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
<x-auth.navbars.sidebar activePage="dashboard" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Sales"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            
         
            
            hellow it is create page 
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
   

    @push('js')
   
    
    @endpush
</x-page-template>
