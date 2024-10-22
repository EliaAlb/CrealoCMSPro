<!DOCTYPE html>
<html data-wf-page="66cc87062bcd9d178ab9f299" data-wf-site="66cc87062bcd9d178ab9f11c" lang="de">
<head>
  <meta charset="utf-8">
  <title>Login - Crealo CMS Pro</title>
  <meta content="Dashly X is our premium dashboard Webflow Template &amp; UI Kit with 40+ pages and 60+ views. It includes everything you will need develop the front-end views of your web app or dashboard using Webflow." name="description">
  <meta content="Utility Pages - Log In - Dashly X - Webflow Ecommerce website template" property="og:title">
  <meta content="Dashly X is our premium dashboard Webflow Template &amp; UI Kit with 40+ pages and 60+ views. It includes everything you will need develop the front-end views of your web app or dashboard using Webflow." property="og:description">
  <meta content="Utility Pages - Log In - Dashly X - Webflow Ecommerce website template" property="twitter:title">
  <meta content="Dashly X is our premium dashboard Webflow Template &amp; UI Kit with 40+ pages and 60+ views. It includes everything you will need develop the front-end views of your web app or dashboard using Webflow." property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/quicksave.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:regular,500,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
  <style>
  .w-webflow-badge{
  display:none !important;
  }
 </style>
</head>
<body>
  <div data-w-id="42cec775-e6ca-8762-cd34-1c5d55bb5ed0" style="opacity:0" class="page-wrapper">
    <div data-w-id="27d30c7f-b701-adb6-622d-3e7968cd8f44" class="top-bar-simple">
      <div class="container-default w-container">
        <div class="flex-horizontal">
          <a href="{{ route('index') }}" class="top-bar-simple-logo w-inline-block"><img src="{{ asset('images/dashly-webflow-template-logo.svg') }}" loading="eager" alt="Dashly X Webflow Template - Logo"></a>
        </div>
      </div>
    </div>
    <div class="dashboard-main-content utility-page">
      <div class="container-default w-container">
        <div data-w-id="42cec775-e6ca-8762-cd34-1c5d55bb5ed4" style="opacity:0" class="module utility-page-form">
          <div class="inner-container _444px text-center">
            <div class="inner-container _80px-mbl center"><img src="{{ asset('images/log-in-icon-dashboardly-webflow-template.svg') }}" loading="eager" alt="" class="mg-bottom-20px"></div>
            <div class="heading-h3-size mg-bottom-8px">Welcome back</div>
            <p class="mg-bottom-24px">Lorem ipsum dolor sit amet consectetur adipiscing elit sedol do eiusmod tempor consectur.</p>
            <div class="form min-h-188px mg-bottom-24px w-form">
              <form id="email-form" name="email-form" data-name="Email Form" action="{{ route('login') }}" method="POST" data-wf-page-id="66cc87062bcd9d178ab9f299" data-wf-element-id="42cec775-e6ca-8762-cd34-1c5d55bb5edd">
                @csrf
                <input class="input mg-bottom-16px w-input" maxlength="256" name="email" data-name="Email" placeholder="Email address" type="email" id="Email-3" required="">
                <input class="input mg-bottom-16px w-input" maxlength="256" name="password" data-name="Password" placeholder="Password" type="password" id="Password" required="">
                <input type="submit" data-wait="Please wait..." class="btn-primary width-100 w-button" value="Sign In">
              </form>
              <div class="success-message utility-page-success-message w-form-done">
                <div>Welcome!</div>
              </div>
              <div class="error-message w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="mg-bottom-24px">
              <div class="grid-2-columns _2-col-mbl gap-0">
                <div id="w-node-cba12da5-978a-4038-820c-6951096da839-8ab9f299" class="flex align-center text-left">
                  <div class="mg-bottom-0 mg-right-8px w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="66cc87062bcd9d178ab9f299" data-wf-element-id="77b95bf4-3539-d1f4-01d4-a66d2f1842d1">
                      <label class="w-checkbox checkbox-field-wrapper small">
                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox w--redirected-checked"></div>
                        <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" checked="">
                        <span class="hidden-on-desktop w-form-label" for="checkbox-3">Placeholder</span>
                      </label></form>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                  <div class="text-200 medium color-neutral-700">Remember account</div>
                </div>
                <a id="w-node-_1f903f57-7a6c-b2f2-38ba-e004e972201f-8ab9f299" data-w-id="1f903f57-7a6c-b2f2-38ba-e004e972201f" href="{{ route('reset-password') }}" class="text-decoration-none color-transition-none text-right w-inline-block">
                  <div id="w-node-_4debbe78-d89c-ac7d-acb5-b37b4d21542f-8ab9f299" class="text-200 medium color-neutral-800">Forgot your password?</div>
                </a>
              </div>
            </div>
            <div class="grid-1-column gap-row-12px mg-bottom-24px">
              <a href="https://www.google.com/" target="_blank" class="btn-secondary sign-in-button w-inline-block">
                <div class="flex-horizontal"><img src="{{ asset('images/google-button-icon-dashboardly-webflow-template.svg') }}" loading="eager" alt="Google - Dashly X Webflow Template" class="mg-right-8px">
                  <div class="text-200 medium">Sign in with Google</div>
                </div>
              </a>
              <a href="https://www.google.com/" target="_blank" class="btn-secondary sign-in-button w-inline-block">
                <div class="flex-horizontal"><img src="{{ asset('images/facebook-button-icon-dashboardly-webflow-template.svg') }}" loading="eager" alt="Facebook - Dashly X Webflow Template" class="mg-right-8px">
                  <div class="text-200 medium">Sign in with Facebook</div>
                </div>
              </a>
            </div>
            <div class="flex-horizontal flex-wrap">
              <div class="text-200 medium color-neutral-800">Don’t have an account? </div>
              <a href="{{ route('sign-up') }}" class="text-200">Create an account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-w-id="297d8ad8-db4a-3ae2-197c-704798a15c49" class="dashboard-footer-wrapper">
      <div class="container-default w-container">
        <div class="dashboard-footer-inner-wrapper">
          <div>Copyright © QuickSave. All rights reserved | Developed by Crealo</div>
        </div>
      </div>
    </div>
  </div>
  <a data-w-id="fa1d8c48-251b-031e-88b3-f55b77ac847d" href="https://brixtemplates.com/more-webflow-templates-b" target="_blank" class="more-templates-badge-wrapper w-inline-block">
    <div class="more-templates-logo-wrapper"><img src="{{ asset('images/webflow-logo_1webflow-logo.png') }}" loading="lazy" alt="" class="more-templates-logo"><img src="{{ asset('images/webflow-logo_1webflow-logo.png') }}" loading="lazy" alt="" class="more-templates-logo blur"></div>
    <div>
      <p class="more-templates-p">Explore our collection of 200+ <span class="more-webflow-templates-sub">Premium Webflow Templates</span></p>
    </div>
    <div class="more-templates-lottie" data-w-id="fa1d8c48-251b-031e-88b3-f55b77ac8486" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e30f06b05f79621331ddc25/65dcea068e8dfd14eaed7b6f_Notification%20Dot.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2.5" data-duration="0"></div>
  </a>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66cc87062bcd9d178ab9f11c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>