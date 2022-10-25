<!DOCTYPE html>
<html lang="en">
    <meta
        http-equiv="content-type"
        content="text/html;charset=UTF-8"
    />
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asliddin</title>
    <meta name="title" content="EstateLab - All Property" />
    <meta
      name="description"
      content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit"
    />
    <meta
      name="keywords"
      content="Real-estate,real-estate listing,property listing"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/templates/basic/frontend/css/lib/bootstrap-5.0.0.min.css')}}"
    />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/templates/basic/frontend/css/lightcase.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/templates/basic/frontend/css/lib/slick.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/templates/basic/frontend/css/lib/select2.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/templates/basic/frontend/css/main.css')}}"
    />
    <link
      href="{{ asset('assets/templates/basic/frontend/css/colorfbe5.css?color=e9e62c&amp;secondColor=1f1f1f')}}"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
    <header class="header">
      <div class="header__bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="menu-toggle"></span>
            </button>
            <a class="site-logo site-title" href="/">
              <img src="{{ asset('logo.png')}}" alt="logo" />
            </a>
            <div
              class="collapse navbar-collapse mt-lg-0 mt-3"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav main-menu ms-auto">
                <li>
                  <a
                    href="/"
                    >{{__('key.home')}}</a
                  >
                </li>
                <li><a href="/add">{{__('key.elon')}}</a></li>
                <li><a href="/search">{{__('key.search')}}</a></li>
              </ul>
              <div class="nav-right">
                <select class="language-select langSel">
                  <option value="uz" @if(__('key.lang')=="uz") selected @endif>Uz </option>
                  <option value="en"  @if(__('key.lang')=="en") selected @endif>En </option>
                  <option value="ru"  @if(__('key.lang')=="ru") selected @endif>Ru</option>
                </select>
                
              </div>
              <div class="nav-right">
                <a href="/my" class="btn btn-sm btn--success w-100">{{__('key.login')}}</a>
              </div>

            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="main-wrapper">
        <section
            class="inner-page-hero bg_img"
            style="background-image: url({{ asset('back.png')}})">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2 class="page-title">
                    {{__('key.home1')}} <font style="color: green"> {{__('key.home2')}}</font>
                </h2>
                
                </div>
            </div>
            </div>
        </section>

        @yield('content')

    </div>
    

    <!-- cookies default start -->

    <!-- cookies default end -->

    <script src="{{ asset('assets/admin/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/lib/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/lib/slick.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/lib/wow.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/lib/lightcase.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/lib/select2.min.js')}}"></script>
    <script src="{{ asset('assets/templates/basic/frontend/js/main.js')}}"></script>
    <script>
      (function ($) {
        "use strict";
        // $(".propertyTypes").on("click", function () {
        //   this.form.submit();
        // });

        // $(".propertyPurpose").on("click", function () {
        //   this.form.submit();
        // });

        $("select[name=shaxar_id]").on("change", function () {
          $("select[name=mahalla_id]").html(
            '<option value="" selected="" disabled="">Select One</option>'
          );
          var locations = $("select[name=shaxar_id] :selected").data("locations");
          var html = "";
          locations.forEach(function myFunction(item, index) {
            let name_asl=JSON.parse(item.name)['{{__('key.lang')}}'];
            html += `<option value="${item.id}">${name_asl}</option>`;
          });
          $("select[name=mahalla_id]").append(html);
        });
      })(jQuery);
    </script>
    {{--  --}}
    <link rel="stylesheet" href="{{ asset('assets/global/css/iziToast.min.css')}}" />
    <script src="{{ asset('assets/global/js/iziToast.min.js')}}"></script>

    <script>
      "use strict";
      function notify(status, message) {
        iziToast[status]({
          message: message,
          position: "topRight",
        });
      }
    </script>

    <script>
      (function ($) {
        "use strict";
        $(".langSel").on("change", function () {
          window.location.href =
            "/lang/" + $(this).val();
        });
      })(jQuery);
    </script>

@yield('js')
    
  </body>

  <!-- Mirrored from script.viserlab.com/estatelab/property by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Cho, 12 Okt 2022 18:28:04 GMT -->
</html>
