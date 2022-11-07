<!DOCTYPE html>
<html lang="en">
    <meta
        http-equiv="content-type"
        content="text/html;charset=UTF-8"
    />
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sturent</title>
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
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">

  </head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
    <header class="header">
      <div class="header__bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
           
            <a class="site-logo site-title" href="/search">
              <img src="logo.png" alt="logo" />
            </a> 
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
                >
                <svg width="36" height="36" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4.54993" y="5.31372" width="17.0042" height="3.18828" rx="1.19561" fill="black"/>
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M5.74556 10.6277C5.08524 10.6277 4.54995 11.163 4.54995 11.8233V12.6204C4.54995 13.2807 5.08524 13.816 5.74556 13.816H13.982C14.6423 13.816 15.1776 13.2807 15.1776 12.6204V11.8233C15.1776 11.163 14.6423 10.6277 13.9819 10.6277H5.74556ZM5.74553 15.9414C5.08522 15.9414 4.54993 16.4767 4.54993 17.137V17.9341C4.54993 18.5944 5.08522 19.1297 5.74553 19.1297H20.3585C21.0188 19.1297 21.5541 18.5944 21.5541 17.9341V17.137C21.5541 16.4767 21.0188 15.9414 20.3585 15.9414H5.74553Z" fill="#009273"/>
                </svg>
            </button>
            <div
              class="collapse navbar-collapse mt-lg-0 mt-3"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav main-menu ms-auto">
                <li><a class="text-capitalize" href="/">{{__('key.home')}}</a></li>
                <li><a class="text-capitalize" href="/add">{{__('key.elon')}}</a></li>
                <li><a class="text-capitalize" href="/search">{{__('key.search')}}</a></li>
              </ul>
              <div class="nav-right mb-4 mb-xl-0 mb-xxl-0">
                
                <svg width="24" height="24" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M16.5714 28C23.4355 28 29 22.6274 29 16C29 9.37258 23.4355 4 16.5714 4C9.70728 4 4.14282 9.37258 4.14282 16C4.14282 22.6274 9.70728 28 16.5714 28Z" fill="#009273"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2065 27.9949C9.51114 27.8085 4.14282 22.5096 4.14282 16C4.14282 15.8891 4.14438 15.7786 4.14748 15.6684C5.05747 15.7524 6.70638 15.9432 6.78407 16.5605C6.8916 17.4146 6.78407 18.4821 7.53727 18.8024C8.29046 19.1226 8.50569 17.5212 9.15119 17.9483C9.79669 18.3754 11.5183 18.7866 11.5183 19.5416C11.5183 20.2965 11.1956 21.4713 11.5183 21.6848C11.8411 21.8984 13.1314 23.3929 13.1317 23.6064C13.1322 23.82 13.5866 24.9058 13.451 25.3209C13.3387 25.665 12.7718 26.7335 12.2222 27.2194C13.4686 27.6828 14.8087 27.9544 16.2065 27.9947L16.2065 27.9949ZM11.4384 5.06816C13.0031 4.38209 14.7412 4 16.5717 4C21.4209 4 25.6214 6.6813 27.6697 10.5921C27.7156 11.6322 27.7075 12.5218 27.9454 12.8436C29.1566 14.4801 24.9949 15.6058 25.6271 18.0807C25.9056 19.1727 22.8589 18.8262 22.1149 19.8485C21.3703 20.8703 19.5511 20.1837 19.1293 19.9873C18.7075 19.7909 17.0919 20.4455 17.2331 19.3327C17.3735 18.2195 18.3563 18.1542 19.4104 17.6959C20.4639 17.2382 21.9836 15.7162 21.2369 15.5173C17.7211 14.5817 16.5217 11.3047 16.5217 11.3047C16.3108 11.2653 16.3637 8.98812 15.4509 8.92276C14.5373 8.85707 14.0452 9.18455 12.7111 8.92276C11.3761 8.66097 11.6576 7.80992 11.4466 5.97674C11.3994 5.56554 11.4017 5.27623 11.4384 5.06816ZM28.9988 15.836C28.9996 15.8906 29 15.9453 29 16C29 22.5876 23.5022 27.9354 16.695 27.9994C23.435 27.9338 28.9084 22.5179 28.9988 15.836Z" fill="black"/>
                </svg>

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
                <!--<div class="dropdown">-->
                <!--  <button class="btn btn-secondary dropdown-toggle" type="button" style="background: gray;" data-bs-toggle="dropdown" aria-expanded="false">-->
                <!--    <i  class="las la-user"></i>-->
                <!--  </button>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li><a class="dropdown-item" href="/home">{{__('key.login')}}</a></li>-->
                <!--    <li><button class="dropdown-item"  onclick="event.preventDefault();-->
                <!--      document.getElementById('logout-form').submit();">Logout</button></li>-->
                <!--    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
                <!--        @csrf-->
                <!--    </form>-->
                <!--  </ul>-->
                <!--</div>-->
                <div class="log-auth d-flex">
                    <a class="dropdown-item btn--success" href="/home">{{__('key.login')}}</a>
                    <button class="dropdown-item"  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="main-wrapper">
      <section class="inner-page-hero">
        <img class="back-fit-img" src="back.png">
        <div class="container thb">
          <div class="row">
            <div class="col-lg-10">
              <h2 class="page-title">
                {{__('key.home1')}} <font style="color: #009273"> {{__('key.home2')}}</font>
              </h2>
              <p class="thp">{{__('key.home3')}}</p>
              <ul class="page-list">
                <li>
                  <a href="/search" class="btn btn-sm btn--success w-100 home-btn">{{__('key.search')}}</a>
                </li>
                <li>
                  <a href="/add" class="btn btn-sm btn--success w-100 home-btn">{{__('key.elon')}}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-100">
        

        <div class="container">
          <div class="row">
            <h2 class="page-title text-center pb-5 pt-2 about-us">{{__('key.about_us')}}</h2>
           <div class="col-3 col-sm-2 col-lg-1">
            <svg width="87" height="88" viewBox="0 0 87 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M25.1427 17.9474V77H17.959V11H39.51V17.9474H25.1427Z" fill="#009273"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.918 8.55824C33.9343 8.55824 32.3262 10.1664 32.3262 12.1501V75.8513C32.3262 77.8351 33.9343 79.4432 35.918 79.4432H64.6527C66.6364 79.4432 68.2445 77.8351 68.2445 75.8514V12.1501C68.2445 10.1664 66.6364 8.55824 64.6527 8.55824H35.918ZM47.2933 42.339C47.2933 45.0911 45.2831 47.3221 42.8035 47.3221C40.3238 47.3221 38.3137 45.0911 38.3137 42.339C38.3137 39.587 40.3238 37.356 42.8035 37.356C45.2831 37.356 47.2933 39.587 47.2933 42.339Z" fill="#009273"/>
            </svg>

           </div>
           <div class="col-9 col-sm-10 col-lg-5">
            <span>{{__('key.about1')}}</span>
           </div>
           <div class="col-3 col-sm-2 col-lg-1 content-home" >
            <svg width="86" height="92" viewBox="0 0 86 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M41.3204 77.3327C34.0557 70.4384 17.9165 53.6177 17.9165 40.25C17.9165 23 28.6665 11.5 44.7915 11.5C60.9165 11.5 71.6665 25.875 71.6665 40.25C71.6665 51.4704 55.2927 69.6973 48.1062 77.1567C46.2528 79.0805 43.2581 79.1716 41.3204 77.3327ZM53.7496 36.4167C53.7496 41.7094 49.7388 46 44.7913 46C39.8437 46 35.8329 41.7094 35.8329 36.4167C35.8329 31.1239 39.8437 26.8333 44.7913 26.8333C49.7388 26.8333 53.7496 31.1239 53.7496 36.4167Z" fill="#009273"/>
            </svg>
           </div>
           <div class="col-9 col-sm-10 col-lg-5 content-home"  >
            <span>{{__('key.about2')}}</span>
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
