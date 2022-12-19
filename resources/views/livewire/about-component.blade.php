<div>
    <div class="container bread-1">
        <div class="row">
          <div class="col-12">

            <div class="breadcrumbs">
                <h1>About us</h1>
              <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="#">Home</a></li>
                <li>About Us</li>
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
    <div class="med-history">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-12 col-lg-6">
              <h2>FAST History</h2>
              <p>
                Faith Audiology and Speech Therapy organization (FAST) is a speech and language therapy community based organization that was first established in 2017 as Faith over Fear Speech and Language Therapy (FOF). With over 5 years in existence.
              </p>
              <p>FAST is now registered with the Uganda registration service bureau (URSB) as a nonprofit charitable health organization providing education about communication disabilities, community ear hygiene & hearing health (public otology) in northern Uganda. FAST provides speech & language assessment and management, ear screening, assessment, Hearing tests, and rehabilitation services to individuals with hearing impairment. The Rehabilitation service includes ear cleaning, programming, and dispensing of hearing aids, fitting hearing aids, counseling, and speech therapy for persons fitted with hearing devices. </p>
              <p> FAST works with children with communication difficulties, feeding and swallowing difficulties providing ear screening, assessment, hearing tests, and rehabilitation services to individuals with hearing impairment. Other Rehabilitation services include ear cleaning, programming, and dispensing of hearing aids, fitting hearing aids, counseling, and speech therapy for persons fitted with hearing devices. With our treatment service center at St Philip Health Center Gulu, we serve the entire community of Northern Uganda and across all parts of Uganda</p>
              <p>We envision ‘an empowered disability embraced community where every disability is attended to’ and we exist to create awareness and empower individuals and institutions to have long lasting solutions to all kinds of disabilities. With our team of skilled and experienced experts in speech and language therapy and support from JHL, FAST operates as a one stop treatment services center and community outreaches for speech and language therapy.</p>
              {{-- <a class="d-inline-block button gradient-bg" href="#">Read More</a> --}}
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
              <img
                class="responsive"
                style="width: 100%; border-radius: 10px;"
                src="{{ asset('assets/images/fast-14.jpg') }}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>

      <div class="faq-stuff">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Missions & Visions</h2>
            </div>
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
              <div class="accordion-wrap type-accordion">
                <h3
                  class="entry-title d-flex justify-content-between align-items-center active"
                >
                Mission:<span
                    class="arrow-r"
                  ></span>
                </h3>
                <div class="entry-content">
                  <p>
                    To provide evidence-based assessment and rehabilitation of hearing balance, speech, and language difficulties within the community of Uganda.
                  </p>
                </div>
                <h3
                  class="entry-title d-flex justify-content-between align-items-center"
                >
                Vision:
                  <span class="arrow-r"></span>
                </h3>
                <div class="entry-content">
                  <p>
                    To be top-class ear health and communication promoters through education, early intervention, rehabilitation, and innovative research works.
                  </p>
                </div>
                <h3
                  class="entry-title d-flex justify-content-between align-items-center"
                >
                Core values: <span
                    class="arrow-r"
                  ></span>
                </h3>
                <div class="entry-content">
                  <p>
                    Professionalism, teamwork, interpersonal communication, integrity, research, and innovation.
                  </p>
                </div>
                <h3
                  class="entry-title d-flex justify-content-between align-items-center"
                >
                Objectives: <span
                    class="arrow-r"
                  ></span>
                </h3>
                <div class="entry-content">
                  <p>
                    To raise awareness of ear hygiene and hearing impairments within the community.
                  </p>
                  <p>To raise awareness of communication difficulties, feeding, and swallowing difficulties in children and adults with disabilities.</p>
                  <p>To identify hearing impairment risk factors within the community through outreach programs and the village health team's networking. </p>
                  <p>To identify communication difficulties, feeding, and swallowing difficulties in children and adults with disabilities. </p>
                  <p>To perform hearing health surveillance, screening, assessment, and diagnosis of hearing impairment in people in the community </p>
                  <p>To perform treatment and management of tropical ear infections. </p>
                  <p>To perform routine ear checks and cleaning </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="professional-box">
                    <h2 class="d-flex align-items-center">Professional</h2>
                    <img
                      src="{{ asset('assets/images/xcardiogram-2.png.pagespeed.ic.fhRaewV9uU.webp') }}"
                      alt=""
                    />
                    <p>
                        We do our best to be competent and reliable to our lovely clients.
                    </p>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="quality-box">
                    <h2 class="d-flex align-items-center">Quality</h2>
                    <img
                      src="{{ asset('assets/images/xhospital.png.pagespeed.ic.f74SnkDwAd.webp') }}"
                      alt=""
                    />
                    <p>
                      Systematic efforts to insure that we meet the contractual and other agreed upon performance.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="medical-team">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>The Medical Team</h2>
            </div>
            @if ($staffs->count() > 0)
            @foreach ($staffs as $staff)
            <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                <div class="medical-team-wrap">
                  <img
                    src="{{ asset('assets/images/staffs') }}/{{ $staff->image }}"
                    alt=""
                  />
                  <h4>{{ $staff->name }}</h4>
                  <h5>{{ $staff->position }}</h5>
                  <p>{{ $staff->branch }}</p>
                </div>
              </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert"><h3 class="box-title alert-link">No Staff members added at the moment</h3></div>
            @endif

          </div>
        </div>
      </div>
</div>
@push('scripts')

@endpush
