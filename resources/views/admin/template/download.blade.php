<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="schools-create" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="create-page"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container">

            <div class="card my-3 p-5">
                <div class="card-title">
                    <h3 class="text-center">{{ ucfirst($school->name) }}</h3>
                </div>

                <form action="" method="post">
                    @csrf
                    <input type="text" name="school_id" style="display:none" value="{{ $school->id }}" id="">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="">Select Term</label>
                                <select name="term" id="" class="form-select px-3 @error('term') is-invalid @enderror">
                                    <option value="">Select Term</option>
                                    <option value="1" @selected(old('term') == '1')>1</option>
                                    <option value="2" @selected(old('term') == '2')>2</option>
                                    <option value="3" @selected(old('term') == '3')>3</option>
                                </select>

                                @error('term')
                                    <p class="text-danger" style="font-size:14">{{ $message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                          
                            <div>
                                <label for="">Option Select</label>
                                <select name="option" id="" class="form-select px-3 @error('option') is-invalid @enderror">
                                    <option value="">Select Option</option>
                                    @if($school->type == 'basic')
                                    <option value="1" @selected(old('option' == '1'))>1</option>
                                    <option value="2" @selected(old('option' == '2'))>2</option>
                                    <option value="3" @selected(old('option' == '3'))>3</option>
                                    <option value="4" @selected(old('option' == '4'))>4</option>
                                    <option value="5" @selected(old('option' == '5'))>5</option>
                                    <option value="6" @selected(old('option' == '6'))>6</option>
                                    <option value="JHS_1" @selected(old('option' == 'JSH_1'))>JHS 1</option>
                                    <option value="JHS_2" @selected(old('option' == 'JSH_2'))>JHS 2</option>
                                    <option value="JHS_3" @selected(old('option' == 'JSH_3'))>JSH 3</option>
                                    @else

                                    <option value="SHS_1" @selected(old('option' == 'SHS_1'))>SHS 1</option>
                                    <option value="SHS_2" @selected(old('option' == 'SHS_2'))>SHS 2</option>
                                    <option value="SHS_3" @selected(old('option' == 'SHS_3'))>SSH 3</option>

                                    @endif
                                </select>
                                @error('option')
                                    <p class="text-danger" style="font-size:14">{{ $message}}</p>
                                @enderror
                            </div>
                          

                          

                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                    <input type="submit" value="Download" class="btn btn-success">
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