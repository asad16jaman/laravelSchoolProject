@props(['textColor'])
<footer class="footer position-relative bottom-2 py-2 w-100">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-12 col-md-6 my-auto">
          <div class="{{ $textColor}} copyright text-center text-sm text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>
            made with <i class="fa fa-heart" aria-hidden="true"></i> by
            <a href="#" class="{{ $textColor}} font-weight-bold" target="_blank">Epic Socail</a>  
          </div>
        </div>
        <div class="col-12 col-md-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
             
            
            <li class="nav-item">
              <a href="#" class="nav-link {{ $textColor}}" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/terms-and-conditions') }}" class="nav-link {{ $textColor}}" target="_blank">Terms & Conditions</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/privacy-policy') }}" class="nav-link pe-0 {{ $textColor}}" target="_blank">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>