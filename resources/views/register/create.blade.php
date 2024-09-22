<x-page-template bodyClass=''>
  
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-5">
           
                <div class="row signin-margin">
                    <div class="col-lg-4 col-md-8 mx-auto">
                        <div class="card z-index-0 mt-5"> 
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('register') }}">
                                    @csrf 
                                    
                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Name</label>
                                        <input type="text" name='name' class="form-control" aria-label="Name" value='{{ old('name') }}'>
                                    </div>
                                    @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror                                   

                                    <div class="input-group input-group-dynamic mt-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name='email' class="form-control" aria-label="Email" value='{{ old('email') }}'>
                                    </div>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    
                                    

                                    <div class="input-group input-group-dynamic mt-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name='password' class="form-control"
                                            aria-label="Password">
                                    </div>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="form-check text-start mt-3">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" value=""
                                            id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree the <a href="{{url('terms-of-services')}}"
                                                class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 my-2">Sign
                                            up</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Already have an account?
                                        <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in
                                        </a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
    <script>
        $(function () {
    
            function checkForInput(element) {
    
                const $label = $(element).parent();
    
                if ($(element).val().length > 0) {
                    $label.addClass('is-filled');
                } else {
                    $label.removeClass('is-filled');
                }
            }
            var input = $(".input-group input");
            input.focusin(function () {
                $(this).parent().addClass("focused is-focused");
            });
    
            $('input').each(function () {
                checkForInput(this);
            });

            $('input').on('change keyup', function () {
                checkForInput(this);
            });
    
            input.focusout(function () {
                $(this).parent().removeClass("focused is-focused");
            });
        });
    
    </script>
    
    @endpush
</x-page-template>
