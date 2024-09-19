<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="schools-create" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="create-page"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container">

            <div class="card my-3 p-5">

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="">Select Term</label>
                                <select name="" id="" class="form-select px-3">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Basic School</label>
                            <select name="" id="" class="form-select px-3">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">


                        <!-- btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2 -->

                            <label class="form-control mb-0">Book File</label>
                            <div class="avatar avatar-xxl position-relative">
                                <div class="position-relative preview">
                                    <label for="bookfile" class="">
                                        <span class="upload-btn" style="border:1px solid black; cursor:pointer;display:inline-block;padding:5px">
                                         <i class="material-icons-round opacity-10">download</i> Upload file
                                        </span>
                                        
                                        
                                        
                                    </label>
                                  
                                    
                                    <input type="file" style="display:none" name='bookfile' id="bookfile"
                                        ">
                                    @error('bookfile')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                            </div>







                        </div>
                        <div class="col-md-6">
                           
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                    <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>

            </div>


            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>


    @push('js')

    <script>
        
    </script>


    @endpush
</x-page-template>