        <!-- Footer Start -->
        <div class="footer-section section">
            <div class="container">

                <!-- Footer Widget Wrapper Start -->
                <div class="footer-widget-wrapper">
                    <div class="row justify-content-evenly">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <a class="footer-logo" href="{{ url('/') }}">
                                    <img src="{{ asset('uploads/generalsettings') }}/{{ generalsettings()->logo }}" alt="Logo">
                                </a>

                                <div class="widget-info">
                                    <p><i class="flaticon-phone-call"></i> <a href="tel:+91458654528">{{ generalsettings()->phone }}</a></p>
                                    <p><i class="flaticon-placeholder"></i> <a href="mailto:info@example.com">{{ generalsettings()->email }}</a></p>
                                    <p><i class="flaticon-open-mail"></i> <span>{{ generalsettings()->address }}</span></p>

                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Links</h4>

                                <div class="widget-link">
                                    <ul class="link">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Wrapper End -->

                <!-- Footer Copyright End -->
                <div class="footer-copyright text-center">
                    <p>&copy; Copyrights 2021 Dgtaltech All rights reserved. </p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top End -->
        <button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
        <!-- Back to Top End -->



    </div>

    <!-- JS
    ============================================ -->
    
    <!-- Jquery JS -->
    <script src="{{ asset('frontend_assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend_assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend_assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/plugins/nice-select2.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/plugins/glightbox.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{ asset('frontend_assets/js/map-script.js') }}"></script>

</body>


</html>