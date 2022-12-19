<div>
    <div class="container bread-1">
        <div class="row">
          <div class="col-12">

            <div class="breadcrumbs">
                <h1>Services</h1>
              <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="#">Home</a></li>
                <li>Services</li>
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


    <div class="quality-services">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <h2>Some Of The Difficulties We Work On</h2>
                <div class="services-tabs">

                  <div class="tabs">
                    <ul class="tabs-nav d-flex flex-wrap">
                        @foreach ( $categories as $category )
                        <li
                            class="tab-nav d-flex justify-content-center align-items-center"
                            data-target="#tab_{{ $category->id }}"
                        >
                            {{ $category->name }}
                        </li>
                      @endforeach
                    </ul>
                    <div class="tabs-container">
                        @foreach ( $categories as $category )
                      <div id="tab_{{ $category->id }}" class="tab-content">
                        <img
                          src="{{ asset('assets/images/categories') }}/{{ $category->image }}"
                          style="border-radius: 10px;"
                          width="500"
                          alt="{{ $category->name }}"
                        />
                        <h4>{{ $category->name }}</h4>
                        <p>
                            {{ $category->description }}
                        </p>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>


      <div class="container mb-6">
        <div class="row">
          <div class="col-12">
            <div class="our-departments-wrap">
                <h2>Our Services</h2>
              <div class="row">
                @foreach ($services as $service)
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="our-departments-cont">
                    <header
                      class="entry-header d-flex flex-wrap align-items-center"
                    ><a href="{{ route('service.details', ['slug' => $service->slug]) }}">
                      <img
                        src="{{ asset('assets/images/services') }}/{{ $service->image }}"
                        alt="{{ $service->name }}"
                      />
                      <h3>{{ str_limit(strip_tags($service->name),25,'...')  }}</h3>
                    </a>
                    </header>
                    <div class="entry-content">
                        <span>Difficulty : {{ $service->category->name }}</span>
                      <p>
                        {!! str_limit(strip_tags($service->description),100,'...')  !!}
                      </p>
                    </div>
                    <footer class="entry-footer">
                      <a href="{{ route('service.details', ['slug' => $service->slug]) }}">read more</a>
                    </footer>
                  </div>
                </div>
                @endforeach
              </div>
              {{ $services->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>

</div>
