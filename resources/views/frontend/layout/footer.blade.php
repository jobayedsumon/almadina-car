

<!--Call To Action 2 Content Start-->

<!--Call To Action 2 Content End-->
<!--Footer Content Start-->
<section class="tj-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-widget widget">
                    <h3>About Al Madina</h3>
                    <p>Search for will uncover many web sites variables onto of passages of lorem ipsum available but the majority the words all predefined humour to met chunks recently with desktop.</p>
                    <ul class="fsocial-links">
                        <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="http://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="links-widget widget">
                    <h3>Our Policies</h3>
                    <ul class="flinks-list">
                        <li><i class="fas fa-folder"></i><a href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a></li>
                        <li><i class="fas fa-folder"></i><a href="{{ route('page', 'terms-conditions') }}">Terms & Conditions</a></li>
                        <li><i class="fas fa-folder"></i><a href="{{ route('page', 'cancellation') }}">Cancellation</a></li>
                        <li><i class="fas fa-folder"></i><a href="{{ route('page', 'contact-us') }}">Contact Us</a></li>
                        <li><i class="fas fa-folder"></i><a href="{{ route('page', 'about-us') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links-widget widget">
                    <h3>Our Services</h3>
                    <ul class="flinks-list">
                        @forelse(\App\Service::all() as $service)
                            <li><i class="fas fa-folder"></i><a href="{{ route('service', $service->slug) }}">{{ $service->name }}</a></li>
                        @empty
                        @endforelse

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info widget">
                    <h3>Contact Info</h3>
                    <ul class="contact-box">
                        <li>
                            <i class="fas fa-home" aria-hidden="true"></i>   1/5, East Bashabo, Shobujbag, Dhaka-1214.
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <a href="mailto:taleb.almadina@gmail.com">
                                taleb.almadina@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone-square"></i>

                            +880-1740-947123
                            <br>
                            <span class="ml-12">
                            +880-1925-063543
                            </span>

                        </li>
                        <li>
                            <i class="fas fa-globe-asia"></i>
                            <a href="/">www.almadina.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer Content End-->
<!--Footer Copyright Start-->
<section class="tj-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p>&copy; Copyrights {{ date('Y') }} <a href="/">Al Madina</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <p><a href="{{ route('page', 'disclaimer') }}">Disclaimer</a> | Developed by <a href="https://vmsl.com.bd">VMSL</a>.</p>
            </div>
        </div>
    </div>
</section>
<!--Footer Copyright End-->
