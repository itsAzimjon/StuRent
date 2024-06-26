<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/estatelab/admin by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Cho, 19 Okt 2022 06:55:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap.min.css">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-toggle.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="assets/admin/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="assets/admin/css/line-awesome.min.css">

    
    <!-- custom select box css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/nice-select.css">
    <!-- code preview css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/prism.css">
    <!-- select 2 css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/select2.min.css">
    <!-- jvectormap css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/jquery-jvectormap-2.0.5.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/datepicker.min.css">
    <!-- timepicky for time picker css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/jquery-timepicky.css">
    <!-- bootstrap-clockpicker css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-clockpicker.min.css">
    <!-- bootstrap-pincode css -->
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-pincode-input.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="assets/admin/css/app.css">


    </head>
<body>
    <div class="page-wrapper default-version">
        <div class="form-area bg_img" style="background: white;">
            <div class="form-wrapper">  
                <button class="backBtn d-lg-none" style="margin: -2px 0 0px -164px; position:absolute; z-index: 999; background: #e3ebf1; padding: .2em; border-radius: 12px; " onclick="history.back()">
                  <svg width="29" height="29" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
                <h4 class="logo-text mb-15">Hush kelibsiz <strong></strong></h4>
              
                <p>Kirish uchun o'z malumotlaringizni kiriting</p>
                <form action="{{ route('login') }}" method="POST" class="cmn-form mt-30">
                    @csrf
                    <div class="form-group">
                        <label for="email">Telefon raqam</label>
                        <p style="position: absolute; top: 38px; left: 19px;}">+998</p>
                        <input style="padding: 10px 56px;" type="number" maxlength="9" name="email" class="form-control b-radius--capsule" id="username" placeholder="Telefon">
                        <i class="las la-user input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label for="pass">Parol</label>
                        <input type="password" name="password" class="form-control b-radius--capsule" id="pass" placeholder="Parol">
                        <i class="las la-lock input-icon"></i>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <a href="admin/password/reset.html" class="text-muted text--small"><i class="las la-lock"></i>Parolni unutdingizmi</a>
                        <a style="color: #009273;" href="/register" class="text--small"><i class="las la-phone"></i>Ro'yxatdan o‘tish</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="submit-btn mt-25 b-radius--capsule">Kirish <i class="las la-sign-in-alt"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- login-area end -->
    </div>



<!-- jQuery library -->
<script src="assets/admin/js/vendor/jquery-3.6.0.min.js"></script>
<!-- bootstrap js -->
<script src="assets/admin/js/vendor/bootstrap.bundle.min.js"></script>
<!-- bootstrap-toggle js -->
<script src="assets/admin/js/vendor/bootstrap-toggle.min.js"></script>

<!-- slimscroll js for custom scrollbar -->
<script src="assets/admin/js/vendor/jquery.slimscroll.min.js"></script>
<!-- custom select box js -->
<script src="assets/admin/js/vendor/jquery.nice-select.min.js"></script>


<link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
    @error('email')
    notify('error',"Telefon xato");
    @enderror
    
    @error('password')
    notify('error',"Parol Xato");
    @enderror
</script>

<script src="assets/admin/js/nicEdit.js"></script>

<!-- code preview js -->
<script src="assets/admin/js/vendor/prism.js"></script>
<!-- seldct 2 js -->
<script src="assets/admin/js/vendor/select2.min.js"></script>
<!-- main js -->
<script src="assets/admin/js/app.js"></script>


<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);
</script>



</body>

<!-- Mirrored from script.viserlab.com/estatelab/admin by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Cho, 19 Okt 2022 06:56:13 GMT -->
</html>
