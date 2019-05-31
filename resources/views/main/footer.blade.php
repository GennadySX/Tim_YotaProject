@section('footer')

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                    <!-- Footer Intro -->
                    <div class="footer_intro">

                        <!-- Logo -->
                        <div class="logo footer_logo">
                            <a href="#">Ran<span>go</span></a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>

                        <!-- Social -->
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <!-- Copyright -->
                        <div class="footer_cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

                    </div>

                </div>

                <!-- Footer Services -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Services</div>
                        <ul>
                            <li><a href="#">Social media</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                    </div>

                    <div class="footer_col">
                        <div class="footer_col_title">Aditionals</div>
                        <ul>
                            <li><a href="#">Social media</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer Menu -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Menu</div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer About -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">About us</div>
                        <ul>
                            <li><a href="#">The team</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer Community -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Community</div>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Q&A</a></li>
                            <li><a href="#">Purposes</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col">
                    <!-- Copyright -->
                    <div class="footer_cr_2">2017 All rights reserved</div>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="{{asset('tim/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('tim/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('tim/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('tim/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('tim/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('tim/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('tim/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('tim/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('tim/js/custom.js')}}"></script>

    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('tim/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('tim/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/js/main.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.enter-btn').hover(function () {
                $(this).css('background', 'white');
                $(this).find('a').css('color','#22123D');
            });
            $('.enter-btn').mouseout(function () {
                $(this).css('background', 'transparent');
                $(this).find('a').css('color','white');
            });
            $('.enter-btn a').hover(function () {
                $(this).parent().css('background', 'white');
                $(this).css('color','#22123D');
            });
            $('.enter-btn a').mouseout(function () {
                $(this).parent().css('background', 'transparent');
                $(this).css('color','white');
            });

            $(".signInLink").click(function () {
                $('#signUp').modal('hide');
                $('#signIn').modal('focus');
            });

            $(".signUpLink").click(function () {
                $('#signIn').modal('hide');
                $('#signIn').modal('focus');
            });



        });
    </script>


    </body>

    </html>

@endsection
