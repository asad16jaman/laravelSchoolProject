

<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="template" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Template"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="card py-3">
                <div class="row px-3">
                    <div class="col-12">
                        <h3 class="text-center">Upload Raw Template</h3>
                    </div>
                    
                </div>
            </div>

            <div class="card mt-3 px-5 py-3">
                <div class="row">
                   
                        <div class="col-md-6 offset-md-3">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Template Chooes</label>
                                    <input type="file" name="path" id="" class="form-control border @error('path') is-invalid @enderror">
                                    @error('path') <p class="text-danger" style="font-size:14px">{{ $message }}</p> @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    
                    
                    
                </div>
            </div>



            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>


    @push('js')


    @endpush
</x-page-template>