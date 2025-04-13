<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="/" class="logo">
                    <h4>Altama<span>soft</span></h4>
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li class="scroll-to-section"><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li class="scroll-to-section"><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
                    <li class="scroll-to-section"><a href="/portfolio" class="{{ Request::is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                    <li class="scroll-to-section"><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a></li>
                    <li class="scroll-to-section">
                        <div class="main-red-button"><a href="/contact">Contact Now</a></div>
                    </li>
                    {{-- <li class="scroll-to-section"><a href="#blog">Blog</a></li> --}}
                    {{-- <li class="scroll-to-section"><a href="#contact">Message Us</a></li> --}}
                </ul>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
</div>