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
                            <h3 class="text-center">Update School</h3>
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
                                                <option value="basic" @selected(old('type') == 'basic' || $school->type == 'basic')>Basic</option>
                                                <option value="senior" @selected(old('type') == 'senior' || $school->type== 'senior')>Senior</option>
                                            </select>
                                            @error('type') 
                                                <p class="text-danger" style="font-size:12px">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">School Name</label>
                                            <input name="name" value="{{ old('name') ?? $school->name}}" type="text" class="form-control border px-3 @error('name') is-invalid @enderror" id="schoolName" placeholder="Type school name">
                                            @error('name') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="regionSelect" class="form-label">Select Region:</label>
                                            <select id="regionSelect" onchange="updateDistricts()" name="region" class="form-select border px-3 @error('region') is-invalid @enderror">
                                                <option value=''>Select Region</option>
                                                <option value="Ahafo"  @selected(old('region') == 'Ahafo'|| $school->region == 'Ahafo')>Ahafo</option>
                                                <option value="Ashanti"  @selected(old('region') == 'Ashanti'|| $school->region == 'Ashanti')>Ashanti</option>
                                                <option value="Bono" @selected(old('region') == 'Bono'|| $school->region == 'Bono')>Bono</option>
                                                <option value="Bono East" @selected(old('region') == 'Bono East'|| $school->region == 'Bono East')>Bono East</option>
                                                <option value="Central" @selected(old('region') == 'Central'|| $school->region == 'Central')>Central</option>
                                                <option value="Eastern" @selected(old('region') == 'Eastern'|| $school->region == 'Eastern')>Eastern</option>
                                                <option value="Greater Accra" @selected(old('region') == 'Greater Accra'|| $school->region == 'Greater Accra')>Greater Accra</option>
                                                <option value="North East" @selected(old('region') == 'North East'|| $school->region == 'North East')>North East</option>
                                                <option value="Northern" @selected(old('region') == 'Northern'|| $school->region == 'Northern')>Northern</option>
                                                <option value="Oti" @selected(old('region') == 'Oti'|| $school->region == 'Oti')>Oti</option>
                                                <option value="Savannah" @selected(old('region') == 'Savannah'|| $school->region == 'Savannah')>Savannah</option>
                                                <option value="Upper East" @selected(old('region') == 'Upper East'|| $school->region == 'Upper East')>Upper East</option>
                                                <option value="Upper West" @selected(old('region') == 'Upper West'|| $school->region == 'Upper West')>Upper West</option>
                                                <option value="Volta" @selected(old('region') == 'Volta'|| $school->region == 'Volta')>Volta</option>
                                                <option value="Western" @selected(old('region') == 'Western'|| $school->region == 'Western')>Western</option>
                                                <option value="Western North" @selected(old('region') == 'Western North'|| $school->region == 'Western North')>Western North</option>
                                            </select>
                                            @error('region') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="districtSelect"  class="form-label disable">District</label>
                                            <select class="form-select border px-3 @error('district') is-invalid @enderror" name="district" id="districtSelect" aria-label="Default select example">
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
                                                <input type="text" value="{{ old('address') ?? $school->address }}" class="form-control border px-3 @error('address') is-invalid @enderror" id="" name="address" placeholder="Address of School">
                                                @error('address') 
                                                <p class="text-danger" style="font-size:12px">{{$message}}</p>
                                             @enderror
                                            </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label for="schoolName" class="form-label">Headmaster</label>
                                            <input type="text" value="{{ old('headmaster_name') ?? $school->headmaster_name }}" name="headmaster_name" class="form-control border px-3 @error('headmaster_name') is-invalid @enderror" id="schoolName" placeholder="Name of Headmaster">
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
                                                <input type="text" name="contact" value="{{ old('contact') ?? $school->contact }}" class="form-control border px-3 @error('contact') is-invalid @enderror" id="schoolName" placeholder="Phone Number">
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
                                                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id || $school->id == $user->id)>{{ $user->name }}</option>
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


            const districtData = {
                                    "Ahafo": ["Asunafo North", "Asunafo South", "Asutifi North", "Asutifi South", "Tano North", "Tano South"],
                                    "Ashanti": ["Adansi North", "Adansi South", "Afigya-Kwabre", "Ahafo Ano North", "Ahafo Ano South", "Amansie Central", "Amansie West", "Asante Akim Central", "Asante Akim North", "Asante Akim South", "Atwima Kwanwoma", "Atwima Mponua", "Atwima Nwabiagya", "Bekwai Municipal", "Bosome Freho", "Bosomtwe", "Ejisu Juaben", "Ejura Sekyedumase", "Kumasi Metropolitan", "Kwabre East", "Mampong Municipal", "Obuasi Municipal", "Offinso Municipal", "Offinso North", "Sekyere Afram Plains", "Sekyere Central", "Sekyere East", "Sekyere Kumawu", "Sekyere South"],
                                    "Bono": ["Banda", "Berekum Municipal", "Dormaa Central", "Dormaa East", "Dormaa West", "Jaman North", "Jaman South", "Sunyani Municipal", "Sunyani West", "Tain", "Wenchi"],
                                    "Bono East": ["Atebubu-Amantin", "Kintampo North Municipal", "Kintampo South", "Nkoranza North", "Nkoranza South", "Pru", "Sene East", "Sene West", "Techiman Municipal", "Techiman North"],
                                    "Central": ["Abura/Asebu/Kwamankese", "Agona East", "Agona West Municipal", "Ajumako/Enyan/Essiam", "Asikuma/Odoben/Brakwa", "Assin North", "Assin South", "Awutu Senya", "Awutu Senya East", "Cape Coast Metropolitan", "Effutu Municipal", "Ekumfi", "Gomoa East", "Gomoa West", "Komenda/Edina/Eguafo/Abirem Municipal", "Mfantsiman Municipal", "Twifo-Atti Morkwa", "Twifo/Heman/Lower Denkyira", "Upper Denkyira East Municipal", "Upper Denkyira West"],
                                    "Eastern": ["Achiase", "Akuapim North", "Akuapim South", "Akyemansa", "Asene Manso Akroso", "Asuogyaman", "Atiwa East", "Atiwa West", "Ayensuano", "Birim Central Municipal", "Birim North", "Birim South", "Denkyembour", "Fanteakwa North", "Fanteakwa South", "Kwahu Afram Plains North", "Kwahu Afram Plains South", "Kwahu East", "Kwahu South", "Kwahu West Municipal", "Lower Manya Krobo", "New Juaben North Municipal", "New Juaben South Municipal", "Nsawam Adoagyiri Municipal", "Suhum Municipal", "Upper Manya Krobo", "Upper West Akim", "West Akim Municipal", "Yilo Krobo"],
                                    "Greater Accra": ["Accra Metropolitan", "Ada East", "Ada West", "Ashaiman Municipal", "Ga Central Municipal", "Ga East Municipal", "Ga South Municipal", "Ga West Municipal", "Kpone Katamanso", "La Dade-Kotopon Municipal", "La Nkwantanang Madina Municipal", "Ledzokuku Municipal", "Ningo Prampram", "Shai Osudoku", "Tema Metropolitan", "Tema West Municipal", "Weija Gbawe Municipal"],
                                    "North East": ["Bunkpurugu-Nyankpanduri", "Chereponi", "East Mamprusi Municipal", "Mamprugu Moagduri", "West Mamprusi Municipal", "Yunyoo-Nasuan"],
                                    "Northern": ["Gushegu Municipal", "Karaga", "Kpandai", "Kumbungu", "Mamprugu-Moagduri", "Mion", "Nanton", "Saboba", "Savelugu Municipal", "Tatale Sanguli", "Tamale Metropolitan", "Tolon", "Yendi Municipal", "Zabzugu"],
                                    "Oti": ["Biakoye", "Jasikan", "Kadjebi", "Krachi East", "Krachi Nchumuru", "Krachi West", "Nkwanta North", "Nkwanta South"],
                                    "Savannah": ["Bole", "Central Gonja", "East Gonja Municipal", "North Gonja", "Sawla-Tuna-Kalba", "West Gonja Municipal", "West Gonja"],
                                    "Upper East": ["Bawku Municipal", "Bawku West", "Binduri", "Bolgatanga Municipal", "Bolgatanga East", "Bongo", "Garu", "Kassena Nankana Municipal", "Kassena Nankana West", "Nabdam", "Pusiga", "Talensi", "Tempane"],
                                    "Upper West": ["Daffiama Bussie Issa", "Jirapa Municipal", "Lambussie Karni", "Lawra Municipal", "Nadowli Kaleo", "Nandom Municipal", "Sissala East Municipal", "Sissala West", "Wa East", "Wa Municipal"],
                                    "Volta": ["Adaklu", "Afadjato South", "Agotime Ziope", "Akatsi North", "Akatsi South", "Anloga", "Central Tongu", "Ho Municipal", "Ho West", "Hohoe Municipal", "Ketu North Municipal", "Ketu South Municipal", "Kpando Municipal", "North Dayi", "North Tongu", "South Dayi", "South Tongu"],
                                    "Western": ["Ahanta West", "Effia-Kwesimintsim Municipal", "Ellembele", "Jomoro", "Mpohor", "Nzema East Municipal", "Prestea Huni Valley Municipal", "Sekondi Takoradi Metropolitan", "Shama", "Tarkwa-Nsuaem Municipal", "Wassa Amenfi Central", "Wassa Amenfi East Municipal", "Wassa Amenfi West Municipal", "Wassa East"],
                                    "Western North": ["Aowin", "Bia East", "Bia West", "Bibiani Anhwiaso Bekwai Municipal", "Juaboso", "Sefwi Akontombra", "Sefwi Wiawso Municipal"]
                                };
                    
                    let mm = "{{ old('district') ?? false }}"

                    function updateDistricts() {
                            const regionSelect = document.getElementById("regionSelect");
                            const districtSelect = document.getElementById("districtSelect");
                            const selectedRegion = regionSelect.value;

                            // Clear existing options
                            districtSelect.innerHTML = "<option value=''>---Select--</option>";
                            let mm = "{{ old('district') ?? false }}"

                            // Populate districts based on selected region
                            if (selectedRegion) {
                                districtData[selectedRegion].forEach(function(district) {
                                    const option = document.createElement("option");
                                    option.value = district;
                                    if(mm == district || "{{$school->district}}"==district ){
                                        option.setAttribute('selected','true')
                                    }
                                    option.textContent = district;
                                    districtSelect.appendChild(option);
                                });
                            }
                        }

                        updateDistricts()




        </script>
   
    
    @endpush
</x-page-template>
