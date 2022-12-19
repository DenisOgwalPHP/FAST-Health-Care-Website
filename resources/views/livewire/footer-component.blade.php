<footer class="site-footer">
    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="foot-about">
              <h2>
                <a href="#"
                  ><img
                    src="{{ asset('assets/images/logo/fastug.png') }}"
                    alt=""
                    width="100"
                    data-pagespeed-url-hash="3417948280"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                /></a>
              </h2>
              <p>
                Faith Audiology and Speech Therapy organization is a speech and language therapy community based organization that was first established in 2017 as Faith over Fear Speech and Language Therapy (FOF).
              </p>

            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
            <div class="foot-contact">
              <h2>Contact</h2>
              <ul class="p-0 m-0">
                <li><span>Addtress:</span> {{ $setting->address }}</li>
                <li><span>Phone:</span><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                @if ($setting->phone2)
                    <li><span>Phone 2:</span><a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a></li>
                @endif

                <li>
                  <span>Email:</span
                  >
                  <a href="mail:{{ $setting->email }}"><span class="__cf_email__" data-cfemail="50293f25223d31393c10373d31393c7e333f3d">{{ $setting->email }}</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 mt-5 mt-md-0">
            <div class="foot-contact social">
              <h2>Social Links</h2>
              <ul class="p-0 m-0">
                <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $setting->linkedIn }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
            <div class="foot-links">
              <h2>Usefull Links</h2>
              <ul class="p-0 m-0">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
