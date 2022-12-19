<div>
    <div class="container bread-1">
        <div class="row">
        <div class="col-12">

            <div class="breadcrumbs">
                <h1>News</h1>
            <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="#">Home</a></li>
                <li>News</li>
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
                    @foreach ($blogs as $blog)
                    <div class="col-12 col-md-6">
                        <div class="the-news-wrap">
                        <figure class="post-thumbnail">
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                            ><img
                                src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}"
                                alt=""
                                data-pagespeed-url-hash="1729702568"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                            /></a>
                        </figure>
                        <header class="entry-header">
                            <h3>{{ $blog->name }}</h3>
                            <div class="post-metas d-flex flex-wrap align-items-center">
                            <div class="posted-date">
                                <label>Date: </label><a href="#">{{date('d F, Y', strtotime(   $blog->created_at )) }}</a>
                            </div>
                            <div class="posted-by">
                                <label>By: </label><a href="#"> {{ $blog->user->name }}</a>
                            </div>
                            <div class="post-comments">
                                <a href="#">2 Comments</a>
                            </div>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>
                                {!! str_limit(strip_tags($blog->description),100,'...')  !!}
                            </p>
                        </div>
                        <footer class="entry-footer mt-5">
                            <a class="button gradient-bg" href="{{ route('blog.details', ['slug' => $blog->slug]) }}">Read More</a>
                        </footer>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-12">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="sidebar">
                <div class="search-widget">
                    <form class="flex flex-wrap align-items-center">
                    <input type="search" placeholder="Search..." />
                    <button
                        type="submit"
                        class="flex justify-content-center align-items-center"
                    >
                        Search
                    </button>
                    </form>
                </div>
                <div class="sidebar-cats">
                    <h2 class="widget-title">What We Work On</h2>
                    <ul class="p-0 m-0">
                        @foreach ($categories as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="popular-posts">
                    <h2 class="widget-title">Latest Posts</h2>
                    <ul class="p-0 m-0">
                        @foreach ($l_blogs as $l_blog)
                        <li class="d-flex flex-wrap justify-content-between">
                            <figure style="margin-right: 10px">
                            <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}"
                                ><img
                                src="{{ asset('assets/images/blogs') }}/{{ $l_blog->image }}"
                                alt=""
                                width="60"
                                data-pagespeed-url-hash="1822751037"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                            /></a>
                            </figure>
                            <div class="entry-content">
                            <h3 class="entry-title">
                                <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">{{ $l_blog->name }}</a>
                            </h3>
                            <div class="posted-date">{{date('d F, Y', strtotime(  $l_blog->created_at )) }}</div>
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
                @if ($setting->phone)
                    <div class="emergency-box">
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
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
