<footer id="page-footer" class="bg-inverse" style="margin-top: 30px">
    <div class="content content-boxed">
        <!-- Footer Navigation -->
        <div class="row push-30-t items-push-2x">
            <div class="col-sm-4">
                <h3 class="h5 font-w600 text-uppercase push-20">Company</h3>
                <ul class="list list-simple-mini font-s13">
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/about') }}">About Us</a>
                    </li>
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3 class="h5 font-w600 text-uppercase push-20">Support</h3>
                <ul class="list list-simple-mini font-s13">
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/login') }}">Login</a>
                    </li>
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/register') }}">Sign Up</a>
                    </li>
                    <li>
                        <a class="font-w600" href="{{ URL::asset('/contact') }}">Support Center</a>
                    </li>

                    <li>
                        <a class="font-w600" href="{{ URL::asset('/faq') }}">Faq</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3 class="h5 font-w600 text-uppercase push-20">Get In Touch</h3>

                <div style="color:white">
                    <p>  <strong>ADDTOWEALTH .</strong><br>
                   322 County 147 Hwy E, <br>
                    Laurel Hill, FL, 44246<br>
                    <abbr title="Phone">P:</abbr>(460) 034-7648</p>
                </div>
                <div class="font-s13" style="color:white">
                    <i class="si si-envelope-open" ></i> support@addtowealth.com
                </div>
            </div>
        </div>
        <!-- END Footer Navigation -->

        <!-- Copyright Info -->
        <div class="font-s12 push-20 clearfix">
            <hr class="remove-margin-t">
            <div class="pull-right">
                
            </div>
            <div class="pull-left">
                <a class="" href="#" target="_blank">{{ config('app.name') }}</a> &copy; 2017
            </div>
        </div>
        <!-- END Copyright Info -->
    </div>
</footer>