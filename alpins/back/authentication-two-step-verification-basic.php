<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from htmlstream.com/front-dashboard/authentication-two-step-verification-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:58:16 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Basic 2-step Verification | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  </head>

  <body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
      <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
        <!-- SVG Bottom Shape -->
        <figure class="position-absolute right-0 bottom-0 left-0">
          <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
            <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
          </svg>
        </figure>
        <!-- End SVG Bottom Shape -->
      </div>

      <!-- Content -->
      <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="index.html">
          <img class="z-index-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
        </a>

        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <!-- Card -->
            <div class="card card-lg mb-5">
              <div class="card-body text-center">
                <div class="mb-4">
                  <img class="avatar avatar-xxl avatar-4by3" src="assets/svg/illustrations/unlock.svg" alt="Image Description">
                </div>

                <div class="mb-5">
                  <h1 class="display-4">2-step Verification</h1>

                  <p class="mb-0">We sent a verification code to your email.</p>

                  <p>Enter the code from the email in the field below.</p>
                </div>

                <div class="row gx-2 gx-sm-3">
                  <div class="col">
                    <!-- Form Group -->
                    <div class="form-group">
                      <input type="text" class="js-masked-input form-control form-control-single-number" name="code1" id="twoStepVerificationSrCodeInput1" placeholder="" aria-label="" maxlength="1" autocomplete="off" autocapitalize="off" spellcheck="false" autofocus
                             data-hs-mask-options='{
                               "template": "0"
                             }'>
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col">
                    <!-- Form Group -->
                    <div class="form-group">
                      <input type="text" class="js-masked-input form-control form-control-single-number" name="code2" id="twoStepVerificationSrCodeInput2" placeholder="" aria-label="" maxlength="1" autocomplete="off" autocapitalize="off" spellcheck="false"
                             data-hs-mask-options='{
                               "template": "0"
                             }'>
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col">
                    <!-- Form Group -->
                    <div class="form-group">
                      <input type="text" class="js-masked-input form-control form-control-single-number" name="code3" id="twoStepVerificationSrCodeInput3" placeholder="" aria-label="" maxlength="1" autocomplete="off" autocapitalize="off" spellcheck="false"
                             data-hs-mask-options='{
                               "template": "0"
                             }'>
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col">
                    <!-- Form Group -->
                    <div class="form-group">
                      <input type="text" class="js-masked-input form-control form-control-single-number" name="code4" id="twoStepVerificationSrCodeInput4" placeholder="" aria-label="" maxlength="1" autocomplete="off" autocapitalize="off" spellcheck="false"
                             data-hs-mask-options='{
                               "template": "0"
                             }'>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <button type="submit" class="btn btn-lg btn-block btn-primary">Verify my account</button>

                <div class="text-center mt-3">
                  <p>Haven't received it? <a href="#">Resend a new code.</a></p>
                </div>
              </div>
            </div>
            <!-- End Card -->

            <!-- Footer -->
            <div class="text-center">
              <small class="text-cap mb-4">Trusted by the world's best teams</small>

              <div class="w-85 mx-auto">
                <div class="row justify-content-between">
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                  </div>
                  <div class="col">
                    <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
                  </div>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of masked input
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/authentication-two-step-verification-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:58:16 GMT -->
</html>