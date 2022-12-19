<div>
    <div class="container bread-1">
        <div class="row">
        <div class="col-12">

            <div class="breadcrumbs">
                <h1>Service Details</h1>
            <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="/">Home</a></li>
                <li>Service Details</li>
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
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
            <div class="the-news">
                    <div class="row">
                        <img
                            src="{{ asset('assets/images/services') }}/{{ $service->image }}"
                            alt="{{ $service->name }}"
                            width="100"
                        />

                        <div class="entry-content">
                            <p>
                            {{ $service->description }}
                            </p>
                        </div>
                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="#" class="p-5 bg-light">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" id="website">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="sidebar">
                <div class="sidebar-cats">
                    <h2 class="widget-title">What We Work On</h2>
                    <ul class="p-0 m-0">
                        @foreach ($categories as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="popular-posts">
                    <h2 class="widget-title">Popular Services</h2>
                    <ul class="p-0 m-0">
                        @foreach ($popular_services as $popular_services)
                        <li class="d-flex flex-wrap justify-content-between">
                            <figure style="margin-right: 10px">
                            <a href="{{ route('service.details', ['slug' => $popular_services->slug]) }}"
                                ><img
                                src="{{ asset('assets/images/services') }}/{{ $popular_services->image }}"
                                alt=""
                                width="80"
                                data-pagespeed-url-hash="1822751037"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                            /></a>
                            </figure>
                            <div class="entry-content2">
                            <h3 class="entry-title">
                                <a href="{{ route('service.details', ['slug' => $popular_services->slug]) }}">{{ $popular_services->name }}</a>
                            </h3>
                            {{-- <div class="posted-date">{{date('d F, Y', strtotime(  $popular_services->created_at )) }}</div> --}}
                            <p>{{ str_limit(strip_tags($popular_services->description),50,'...')  }}</p>
                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
                <div class="opening-hours">
                    <h2 class="d-flex align-items-center">Opening Hours</h2>
                    <ul class="p-0 m-0">
                    <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                    <li>Friday <span>8.00 - 18.30</span></li>
                    <li>Saturday <span>9.30 - 17.00</span></li>
                    <li>Sunday <span>9.30 - 15.00</span></li>
                    </ul>
                </div>
                <div class="emergency-box">
                    <h2 class="d-flex align-items-center">Emergency</h2>
                    <div class="call-btn text-center">
                    <a
                        class="d-flex justify-content-center align-items-center button gradient-bg"
                        href="#"
                        ><img
                        src="data:image/webp;base64,UklGRkgCAABXRUJQVlA4TDwCAAAvH8AHEG+loG0byfxJ39NuGOZ//g0mbZtb0hamyG3bBjmNDvobuDNgFgQAoAV4hEFBwFIQPkxg/4MvK8brirgp44QYXOUhIAsCy73n6AwzZavwAaEAIlvWl2vwQykrAom2tR1zc2Ym+FPHtm0bdWzbTurUbWzb5k3OfD8uIaL/Dty2cSRJ2/vu3SdQ1iK+5cP4xMfWREs06TR4eTLempXV+v/4atRVfc6y/bTRCZkOtSfdVgr76i3BbmbMFkVffJ53QDRq+zSP7hodapbvuwEQfJ4WcvgSLRYvPQYsFncd8D/MQ2bX6OioO4JDn4C60dp1R/wPc2UcVubvhSMo7YXheeFI7YYT/gcRMlxYkMH7SQp7gNpNZ5ratWB25j6SA1C7lX0aCZ0PRo08PDxsC02WLAUA0HeXipEqSZJ0WEhSqEjb3wtrAH4UYKIcmUEiOSvTMQDm108ELg8PDx2ZODw8EfE+7y0F4LswsvHy8jp2YSHTy0t89XY3r78BEHiSjpbDSNi2OQoFIEzeYVb0ugIVs+QuSyr9np2d9ZXzpQN+dqIwq+5qDNht1QJpzzUVdGAOOJtq8LHQ0p8iAJw3ayH6l8JGs+Y54QLJWxayf4Qp20JrMbOvU9mHb8DrKBIUK7M3zVbH/bv3wN9Yx1sUdNyoRdCtY/Zd/ZqDKT2oJ7NWKAOV1lVLWVABB7Vcx/pRbW3oKXJbbicfqcKzwZ1YBM3y96rM0GL8zsJwUVLJ4Nq8HxqVwgsGxrteBRgQBQ=="
                        data-pagespeed-url-hash="640029359"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        />
                        {{ $setting->phone }}</a
                    >
                    </div>
                    <p>
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec
                    males uada lorem maximus mauris sceler isque, at rutrum nulla.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
