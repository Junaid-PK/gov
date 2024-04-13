
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Government of Dominica | eImmigration Form</title>
    <meta name="description" content="Wizard examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('Content/assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->

    <link href="{{ asset('Content/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Content/assets/plugins/global/flaticon_kemcode.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Content/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Content/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('Content/assets/media/logos/favicon.ico') }}" />
</head>
<style>
    @@font-face {
        font-family: 'Inter';
        src: url('../Content/fonts/Inter/Inter-Regular.ttf');
    }

    .classname {
        font-family: 'Dense';
    }

    .copy {

        font-family: Inter;
        font-size: 16px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 0.96px;
        text-align: center;
        color: #fff;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
    }

    .footer {
        clear: both;
        position: relative;
        height: 100px;

    }
    .smcontainer {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .facebook-1 {
        width: 30px;
        height: 30px;
        margin: 0 15px 0 0;
        object-fit: contain;
    }
    .twitter-1 {
        width: 30px;
        height: 30px;
        margin: 0 15px;
        object-fit: contain;
    }
    .instagram {
        width: 30px;
        height: 30px;
        margin: 0 0 0 15px;
        object-fit: contain;
    }
    .container {
        display: grid;
        grid-template-columns: 5% 50% 20% 20%;
        grid-gap: 10px;
        align-items: center; /* aligns the items vertically in the center of each column */
    }
    .androidL {
/*        width: 116.1px;
        height: 39.6px;*/
        margin: 0 0 0.4px 14.7px;
        object-fit: contain;
    }
    .appleL {
/*        width: 138.2px;
        height: 39.8px;*/
        margin: 0.2px 14.7px 0 0;
        object-fit: contain;
    }
    .The-Official-Tourism {
        width: 313px;
        height: 34px;
        margin:  1px 19px 3px 19px;
        font-family: Inter;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 0.84px;
        color: #fff;
    }
    .imgx1024 {
        padding-top:15px;
        width: 60px;
        height: 60px;
        margin: 2px 19px 0 0;
        object-fit: contain;
    }

    .Download-Explore-Dom {
        width: 300px;
        height: 24px;
        margin: 0 0 0 0;
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 1.2px;
        color: #fff;
    }
    .appBox {
        width: 731px;
        height: 80px;
        margin: 56px 124px 91px 125px;
        padding: 5px 29.9px 23px 21px;
        border-radius: 10px;
        border: solid 1px #a1cf5f;
        background-color: rgba(0, 0, 0, 0.4);
    }
    .You-can-complete-the {
        width: 714px;
        height: 60px;
        margin: 31px 133px 0;
        font-family: Inter;
        font-size: 12px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.67;
        letter-spacing: 0.72px;
        text-align: center;
        color: #fff;
    }
    .button4 {
        border-radius: 28px;
    }
    .button {

        height:40px;
        background-color: #3aaf4a;
        border: none;
        color: white;
        /*padding: 20px;*/
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
    }

    .Start-Now {
        width: 98px;
        height: 21px;
        font-family: Inter;
        font-size: 18px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 1.08px;
        text-align: center;
        color: #fff;
    }
    .RectangleButton {
        width: 204px;
        height: 56px;
        margin: 21px 388px 31px;
        padding: 18px 53px 17px;
        border-radius: 28px;
        background-color: #3aaf4a;
    }

    .You-are-required-to {
        width: 698px;
        height: 40px;
        margin: 12px 141px 0;
        font-family: Inter;
        font-size: 16px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 0.96px;
        text-align: center;
        color: #fff;
    }


    .Welcome-to-Dominica {
        width: 980px;
        height: 120px;
        margin: 0 0 12px;
        font-family: Inter;
        font-size: 50px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 3px;
        text-align: center;
        color: #fff;
    }


    .The-Nature-Island {
        width: 282px;
        height: 36px;
        /*        margin: 1px 349px 21px;*/
        margin: 0 240px 1px;
        font-family: Inter;
        font-size: 30px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: 1.8px;
        text-align: center;
        color: #a1cf5f;
        display: grid;
        place-items: center;
    }
    .grid-container {
        display: grid;
        place-items: center;
        /*
        margin: 0 240px 1px;
        position: relative;
        */
        top: 130px;
    }
    .logo {
        /* width: 100%;
        display: block;
        margin: 0 auto;*/
        /*        height: 117px;
        margin: 0 240px 1px; */
        object-fit: contain;

    }

    .my-class {
        background-image:@Url.Content("~/Content/bkgroundImg.png") ;
        background-size: cover;
        background-repeat: no-repeat;
    }

</style>
<!--end::Head-->

                        <body style="background-image:Url({{ asset('Content/bkgroundImg.png') }});background-repeat : no-repeat; background-size:cover">
                            <div class="Rectangle">
                                <div class="grid-container">
                                    <img src="{{ asset('Content/logo.png') }}" class="logo" width="40%" style="padding-bottom:2px">
                                    <span class="The-Nature-Island" style="padding-bottom:50px">
                                        The Nature Island
                                    </span>
                                    <span class="Welcome-to-Dominica" style="padding-bottom:10px">
                                        Welcome to Dominica Online Customs and Immigration Portal
                                    </span>
                                    <span class="You-are-required-to" style="margin-bottom:25px">
                                        You are required to complete the online Immigration and Customs Travel Form, which will be available 72 hours prior to your arrival in Dominica.
                                    </span>
                                    <button class="button button4" style="padding-left:67px;padding-right:67px;" type="button" onclick="location.href='{{ route('arrive.view') }}'">Start Now</button>
                                    <span class="You-can-complete-the">
                                        You can complete the form at a time and place convenient for you. Once the form is completed, the Immigration and Customs receipt, will be sent to the email that you provided in the form. Please save the receipts to your mobile device or print, for presentation to Immigration and Customs, upon arrival.
                                    </span>
                                    <div class="appBox">
                                        <div class="container">
                                            <img src="{{ asset('Content/exploreDomLogo.png') }}" class="imgx1024" />
                                            <span class="The-Official-Tourism"><p class="Download-Explore-Dom">Download Explore Dominica</p>The Official Tourism App of Dominica to Start your Adventure Now!</span>
                                            <img src="{{ asset('Content/apple.png') }}" class="appleL" width="150px">
                                            <img src="{{ asset('Content/google.png') }}" class="androidL" width="155px">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="footer" style="padding-top:25px">
                                <div class="smcontainer">
                                    <img src="{{ asset('Content/facebook-1.svg') }}" class="facebook-1">
                                    <img src="{{ asset('Content/twitter-1.svg') }}" class="twitter-1">
                                    <img src="{{ asset('Content/instagram.svg') }}" class="instagram">
                                </div>
                                <div class="footer">
                                    <span class="copy" style="padding-top:50px">
                                        © 2023 Copyright: Dominica | All rights reserved.
                                    </span>
                                </div>
                            </div>
                        </body>

    <!--begin::Quick Actions Panel-->
    <!--end::Quick Actions Panel-->
    <!-- begin::User Panel-->
    <!-- end::User Panel-->
    <!--begin::Quick Panel-->
    <!--end::Quick Panel-->
    <!--begin::Chat Panel-->
    <!--end::Chat Panel-->
    <!--begin::Scrolltop-->
    <!--end::Scrolltop-->
    <!--begin::Sticky Toolbar-->
    <!--end::Sticky Toolbar-->
    <!--begin::Demo Panel-->
    <!--end::Demo Panel-->
    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('Content/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('Content/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('Content/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('Content/assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
    <script src="{{ asset('Content/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('Content/assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js') }}"></script>

    <!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
