<div>
    <div class="container bread-1">
        <div class="row">
          <div class="col-12">

            <div class="breadcrumbs">
                <h1>Appointment</h1>
              <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="#">Home</a></li>
                <li>Appointment</li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    <div class="pickgradient">
    <img
    class="header-img"
    src="{{ asset('assets/images/fast-15.jpg') }}"
    alt=""
    />
      </div>
      <div class="contact-page-short-boxes">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="contact-info h-100">
                <h2 class="d-flex align-items-center">Contact Info</h2>
                <ul class="p-0 m-0">
                    @if ($setting->address)
                    <li><span>Addtress:</span>{{ $setting->address }}</li>
                    @endif

                  @if ($setting->phone)
                  <li><span>Phone:</span>{{ $setting->phone }}</li>
                  @endif
                  @if ($setting->phone2)
                  <li><span>Phone2:</span>{{ $setting->phone2 }}</li>
                  @endif
                  @if ($setting->email)
                  <li>
                    <span>Email:</span
                    ><a href="mail:{{ $setting->email }}"><span class="__cf_email__" data-cfemail="50293f25223d31393c10373d31393c7e333f3d">{{ $setting->email }}</span></a>
                  </li>
                  @endif

                </ul>
              </div>
            </div>
            <div class="col-12 col-md-4 mt-5 mt-lg-0">
              <div class="opening-hours h-100">
                <h2 class="d-flex align-items-center">Opening Hours</h2>
                <ul class="p-0 m-0">
                  <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                  <li>Friday <span>8.00 - 18.30</span></li>
                  <li>Saturday <span>9.30 - 17.00</span></li>
                  <li>Sunday <span>9.30 - 15.00</span></li>
                </ul>
              </div>
            </div>
            @if ($setting->phone)
            <div class="col-12 col-md-4 mt-5 mt-lg-0">
                <div class="emergency-box h-100">
                  <h2 class="d-flex align-items-center">Emergency</h2>
                  <div class="call-btn text-center">
                    <a
                      class="d-flex justify-content-center align-items-center button gradient-bg"
                      href="tel:{{ $setting->phone }}"
                      ><img
                        src="data:image/webp;base64,UklGRkgCAABXRUJQVlA4TDwCAAAvH8AHEG+loG0byfxJ39NuGOZ//g0mbZtb0hamyG3bBjmNDvobuDNgFgQAoAV4hEFBwFIQPkxg/4MvK8brirgp44QYXOUhIAsCy73n6AwzZavwAaEAIlvWl2vwQykrAom2tR1zc2Ym+FPHtm0bdWzbTurUbWzb5k3OfD8uIaL/Dty2cSRJ2/vu3SdQ1iK+5cP4xMfWREs06TR4eTLempXV+v/4atRVfc6y/bTRCZkOtSfdVgr76i3BbmbMFkVffJ53QDRq+zSP7hodapbvuwEQfJ4WcvgSLRYvPQYsFncd8D/MQ2bX6OioO4JDn4C60dp1R/wPc2UcVubvhSMo7YXheeFI7YYT/gcRMlxYkMH7SQp7gNpNZ5ratWB25j6SA1C7lX0aCZ0PRo08PDxsC02WLAUA0HeXipEqSZJ0WEhSqEjb3wtrAH4UYKIcmUEiOSvTMQDm108ELg8PDx2ZODw8EfE+7y0F4LswsvHy8jp2YSHTy0t89XY3r78BEHiSjpbDSNi2OQoFIEzeYVb0ugIVs+QuSyr9np2d9ZXzpQN+dqIwq+5qDNht1QJpzzUVdGAOOJtq8LHQ0p8iAJw3ayH6l8JGs+Y54QLJWxayf4Qp20JrMbOvU9mHb8DrKBIUK7M3zVbH/bv3wN9Yx1sUdNyoRdCtY/Zd/ZqDKT2oJ7NWKAOV1lVLWVABB7Vcx/pRbW3oKXJbbicfqcKzwZ1YBM3y96rM0GL8zsJwUVLJ4Nq8HxqVwgsGxrteBRgQBQ=="
                        data-pagespeed-url-hash="640029359"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      />
                      {{ $setting->phone }}</a
                    >
                  </div>
                  <p>
                    Dialing this on your CaptionCall phone will connect you with Emergency Services. You may not have access to captions, depending on the emergency.
                  </p>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
      <div class="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Make An Appointment</h2>
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
            </div>
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-12 col-md-4">
                    <input type="text" placeholder="Full Names" wire:model="fullname"/>
                    @error('fullname')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>

                    <div class="col-12 col-md-4">
                    <input type="text" placeholder="Phone No" wire:model="mobile"/>
                    @error('mobile')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col-12 col-md-4">
                    <input type="text" placeholder="District" wire:model="district"/>
                    @error('district')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="Address" wire:model="location"/>
                        @error('location')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <select wire:model="category_id">
                            <option value="">Select Difficulty</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                    <textarea
                        name="name"
                        rows="12"
                        cols="80"
                        placeholder="Message"
                        wire:model="message"
                    ></textarea>
                    @error('message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col-12">
                    <input
                        type="submit"
                        name=""
                        value="Send Message"
                        class="button gradient-bg"
                    />
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>

</div>
