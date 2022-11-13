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
            <svg width="70" height="70" viewBox="0 0 490 490" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_462_1165)">
<path d="M245 0C109.9 0 0 109.9 0 245C0 380.1 109.9 490 245 490C380.1 490 490 380.1 490 245C490 109.9 380.1 0 245 0ZM245 435C140.2 435 55 349.8 55 245C55 140.2 140.2 55 245 55C349.8 55 435 140.2 435 245C435 349.8 349.8 435 245 435Z" fill="#009273"/>
<path d="M245 105.1C167.9 105.1 105.1 167.9 105.1 245C105.1 322.1 167.9 384.9 245 384.9C322.1 384.9 384.9 322.1 384.9 245C384.9 167.9 322.1 105.1 245 105.1ZM245 329.9C198.2 329.9 160.1 291.8 160.1 245C160.1 198.2 198.2 160.1 245 160.1C291.8 160.1 329.9 198.2 329.9 245C329.9 291.8 291.8 329.9 245 329.9Z" fill="#009273"/>
<path d="M245 281.7C265.269 281.7 281.7 265.269 281.7 245C281.7 224.731 265.269 208.3 245 208.3C224.731 208.3 208.3 224.731 208.3 245C208.3 265.269 224.731 281.7 245 281.7Z" fill="#009273"/>
</g>
<defs>
<clipPath id="clip0_462_1165">
<rect width="490" height="490" fill="white"/>
</clipPath>
</defs>
</svg>

           </div>
           <div class="col-9 col-sm-10 col-lg-5 content-home"  >
            <span>{{__('key.about2')}}</span>
           </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
        <div class="row gy-4 card-view-area grid-view">
         <div class="col-xl-3 col-6 col-md-6 card-view">
          <a href="/elon/1" style="color:#373e4a; width:100%;">
            <div class="property-card">
              <div class="property-card__thumb1" style="overflow: hidden; height: 200px">
                <div id="carouselExampleControls1" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" >
                  <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                      <img src="https://sturent.uz/rasmlar/2/1667542683photo_2022-11-04_11-17-01.jpg" class="d-block w-100" alt="image" style="object-fit: cover; width:100%; height:200px;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667542683photo_2022-11-04_11-17-25.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667542683photo_2022-11-04_11-17-29.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                          </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                                <div class="property-status"> Yigitlar uchun</div>
                              </div>
             
              <div class="property-card__content pt-0 pb-0">
                <div class="property-card__details">
                  <h4 class=" mt-2 d-none">
                   
                  </h4>
                    <h4 class="title mb-2" style="margin-bottom: -4px; font-size: 18px;">
                                                  Ko'p qavatli bino
                                             </h4>
               
                  <p class="location mb-3" style="color:#373e4a;">
                    <svg style="margin-top: -4px;" width="14" height="15" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41538 12.1015C3.83204 10.7297 0.797607 7.79339 0.797607 5.4375C0.797607 2.25 3.01951 0.125 6.35237 0.125C9.68523 0.125 11.9071 2.78125 11.9071 5.4375C11.9071 7.41634 8.8243 10.5745 7.25191 12.0567C6.73553 12.5434 5.9517 12.5662 5.41538 12.1015ZM8.20396 4.72917C8.20396 5.70717 7.37498 6.5 6.35237 6.5C5.32977 6.5 4.50078 5.70717 4.50078 4.72917C4.50078 3.75116 5.32977 2.95833 6.35237 2.95833C7.37498 2.95833 8.20396 3.75116 8.20396 4.72917Z" fill="#009273"></path>
                    </svg>
                    Jizzax Zargarlik
                  </p>
                </div>
                <ul class="row">

                  <li class="col-12" style="color:#373e4a; font-size: 22px; line-height: 20px; letter-spacing: 0.6px; margin-top: 2px;">
                    <!--<i style="color: #009273" class="las la-money-bill"></i>--><span style="padding-bottom: 18px;"><b style="color: #009273; padding">300000</b>so‘m</span>
                  </li>
                </ul>
              </div>
            </div>
          </a>

          </div>

                    <div class="col-xl-3 col-6 col-md-6 card-view">
          <a href="/elon/4" style="color:#373e4a; width:100%;">
            <div class="property-card">
              <div class="property-card__thumb1" style="overflow: hidden; height: 200px">
                <div id="carouselExampleControls4" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" >
                  <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                      <img src="https://sturent.uz/rasmlar/2/1667543303photo_2022-10-30_22-21-16.jpg" class="d-block w-100" alt="image" style="object-fit: cover; width:100%; height:200px;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667543303photo_2022-10-31_10-16-50.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667543303photo_2022-10-30_22-21-24.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667543303photo_2022-10-30_16-12-44.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                          </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                                <div class="property-status"> Qizlar uchun</div>
                              </div>
             
              <div class="property-card__content pt-0 pb-0">
                <div class="property-card__details">
                  <h4 class=" mt-2 d-none">
                   300ming kommunaldan tawqari
                  </h4>
                    <h4 class="title mb-2" style="margin-bottom: -4px; font-size: 18px;">
                                                  Ko'p qavatli bino
                                             </h4>
               
                  <p class="location mb-3" style="color:#373e4a;">
                    <svg style="margin-top: -4px;" width="14" height="15" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41538 12.1015C3.83204 10.7297 0.797607 7.79339 0.797607 5.4375C0.797607 2.25 3.01951 0.125 6.35237 0.125C9.68523 0.125 11.9071 2.78125 11.9071 5.4375C11.9071 7.41634 8.8243 10.5745 7.25191 12.0567C6.73553 12.5434 5.9517 12.5662 5.41538 12.1015ZM8.20396 4.72917C8.20396 5.70717 7.37498 6.5 6.35237 6.5C5.32977 6.5 4.50078 5.70717 4.50078 4.72917C4.50078 3.75116 5.32977 2.95833 6.35237 2.95833C7.37498 2.95833 8.20396 3.75116 8.20396 4.72917Z" fill="#009273"></path>
                    </svg>
                    Jizzax Sayiljoyi
                  </p>
                </div>
                <ul class="row">

                  <li class="col-12" style="color:#373e4a; font-size: 22px; line-height: 20px; letter-spacing: 0.6px; margin-top: 2px;">
                    <!--<i style="color: #009273" class="las la-money-bill"></i>--><span style="padding-bottom: 18px;"><b style="color: #009273; padding">300000</b>so‘m</span>
                  </li>
                </ul>
              </div>
            </div>
          </a>

          </div>

                    <div class="col-xl-3 col-6 col-md-6 card-view">
          <a href="/elon/5" style="color:#373e4a; width:100%;">
            <div class="property-card">
              <div class="property-card__thumb1" style="overflow: hidden; height: 200px">
                <div id="carouselExampleControls5" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" >
                  <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                      <img src="https://sturent.uz/rasmlar/1/1667544555photo_2022-10-17_19-00-19.jpg" class="d-block w-100" alt="image" style="object-fit: cover; width:100%; height:200px;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/1/1667544555photo_2022-10-17_19-00-20.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                          </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                                <div class="property-status"> Yigitlar uchun</div>
                              </div>
             
              <div class="property-card__content pt-0 pb-0">
                <div class="property-card__details">
                  <h4 class=" mt-2 d-none">
                   Ielts си бор булса текин жойлаштираман. хакикий укиман деган абитурейт учун молчалланган хоналар.
                  </h4>
                    <h4 class="title mb-2" style="margin-bottom: -4px; font-size: 18px;">
                                                  Hovli
                                             </h4>
               
                  <p class="location mb-3" style="color:#373e4a;">
                    <svg style="margin-top: -4px;" width="14" height="15" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41538 12.1015C3.83204 10.7297 0.797607 7.79339 0.797607 5.4375C0.797607 2.25 3.01951 0.125 6.35237 0.125C9.68523 0.125 11.9071 2.78125 11.9071 5.4375C11.9071 7.41634 8.8243 10.5745 7.25191 12.0567C6.73553 12.5434 5.9517 12.5662 5.41538 12.1015ZM8.20396 4.72917C8.20396 5.70717 7.37498 6.5 6.35237 6.5C5.32977 6.5 4.50078 5.70717 4.50078 4.72917C4.50078 3.75116 5.32977 2.95833 6.35237 2.95833C7.37498 2.95833 8.20396 3.75116 8.20396 4.72917Z" fill="#009273"></path>
                    </svg>
                    Jizzax Olmazor
                  </p>
                </div>
                <ul class="row">

                  <li class="col-12" style="color:#373e4a; font-size: 22px; line-height: 20px; letter-spacing: 0.6px; margin-top: 2px;">
                    <!--<i style="color: #009273" class="las la-money-bill"></i>--><span style="padding-bottom: 18px;"><b style="color: #009273; padding">300000</b>so‘m</span>
                  </li>
                </ul>
              </div>
            </div>
          </a>

          </div>

                    <div class="col-xl-3 col-6 col-md-6 card-view">
          <a href="/elon/7" style="color:#373e4a; width:100%;">
            <div class="property-card">
              <div class="property-card__thumb1" style="overflow: hidden; height: 200px">
                <div id="carouselExampleControls7" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" >
                  <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                      <img src="https://sturent.uz/rasmlar/2/1667543902photo_2022-10-24_16-52-24.jpg" class="d-block w-100" alt="image" style="object-fit: cover; width:100%; height:200px;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667543902photo_2022-10-24_16-52-24 (2).jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                                                <div class="carousel-item ">
                      <img src="https://sturent.uz/rasmlar/2/1667543902photo_2022-10-24_16-52-22.jpg" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                                                          </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                                <div class="property-status"> Yigitlar uchun</div>
                              </div>
             
              <div class="property-card__content pt-0 pb-0">
                <div class="property-card__details">
                  <h4 class=" mt-2 d-none">
                   
                  </h4>
                    <h4 class="title mb-2" style="margin-bottom: -4px; font-size: 18px;">
                                                  Ko'p qavatli bino
                                             </h4>
               
                  <p class="location mb-3" style="color:#373e4a;">
                    <svg style="margin-top: -4px;" width="14" height="15" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41538 12.1015C3.83204 10.7297 0.797607 7.79339 0.797607 5.4375C0.797607 2.25 3.01951 0.125 6.35237 0.125C9.68523 0.125 11.9071 2.78125 11.9071 5.4375C11.9071 7.41634 8.8243 10.5745 7.25191 12.0567C6.73553 12.5434 5.9517 12.5662 5.41538 12.1015ZM8.20396 4.72917C8.20396 5.70717 7.37498 6.5 6.35237 6.5C5.32977 6.5 4.50078 5.70717 4.50078 4.72917C4.50078 3.75116 5.32977 2.95833 6.35237 2.95833C7.37498 2.95833 8.20396 3.75116 8.20396 4.72917Z" fill="#009273"></path>
                    </svg>
                    Jizzax Olmazor
                  </p>
                </div>
                <ul class="row">

                  <li class="col-12" style="color:#373e4a; font-size: 22px; line-height: 20px; letter-spacing: 0.6px; margin-top: 2px;">
                    <!--<i style="color: #009273" class="las la-money-bill"></i>--><span style="padding-bottom: 18px;"><b style="color: #009273; padding">250000</b>so‘m</span>
                  </li>
                </ul>
              </div>
            </div>
          </a>

          </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <a href="/search" class="btn-more mt-3 mb-3" style="color: #009273; padding: 5px 17px; background-color: #fff; font-weight: 600; border: #009273 2px solid; border-radius: 12px; float: right;">
                Ko'proq...
            </a>
        </div>
    </div>
    
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-6 mb-0 text-muted">© 2022 StuRent</p>

    <div class="col-md-6 d-flex align-items-center justify-content-endcen-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="/" class="link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
        </a>
        <a href="/" class="mx-4 link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
        </a>
         <a href="/" class="link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg>
        </a>
    </div>

  </footer>
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
