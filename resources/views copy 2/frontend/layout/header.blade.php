<header class="header">
    <div class="head-top">

        <style>
            .logo{height: 5rem !important; width: 25rem !important; height: 10rem !important;}
            .logo a,.mask-lnk{display: flex !important;align-items:center !important; justify-content: center !important;}
            .logo-image{width: 6rem !important; margin-top: 2rem !important; }
        </style>
        <!-- menu button -->
        <a href="#" class="menu-btn"><span></span></a>


        <div class="logo ">
            <a href="#">
                <span class="mask-lnk ">

                        <img src="{{ asset('public/assets/images/logos/logo1.png') }}" alt="Logo" class="logo-image" />

                </span>
                {{-- <span class="mask-lnk mask-lnk-hover mask-lnk1">Download <strong>CV</strong></span> --}}
            </a>
        </div>

        <!-- top menu -->
        <div class="top-menu hover-masks">
            <div class="top-menu-nav">	
                <div class="menu-topmenu-container">
                    <ul class="menu">
                        <li class="menu-item current-menu-item">
                            <a href="#section-started">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#section-about">Resume</a>
                        </li>
                        <li class="menu-item">
                            <a href="#section-portfolio">Portfolio</a>
                        </li>
                        <li class="menu-item">
                            <a href="#section-team">Team</a>
                        </li>
                        <li class="menu-item">
                            <a href="#section-contacts">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
