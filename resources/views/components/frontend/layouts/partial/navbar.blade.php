<div class="header-lower">
    <div class="outer-container p_relative pr_70">
        <div class="outer-box">
            <div class="left-column">
                <figure class="logo-box mr_50">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/air_force_golf_link_demo_logo1.png') }}" alt=""></a>
                </figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">Membership</a>
                                    <ul>
                                        <li><a href="{{ route('apply.membership') }}">Apply for Membership</a></li>
                                        <li><a href="{{ route('cancel.membership') }}">Cancel Membership</a></li>
                                        <li><a href="{{ route('active.member') }}">Active Member</a></li>
                                        <li><a href="{{ route('silent.member') }}">Silent Member</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Fees &amp; Charges</a>
                                    <ul>
                                        <li><a href="{{ route('membership.fee') }}">Membership Fee</a></li>
                                        <li><a href="{{ route('other.charges') }}">Misc Charges</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('committee') }}">Committee</a></li>
                                <li class=""><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{ route('tournaments') }}">Tournaments</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        <li><a href="{{ route('notices') }}">Notices </a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
