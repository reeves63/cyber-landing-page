<x-guest-layout>
    <!-- Navbar Biru -->
    <nav class="top-navbar">
        <div class="container language-switcher">
            <a href="#">ID</a> | <a href="#">EN</a>
        </div>
    </nav>

    <!-- Section Logo -->
    <div class="logo-section">
        <div class="container logo-container">
            <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo Helios" class="logo">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo Sangfor" class="logo">
        </div>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/wallpaper.png') }}') no-repeat center center/cover;">
        <div class="gradient-overlay" style="background: url('{{ asset('assets/img/gradient.png') }}') no-repeat center center/cover;"></div>
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">
                    Cybersecurity Made Simple <br> with Sangfor Cyber Command
                </h1>
                <p class="hero-subtitle">
                    Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.
                </p>
                <a href="#" class="btn-free-trial">FREE TRIAL</a>
            </div>
        </div>
    </section>


    <section id="about" class="about-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/about.png') }}') no-repeat center center/cover;">
    <div class="container about-container">
        <div class="about-text">
            <h2>About Sangfor <br><strong>Cyber Command</strong></h2>
            <p>
                Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive 
                security management platform designed to protect businesses from cyber threats.
            </p>
            <p>
                It provides a range of security solutions such as threat detection, incident response, and compliance 
                management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze 
                security events, and respond to incidents quickly and efficiently.
            </p>
            <p>
                The platform uses advanced machine learning algorithms and big data analytics to identify and prevent 
                cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses 
                to track their security posture in real-time and make informed decisions based on the insights provided.
            </p>
            <p>
                Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity 
                defenses and safeguard their assets from modern-day threats.
            </p>
        </div>

        <div class="about-form">
            <div class="form-box">
                <h3>
                    <strong>
                        <span class="text-primary">Dapatkan Free Trial selama 1 bulan,</span>
                        <span class="text-secondary"> analisa keamanan network anda dan lihat hasilnya!</span>
                    </strong>
                </h3>
                <form action="{{ route('send-contact') }}" method="POST">
    @csrf
    <div class="form-group-horizontal">
        <div class="form-group">
            <label for="first-name">First Name <span class="required">*</span></label>
            <input type="text" id="first-name" name="first_name" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name <span class="required">*</span></label>
            <input type="text" id="last-name" name="last_name" placeholder="Last Name" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email">Corporate Email <span class="required">*</span></label>
        <input type="email" id="email" name="email" placeholder="email@mail.com" required>
    </div>

    <div class="form-group">
        <label for="job-title">Job Title <span class="required">*</span></label>
        <input type="text" id="job-title" name="job_title" placeholder="Your job" required>
    </div>

    <div class="form-group">
        <label for="company-name">Company Name <span class="required">*</span></label>
        <input type="text" id="company-name" name="company_name" placeholder="Your company" required>
    </div>

    <div class="form-group">
        <label for="industry">Industry <span class="required">*</span></label>
        <select id="industry" name="industry" required>
            <option value="" disabled selected>Select Industry</option>
            <option value="IT">IT</option>
            <option value="Finance">Finance</option>
            <option value="Healthcare">Healthcare</option>
        </select>
    </div>

    <div class="form-group">
        <label for="phone-number">Phone Number <span class="required">*</span></label>
        <input type="tel" id="phone-number" name="phone" placeholder="Your number" required>
    </div>

    <div class="checkbox">
        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</label>
    </div>

    <button type="submit" class="btn-submit">SEND</button>
</form>

            </div>
        </div>
    </div>
