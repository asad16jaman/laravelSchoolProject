<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="user-management" activeSubitem="">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="basic-view"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Basic School</h5>
                        </div>
                        @if (Session::has('status'))
                        <div class="alert alert-success alert-dismissible text-white mx-4" role="alert">
                            <span class="text-sm">{{ Session::get('status') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @elseif (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible text-white mx-4" role="alert">
                            <span class="text-sm">{{ Session::get('error') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                     
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('school.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add School</a>
                        </div>
                       
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-basic">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID</th>
                                       
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Region</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            District</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Address</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Head Master</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                           Contact</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                           User</th>
                                      
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Template</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Actions</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach ($schools as $school)
                                    <tr>
                                        <td>{{ $school->id }}</td>
                                        <td>{{ $school->name }}</td>
                                        <td>{{ $school->region }}</td>
                                        <td>{{ $school->district }}</td>
                                        <td>{{ $school->address }}</td>
                                        <td>{{ $school->headmaster_name }}</td>
                                        <td>{{ $school->contact }}</td>
                                        <td>{{ $school->user->name }}</td>
                                        <td>
                                        <a data-bs-toggle="collapse" href="#ProfileNav{{$school->id}}" class="nav-link text-dark btn btn-primary" aria-controls="ProfileNav" role="button" aria-expanded="false">
                                               Template Action  
                                            </a>
                                            <div class="collapse" id="ProfileNav{{$school->id}}" style="">
                                                <ul class="nav ">
                                                    <li class="nav-item">
                                                        <a class="nav-link text-dark" href="{{ route('admin.download',$school->id) }}">
                                                        <i class="material-icons-round opacity-10">download</i>
                                                        <span class="nav-link-text ms-2 ps-1">Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-dark " href="{{ route('admin.upload',$school->id)}}">
                                                        <i class="material-icons-round opacity-10">edit</i>
                                                        <span class="nav-link-text ms-2 ps-1">Edit</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>


                                        <td>

                                        <form method="POST" action="{{ route('school.delete',$school->id)}}">
                                                @csrf
                                              
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('school.eidt',$school->id)}}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            
                                                
                                                <button type="button" class="btn btn-danger btn-link"
                                                    data-original-title="" title=""
                                                    onclick="confirm('Are you sure you want to delete this user?') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                                
                                            </form>

                                        </td>
                                    </tr>

                                    @endforeach
                                  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>

    <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
    <script>
        const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
            searchable: true,
            fixedHeight: true
        });

    </script>
    @endpush
</x-page-template>
