<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
<x-auth.navbars.sidebar activePage="schools-create" activeItem="sales" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="create-page"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3 class="text-center">Add New School</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">School Type</label>
                                            <select class="form-select border px-3 @error('type') is-invalid @enderror" name="type" aria-label="Default select example">
                                                <option value="">---Select--</option>
                                                <option value="basic" @selected(old('type') == 'basic')>Basic</option>
                                                <option value="senior" @selected(old('type') == 'senior')>Senior</option>
                                            </select>
                                            @error('type') 
                                                <p class="text-danger" style="font-size:12px">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">School Name</label>
                                            <input name="name" value="{{ old('name')}}" type="text" class="form-control border px-3 @error('name') is-invalid @enderror" id="schoolName" placeholder="Type school name">
                                            @error('name') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">Region</label>
                                            <select class="form-select border px-3 @error('region') is-invalid @enderror" name="region" id="region" aria-label="Default select example">
                                                <option value="">---Select--</option>
                                                <option value="A" @selected(old('region') == 'A')>A</option>
                                                <option value="B" @selected(old('region') == 'B')>B</option>
                                            </select>
                                            @error('region') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="schoolName"  class="form-label disable">District</label>
                                            <select class="form-select border px-3 @error('district') is-invalid @enderror" name="district" id="district" aria-label="Default select example">
                                                <option value="">---Select--</option>
                            
                                            </select>
                                            @error('district') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        
                                            <div class="">
                                                <label for="schoolName" class="form-label">Address</label>
                                                <input type="text" value="{{ old('address') }}" class="form-control border px-3 @error('address') is-invalid @enderror" id="" name="address" placeholder="Address of School">
                                                @error('address') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                            </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">Headmaster</label>
                                            <input type="text" value="{{ old('headmaster_name')}}" name="headmaster_name" class="form-control border px-3 @error('headmaster_name') is-invalid @enderror" id="schoolName" placeholder="Name of Headmaster">
                                            @error('headmaster_name') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <div class="">
                                                <label for="schoolName" class="form-label">Contact</label>
                                                <input type="text" name="contact" value="{{ old('contact')}}" class="form-control border px-3 @error('contact') is-invalid @enderror" id="schoolName" placeholder="Phone Number">
                                                @error('contact') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">User</label>
                                            <select name="user_id" class="form-select border px-3 @error('user_id') is-invalid @enderror" aria-label="Default select example">
                                                <option value="">---Select--</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('user_id') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
   

    @push('js')

        <script>
          
            document.getElementById('region').addEventListener('change',function() {
                districtOption(this.value);
                // console.log('hellow')
                    
            })

            function districtOption(region){

                

                let option = null;
                    let ar = [];
                   if(region=="A"){
                        ar = ['x','y','z'];
                   }else if(region == "B"){
                        ar = ['l','m','n'];
                   }

                   let mm = "{{ old('district') ?? false }}"

                   
                    option = ar.map(function(ele){
                            
                            return `<option value="${ele}" ${(ele==mm) ? 'selected' : ""}>${ele}</option>`
                        })


                   option = `<option value=''>--Select--</option>`+option.join('');
                        document.getElementById('district').innerHTML =option


            }

           @if (old('region') == "A")
            districtOption('A')
           @elseif(old('region') == "B")
            districtOption('B')
           @endif


        </script>
   
    
    @endpush
</x-page-template>