</section>

    <section id="advantages" class="advantages-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/wallpaper2.png') }}') no-repeat center center/cover;">
        <div class="gradient-overlay" style="background: url('{{ asset('assets/img/gradient2.png') }}') no-repeat center center/cover;"></div>
        <div class="advantages-content">
                <h2>Sangfor Cyber Command Advantages</h2>
                <div class="advantages-grid">
                    <!-- Card 1 -->
                    <div class="advantage-card">
                        <img src="{{ asset('assets/img/adv1.png') }}" alt="Advanced Threat Detection Icon" class="advantage-icon">
                        <h3>Advanced Threat Detection</h3>
                        <p>
                            Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="advantage-card">
                        <img src="{{ asset('assets/img/adv2.png') }}" alt="Network Visibility Icon" class="advantage-icon">
                        <h3>Network Visibility and Control</h3>
                        <p>
                            Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div class="advantage-card">
                        <img src="{{ asset('assets/img/adv3.png') }}" alt="Cloud Security Icon" class="advantage-icon">
                        <h3>Cloud Security</h3>
                        <p>
                            Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud specific threats like data breaches, account hijacking, and insider threats.
                        </p>
                    </div>
                    <!-- Card 4 -->
                    <div class="advantage-card">
                        <img src="{{ asset('assets/img/adv4.png') }}" alt="Comprehensive Security Icon" class="advantage-icon">
                        <h3>Comprehensive Security Management</h3>
                        <p>
                            Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section id="features" class="features-section">
        <div class="container">
            <h2>Sangfor Cyber Command Features</h2>
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-item feature-1">
                    <img src="{{ asset('assets/img/icon1.png') }}" alt="Threat Intelligence Icon" class="feature-icon">
                    <h3>Threat Intelligence</h3>
                    <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-item feature-2">
                    <img src="{{ asset('assets/img/icon2.png') }}" alt="Real-Time Detections Icon" class="feature-icon">
                    <h3>Real-Time Detections</h3>
                    <p>Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-item feature-3">
                    <img src="{{ asset('assets/img/icon3.png') }}" alt="Threats Investigation Icon" class="feature-icon">
                    <h3>Threats Investigation</h3>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <!-- Feature 4 -->
                <div class="feature-item feature-4">
                    <img src="{{ asset('assets/img/icon4.png') }}" alt="Comprehensive Security Solutions Icon" class="feature-icon">
                    <h3>Comprehensive Security Solutions</h3>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <!-- Feature 5 -->
                <div class="feature-item feature-5">
                    <img src="{{ asset('assets/img/icon5.png') }}" alt="Rapid Response Icon" class="feature-icon">
                    <h3>Rapid Response</h3>
                    <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="value-to-customers" class="value-section" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/img/wallpaper3.png') }}') no-repeat center center/cover;">
        <div class="container">
            <h2>
                Sangfor Cyber Command's<br>
                Value to Customers
            </h2>
            <ul class="value-list">
                <li>
                    <img src="{{ asset('assets/img/checkmark.png') }}" alt="Checkmark Icon">
                    <p>Detect known dan unknown threats</p>
                </li>
                <li>
                    <img src="{{ asset('assets/img/checkmark.png') }}" alt="Checkmark Icon">
                    <p>Much better visibility of security posture of the entire infrastructure</p>
                </li>
                <li>
                    <img src="{{ asset('assets/img/checkmark.png') }}" alt="Checkmark Icon">
                    <p>Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                </li>
                <li>
                    <img src="{{ asset('assets/img/checkmark.png') }}" alt="Checkmark Icon">
                    <p>Faster Response to improve overall security control</p>
                </li>
                <li>
                    <img src="{{ asset('assets/img/checkmark.png') }}" alt="Checkmark Icon">
                    <p>Much more cost effective than other solutions such as SIEM</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="customers-reference" class="customers-section">
        <div class="reference-header">
            <h3>Cyber Command Customers Reference</h3>
        </div>
        <div class="customers-logos">
            <img src="{{ asset('assets/img/LOGO-JNT 1.png') }}" alt="J&T Logo">
            <img src="{{ asset('assets/img/Logo_JRP_Insurance 1.png') }}" alt="Jasa Raharja Putera Logo">
            <img src="{{ asset('assets/img/ok-bank.png') }}" alt="OK Bank Logo">
            <img src="{{ asset('assets/img/samudera indonesia.png') }}" alt="Samudera Indonesia Logo">
        </div>
    </section>

    <section id="explore" class="explore-section">
        <div class="container">
            <!-- Title -->
            <h2>Explore Sangfor Cyber Command with Helios</h2>
            <p class="subtitle">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
            
            <!-- Feature Cards -->
            <div class="explore-cards">
                <!-- Card 1 -->
                <div class="card">
                    <div class="icon-container">
                        <img src="{{ asset('assets/img/ndr.png') }}" alt="NDR Icon">
                    </div>
                    <h3>NDR Implementation</h3>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <div class="icon-container">
                        <img src="{{ asset('assets/img/irth.png') }}" alt="Incident Response Icon">
                    </div>
                    <h3>Incident Response<br>and Threat Hunting</h3>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <div class="icon-container">
                        <img src="{{ asset('assets/img/dsm.png') }}" alt="Device Security Icon">
                    </div>
                    <h3>Device Security<br>Maintenance</h3>
                </div>
            </div>
        </div>
    </section>

        <section class="footer-section" style="background: url('{{ asset('assets/img/gradient3.png') }}') no-repeat center center/cover;">
            <div class="container">
                <div class="footer-content">
                    <div class="contact-info">
                        <h2>PT. Helios Informatika Nusantara</h2>
                        <p class="address">
                            Centennial Tower, 12th Floor,<br>
                            Jl. Jendral Gatot Subroto<br>
                            No. Kav 24-25, Jakarta<br>
                            12931 Indonesia
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
