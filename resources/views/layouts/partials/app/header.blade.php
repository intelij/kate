
    <!-- Main Header Nav -->

    <header class="header-nav style_one navbar-scrolltofixed main-menu">
        <div class="container">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="/assets/images/header-logo.png" alt="header-logo.png">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="index.html" class="navbar_brand float-left dn-smd">
                    <img class="img-fluid mt10" src="/assets/images/header-logo.png" alt="header-logo.png">
                </a>

                {{-- mobile navigation menu and deskop version --}}
                @include('partials.navigation.header')

                <ul class="sign_up_btn pull-right dn-smd mt10">
                    <li>
                        <a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a>
                    </li>
                </ul><!-- Button trigger modal -->



            </nav>
            <!-- End of Responsive Menu -->
        </div>
    </header>
