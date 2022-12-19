<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Faith Audiology and Speech Therapy organization </title>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="{{ asset('assets/css/A.bootstrap.min.css.pagespeed.cf.96ce0raldg.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="{{ asset('assets/css/A.swiper.min.css.pagespeed.cf.yu3bDVN0Ta.css') }}"
    />

    <link rel="stylesheet" href="{{ asset('assets/A.style.css.pagespeed.cf.-e_8WG3Bfg.css') }}" />
    @livewireStyles
  </head>
  @php
  $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
  $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
  $current_page = str_replace('.php', '', $current_page);  // trim off the extension
@endphp
  <body class="{{ $current_page ==! '' ? 'single-page': '' }}">
    @livewire('header-component')

    {{ $slot }}


    @livewire('footer-component')

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

    <script type="text/javascript">
      //<![CDATA[
      /*!
       * Collapsible.js v1.2.0
       * https://github.com/jordnkr/collapsible
       *
       * Copyright 2017, Jordan Ruedy
       * This content is released under the MIT license
       * http://opensource.org/licenses/MIT
       */
        !(function (e, s) {
        e.fn.collapsible = function (s) {
          var n = {
              accordion: !1,
              accordionUpSpeed: 400,
              accordionDownSpeed: 400,
              collapseSpeed: 400,
              contentOpen: null,
              arrowRclass: "arrow-r",
              arrowDclass: "arrow-d",
              animate: !0,
            },
            c = e.extend(n, s);
          return this.each(function () {
            !1 === c.animate &&
              ((c.accordionUpSpeed = 0),
              (c.accordionDownSpeed = 0),
              (c.collapseSpeed = 0));
            var s = e(this).children(":even"),
              n = e(this).children(":odd"),
              r = "accordion-active";
            if (
              (e(this).children(":nth-child(even)").css("display", "none"),
              !0 === c.accordion)
            )
              null !== c.contentOpen &&
                (e(s[c.contentOpen])
                  .children(":first-child")
                  .toggleClass(c.arrowRclass + " " + c.arrowDclass),
                e(n[c.contentOpen]).show().addClass(r)),
                e(s).click(function () {
                  e(this).next().attr("class") === r
                    ? (e(this)
                        .next()
                        .slideUp(c.accordionUpSpeed)
                        .removeClass(r),
                      e(this)
                        .children(":first-child")
                        .toggleClass(c.arrowRclass + " " + c.arrowDclass))
                    : (e(s)
                        .children()
                        .removeClass(c.arrowDclass)
                        .addClass(c.arrowRclass),
                      e(n).slideUp(c.accordionUpSpeed).removeClass(r),
                      e(this)
                        .next()
                        .slideDown(c.accordionDownSpeed)
                        .addClass(r),
                      e(this)
                        .children(":first-child")
                        .toggleClass(c.arrowRclass + " " + c.arrowDclass));
                });
            else {
              if (null !== c.contentOpen)
                if (Array.isArray(c.contentOpen))
                  for (var a = 0; a < c.contentOpen.length; a++) {
                    var l = c.contentOpen[a];
                    e(s[l])
                      .children(":first-child")
                      .toggleClass(c.arrowRclass + " " + c.arrowDclass),
                      e(n[l]).show();
                  }
                else
                  e(s[c.contentOpen])
                    .children(":first-child")
                    .toggleClass(c.arrowRclass + " " + c.arrowDclass),
                    e(n[c.contentOpen]).show();
              e(s).click(function () {
                e(this)
                  .children(":first-child")
                  .toggleClass(c.arrowRclass + " " + c.arrowDclass),
                  e(this).next().slideToggle(c.collapseSpeed);
              });
            }
          });
        };
      })(jQuery);


      //]]>
    </script>
    <script type="text/javascript"  src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('assets/js/jquery.countdown.min.js+circle-progress.min.js+jquery.countTo.min.js+jquery.barfiller.js+custom.js.pagespeed.jc.j4J0RYb3LW.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
      eval(mod_pagespeed_Ki7nfyOVyG);
    </script>
    <script>
      eval(mod_pagespeed_1C0dGnxP3K);
    </script>
    <script>
      eval(mod_pagespeed_Zg31CFJYut);
    </script>
    <script>
      eval(mod_pagespeed_K7hVqgnp7W);
    </script>
    <script>
      eval(mod_pagespeed_4GGU7iO1y$);
    </script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
      integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
      data-cf-beacon='{"rayId":"7267783e0f09cb7b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
      crossorigin="anonymous"
    ></script>
    @livewireScripts
    @stack('scripts')
  </body>
</html>
