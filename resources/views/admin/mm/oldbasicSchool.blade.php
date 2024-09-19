



























<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="dashboard" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Basic School"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="card py-3">
                <div class="row px-3">
                    <div class="col-md-2">
                        <div class="">
                            <select class="form-select border px-3" aria-label="Default select example">
                                <option value="">select</option>
                                <option value="">5</option>
                                <option value="">10</option>
                                <option value="">15</option>
                                <option value="">20</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-10 m-auto">
                        <div class="w-25">
                            <input type="text" name="search" placeholder="search" class="form-control border px-3"
                                id="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3 px-5 py-3">
                <div class="row">
                    <div class="col-md-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>School Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Basic school 1</td>
                                    
                                </tr>
                                <tr>
                                    <td>Basic school 1</td>
                                    
                                </tr>
                                <tr>
                                    <td>Basic school 1</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2">
                        
                        <div>
                            <label for="schoolName" class="form-label">Action</label>
                            <select class="form-select border px-3" aria-label="Default select example">
                                <option value="">---Select--</option>
                                <option value="">Download</option>
                                <option value="">Edit</option>
                                <option value="">Delete</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <label for="schoolName" class="form-label">Basic School</label>
                            <select class="form-select border px-3" aria-label="Default select example">
                                <option value="">---Select School--</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <label for="">Choose File</label>
                            <input type="file" name="upload" class="form-control border" id="">
                        </div>
                    </div>
                </div>
            </div>



            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>


    @push('js')


    @endpush
</x-page-template>