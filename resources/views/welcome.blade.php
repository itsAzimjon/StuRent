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
      href="assets/templates/basic/frontend/css/lib/bootstrap-5.0.0.min.css"
    />
    <link rel="stylesheet" href="assets/admin/css/all.min.css" />
    <link rel="stylesheet" href="assets/admin/css/line-awesome.min.css" />
    <link
      rel="stylesheet"
      href="assets/templates/basic/frontend/css/lightcase.css"
    />
    <link
      rel="stylesheet"
      href="assets/templates/basic/frontend/css/lib/slick.css"
    />
    <link
      rel="stylesheet"
      href="assets/templates/basic/frontend/css/lib/select2.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/templates/basic/frontend/css/main.css"
    />
    <link
      href="assets/templates/basic/frontend/css/colorfbe5.css?color=e9e62c&amp;secondColor=1f1f1f"
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
            <a class="site-logo site-title" href="#">
              <img src="logo.png" alt="logo" />
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
                @guest
                <a href="/home" class="btn btn-sm btn--success w-100">{{__('key.login')}}</a>
                @else
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" style="background: gray;" data-bs-toggle="dropdown" aria-expanded="false">
                    <i  class="las la-user"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/home">{{__('key.login')}}</a></li>
                    <li><button class="dropdown-item"  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</button></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>
                </div>
                @endguest
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="main-wrapper">
      <section
        class="inner-page-hero bg_img"
        style="background-image: url(back.png)"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 class="page-title">
                {{__('key.home1')}} <font style="color: #009273"> {{__('key.home2')}}</font>
              </h2>
              <ul class="page-list justify-content-center">
                <li>
                  <a href="/search" class="btn btn-sm btn--success w-100">{{__('key.search')}}</a>
                </li>
                <li>
                  <a class="btn btn-sm btn--success w-100">{{__('key.elon')}}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-100">
        

        <div class="container pt-50">
          <div class="row">
           <div class="col-sm-12 col-lg-1">
            <i style="font-size: 5rem;color:#009273;" class="las la-door-open"></i>
           </div>
           <div class="col-sm-12 col-lg-5">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum a iusto quas quaerat tempora veritatis laudantium, ipsam mollitia saepe officia voluptas, autem illo nesciunt repudiandae amet labore aliquid reprehenderit.</span>
           </div>
           <div class="col-sm-12 col-lg-1" >
            <i style="font-size: 4rem;color:#009273;"  class="las la-map-marked-alt"></i>
           </div>
           <div class="col-sm-12 col-lg-5"  >
            <span>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum a iusto quas quaerat tempora veritatis laudantium, ipsam mollitia saepe officia voluptas, autem illo nesciunt repudiandae amet labore aliquid reprehenderit.
            </span>
           </div>
          </div>
        </div>
      </section>
    </div>
    

    <!-- cookies default start -->

    <!-- cookies default end -->

    <script src="assets/admin/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/templates/basic/frontend/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/templates/basic/frontend/js/lib/slick.min.js"></script>
    <script src="assets/templates/basic/frontend/js/lib/wow.min.js"></script>
    <script src="assets/templates/basic/frontend/js/lib/lightcase.min.js"></script>
    <script src="assets/templates/basic/frontend/js/lib/select2.min.js"></script>
    <script src="assets/templates/basic/frontend/js/main.js"></script>
    <script>
      (function ($) {
        "use strict";
        $(".propertyTypes").on("click", function () {
          this.form.submit();
        });

        $(".propertyPurpose").on("click", function () {
          this.form.submit();
        });

        $("select[name=city]").on("change", function () {
          $("select[name=location]").html(
            '<option value="" selected="" disabled="">Select One</option>'
          );
          var locations = $("select[name=city] :selected").data("locations");
          var html = "";
          locations.forEach(function myFunction(item, index) {
            html += `<option value="${item.id}">${item.name}</option>`;
          });
          $("select[name=location]").append(html);
        });
      })(jQuery);
    </script>
    <script>
      (function () {
        "use strict";
        $(document).on("click", ".subscribe-btn", function () {
          var email = $("#emailSub").val();
          if (email) {
            $.ajax({
              headers: {
                "X-CSRF-TOKEN": "axq20SKHGaJpX4tKXrX4OKR1VwrNIpLt21aC7EBT",
              },
              url: "https://script.viserlab.com/estatelab/subscribe",
              method: "POST",
              data: { email: email },
              success: function (response) {
                if (response.success) {
                  notify("success", response.success);
                  $("#emailSub").val("");
                } else {
                  $.each(response, function (i, val) {
                    notify("error", val);
                  });
                }
              },
            });
          } else {
            notify("error", "Please Input Your Email");
          }
        });

        $(".policy").on("click", function () {
          $.ajaxSetup({
            headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
          });
          $.get("cookie/accept.json", function (response) {
            $(".cookies-card").addClass("d-none");
            notify("success", response);
          });
        });
      })();
    </script>
    <link rel="stylesheet" href="assets/global/css/iziToast.min.css" />
    <script src="assets/global/js/iziToast.min.js"></script>

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

    <script>
      adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
      adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
      adroll_version = "2.0";
      (function (w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll = w.adroll || [];
        w.adroll.f = ["setProperties", "identify", "track"];
        var roundtripUrl =
          "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
          w.adroll[w.adroll.f[a]] =
            w.adroll[w.adroll.f[a]] ||
            (function (n) {
              return function () {
                w.adroll.push([n, arguments]);
              };
            })(w.adroll.f[a]);
        }
        e = d.createElement("script");
        o = d.getElementsByTagName("script")[0];
        e.async = 1;
        e.src = roundtripUrl;
        o.parentNode.insertBefore(e, o);
      })(window, document);
      adroll.track("pageView");
    </script>
  </body>

  <!-- Mirrored from script.viserlab.com/estatelab/property by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Cho, 12 Okt 2022 18:28:04 GMT -->
</html>
