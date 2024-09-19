<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="category-management" activeSubitem="">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Category Management"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Edit Category</h5>
                            <p>Edit your category</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('category') }}">Back to list</a>
                        </div>
                        <div class="card-body">
                            <form method='POST' action='{{ route('edit.category', $category) }}' class='d-flex flex-column align-items-center'>
                                @csrf

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for='category_id'>Category</label>
                                    <select class="form-select border border-2 p-2 select2" data-toggle="select2" data-placeholder="Choose ..." data-live-search="true" data-selected="{{ $category->parent_id }}" name="parent_id" data-style="select-with-transition" title="" data-size="100" id="category_id">
                                        <option value="0">No Parent</option>
                                        @foreach ($categories as $acategory)
                                            <option value="{{ $acategory->id }}" @if($acategory->id == $category->parent_id) selected @endif>{{ $acategory->name }}</option>
                                            @foreach ($acategory->childrenCategories as $childCategory)
                                                @include('laravel-examples.category.child', ['child_category' => $childCategory, 'p_id' => $category->parent_id])
                                            @endforeach
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>  

                                <div class="form-group col-12 col-md-6">
                                    <label for="exampleInputname">Name</label>
                                    <input type="name" name='name' class="form-control border border-2 p-2" id="exampleInputname" placeholder="Enter name" value="{{ old('name', $category->name) }}">
                                    @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>


                                <div class="form-group col-12 mt-2 col-md-6">
                                    <label for="description">Category Description</label>
                                    <textarea class="form-control border border-2 p-2" placeholder="Description" id="description" name='description'>{{ old('description', $category->description) }}</textarea>
                                    @error('description')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-dark mt-3">Save</button>
                            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @endpush
</x-page-template>
