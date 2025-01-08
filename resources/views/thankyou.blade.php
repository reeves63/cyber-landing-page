<x-guest-layout>
    <!-- Navbar -->
    <nav class="top-navbar">
        <div class="container language-switcher">
            <a href="#">ID</a> | <a href="#">EN</a>
        </div>
    </nav>

    <!-- Section Logo -->
    <div class="logo-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/logo-bg.png') }}') no-repeat center center/cover;">
        <div class="container logo-container">
            <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo Helios" class="logo">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo Sangfor" class="logo">
        </div>
    </div>

    <!-- Thank You Section -->
    <section class="thank-you-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/wallpaper4.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="thank-you-content">
                <!-- Image -->
                <div class="thank-you-image">
                    <img src="{{ asset('assets/img/thx.png') }}" alt="Thank You">
                </div>
                <!-- Text -->
                <h1>Thank You for Your Interest</h1>
                <p>Our team will contact you within 5 working days</p>
                <!-- Button -->
                <a href="/" class="btn-back-homepage">BACK TO HOMEPAGE</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer-section" style="background: url('{{ asset('assets/img/gradient3.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="footer-content">
                <div class="contact-info">
                    <h2>PT. Helios Informatika Nusantara</h2>
                    <p class="address">
                        Centennial Tower, 12th Floor,<br>
                        Jl. Jendral Gatot Subroto<br>
                        No. Kav 24-25, Jakarta<br>
                        12930 Indonesia
                    </p>
                    <div class="contact-lines-container">
                        <p class="contact-line"><strong>Phone:</strong> +62 21 8062 2220</p>
                        <p class="contact-line"><strong>Email:</strong> Tencent@helios.id</p>
                    </div>
                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="#"><img src="{{ asset('assets/img/Facebook.png') }}" alt="Facebook"></a>
                        <a href="#"><img src="{{ asset('assets/img/ig.png') }}" alt="Instagram"></a>
                        <a href="#"><img src="{{ asset('assets/img/Twitter.png') }}" alt="Twitter"></a>
                        <a href="#"><img src="{{ asset('assets/img/Youtube.png') }}" alt="YouTube"></a>
                        <a href="#"><img src="{{ asset('assets/img/Linkedin.png') }}" alt="LinkedIn"></a>
                    </div>
                </div>

                <!-- World Map -->
                <div class="worldmap">
                    <img src="{{ asset('assets/img/worldmap.png') }}" alt="World Map">
                </div>
            </div>
        </div>
    </section>

    <footer class="bottom-footer">
        <p>&copy; 2023 – PT. Helios Informatika Nusantara – All Right Reserved</p>
    </footer>
</x-guest-layout>
