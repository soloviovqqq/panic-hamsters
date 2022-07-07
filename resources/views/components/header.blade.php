<header class="theme-main-menu sticky-menu theme-menu-two">
    <div class="inner-content">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('theme/images/header/logo.svg') }}" alt="" width="150">
                </a>
            </div>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="d-block d-lg-none">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/vCamp_01.png" alt="" width="127">
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" role="button">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roadmap') }}" role="button">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('museum') }}" role="button">Museum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" role="button">Stake</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" role="button">Auction</a>
                        </li>
                    </ul>
                    <div class="mobile-content d-block d-lg-none">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search here..">
                            <button><i class="bi bi-search"></i></button>
                        </form>

                        <div class="address-block">
                            <h4 class="title">Our Address</h4>
                            <p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
                            <p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="right-widget d-flex align-items-center">
                <a href="#" class="btn disabled">
                    <img src="{{ asset('theme/images/header/os.svg') }}" alt="" width="30">
                </a>
                <a href="https://twitter.com/PanicHamsterNFT" class="btn" target="_blank">
                    <img src="{{ asset('theme/images/header/tw.svg') }}" alt="" width="30">
                </a>
            </div>
        </div>
    </div>
</header>
