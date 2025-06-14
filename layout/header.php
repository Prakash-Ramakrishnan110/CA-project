<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karthika and Associates | Chartered Accountants</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1a4b8c;
            --secondary-blue: #2a6fdb;
            --light-blue: #e6f0ff;
            --dark-blue: #0d2b4e;
            --gold: #d4af37;
            --saffron: #FF9933;
            --white: #FFFFFF;
            --green: #138808;
            --navy-blue: #000080;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 80px;
        }
        
        /* Header/Navbar Styles */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            padding: 5px 0;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
        }
        
        .navbar-transparent {
            background-color: transparent !important;
            box-shadow: none !important;
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--primary-blue);
            transition: var(--transition);
        }
        
        .navbar-brand:hover {
            color: var(--secondary-blue);
        }
        
        .logo-img {
            height: 50px;
            margin-right: 15px;
            transition: var(--transition);
        }
        
        .navbar.scrolled .logo-img {
            height: 40px;
        }
        
        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        
        .brand-subtitle {
            font-size: 0.7rem;
            font-weight: 600;
            color: var(--dark-blue);
            letter-spacing: 1px;
        }
        
        .nav-link {
            color: var(--dark-blue);
            font-weight: 600;
            padding: 8px 15px;
            margin: 0 3px;
            border-radius: 4px;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-link:not(.dropdown-toggle)::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 5px;
            left: 15px;
            background-color: var(--gold);
            transition: var(--transition);
        }
        
        .nav-link:hover:not(.dropdown-toggle)::after,
        .nav-link.active:not(.dropdown-toggle)::after {
            width: calc(100% - 30px);
        }
        
        .nav-link:hover, 
        .nav-link:focus {
            color: var(--primary-blue);
        }
        
        /* Dropdown styles */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 10px 0;
            margin-top: 8px;
            border-top: 3px solid var(--saffron);
        }
        
        .dropdown-menu .dropdown-item {
            position: relative;
            padding-left: 15px;
            transition: var(--transition);
            font-weight: 500;
        }
        
        .dropdown-menu .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--saffron), var(--white), var(--green));
            opacity: 0;
            transition: var(--transition);
        }
        
        .dropdown-menu .dropdown-item:hover {
            background-color: rgba(255, 153, 51, 0.05);
            padding-left: 20px;
        }
        
        .dropdown-menu .dropdown-item:hover::before {
            opacity: 1;
        }
        
        /* Submenu items */
        .dropdown-submenu > .dropdown-item {
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        .dropdown-submenu > .dropdown-item:hover {
            background-color: rgba(19, 136, 8, 0.05);
        }
        
        .dropdown-submenu .dropdown-menu {
            border-top: 3px solid var(--green);
        }
        
        .dropdown-item {
            padding: 8px 20px;
            color: var(--dark-blue);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }
        
        .dropdown-item:hover {
            color: var(--primary-blue);
        }
        
        .dropdown-toggle::after {
            margin-left: 5px;
            vertical-align: 0.15em;
        }
        
        /* Multi-level dropdown */
        .dropdown-submenu {
            position: relative;
        }
        
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -10px;
            margin-left: 0;
            display: none;
        }
        
        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
        
        .dropdown-submenu .dropdown-toggle::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 15px;
            top: 50%;
            margin-top: -0.5em;
        }
        
        /* Contact button */
        .btn-contact {
            background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
            color: var(--navy-blue);
            border-radius: 6px;
            padding: 8px 20px;
            font-weight: 700;
            transition: var(--transition);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            min-width: 120px;
            text-align: center;
            white-space: nowrap;
        }
        
        .btn-contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, 
                                        rgba(255,255,255,0) 0%, 
                                        rgba(255,255,255,0.8) 50%, 
                                        rgba(255,255,255,0) 100%);
            transition: var(--transition);
        }
        
        .btn-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: var(--navy-blue);
        }
        
        .btn-contact:hover::before {
            left: 100%;
        }
        
        /* Mobile menu */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            outline: none;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            background-image: none;
            height: 2px;
            width: 24px;
            position: relative;
            background-color: var(--primary-blue);
            transition: var(--transition);
        }
        
        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            height: 2px;
            width: 24px;
            background-color: var(--primary-blue);
            left: 0;
            transition: var(--transition);
        }
        
        .navbar-toggler-icon::before {
            top: -6px;
        }
        
        .navbar-toggler-icon::after {
            top: 6px;
        }
        
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
            background-color: transparent;
        }
        
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 0;
        }
        
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            top: 0;
        }
        
        /* Dark mode toggle */
        .dark-mode-toggle {
            background: none;
            border: none;
            color: var(--dark-blue);
            font-size: 1.2rem;
            cursor: pointer;
            padding: 5px 10px;
            margin-left: 15px;
            transition: var(--transition);
        }
        
        .dark-mode-toggle:hover {
            color: var(--primary-blue);
        }
        
        /* Language switcher */
        .language-switcher {
            position: relative;
            margin-left: 15px;
        }
        
        .language-switcher button {
            background: none;
            border: none;
            color: var(--dark-blue);
            font-weight: 600;
            padding: 8px 15px;
            cursor: pointer;
        }
        
        .language-switcher .dropdown-menu {
            min-width: 120px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
                max-height: 80vh;
                overflow-y: auto;
            }
            
            .nav-item {
                margin-bottom: 10px;
            }
            
            .nav-link {
                padding: 10px 15px;
                font-size: 1rem;
            }
            
            .dropdown-menu {
                box-shadow: none;
                border: 1px solid rgba(0, 0, 0, 0.05);
                margin-top: 5px;
                margin-bottom: 10px;
                width: 90%;
                margin-left: auto;
            }
            
            .dropdown-submenu .dropdown-menu {
                left: 15px;
                margin-top: 5px;
                width: 85%;
            }
            
            .btn-contact {
                display: inline-block;
                width: auto;
                margin-top: 15px;
                margin-bottom: 5px;
                padding: 10px 20px;
                font-size: 1rem;
                min-width: 140px;
            }
            
            .dropdown-item {
                padding: 12px 20px;
                font-size: 0.95rem;
            }
            
            .dark-mode-toggle, .language-switcher {
                margin-left: 0;
                padding: 10px 15px;
                display: block;
                width: 100%;
                text-align: left;
            }
        }
        
        @media (max-width: 767.98px) {
            body {
                padding-top: 70px;
            }
            
            .navbar-brand {
                font-size: 1.25rem;
            }
            
            .logo-img {
                height: 40px;
                margin-right: 10px;
            }
            
            .brand-subtitle {
                font-size: 0.6rem;
            }
            
            .navbar-collapse {
                padding: 15px;
                max-height: 75vh;
            }
            
            .nav-link {
                font-size: 0.95rem;
            }
            
            .dropdown-menu {
                font-size: 0.9rem;
            }
            
            .btn-contact {
                min-width: 130px;
                padding: 8px 15px;
            }
        }
        
        @media (max-width: 575.98px) {
            .navbar-brand {
                font-size: 1.1rem;
            }
            
            .logo-img {
                height: 35px;
            }
            
            .navbar-collapse {
                padding: 10px;
                max-height: 70vh;
            }
            
            .nav-link, .dropdown-item {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
            
            .btn-contact {
                padding: 8px 12px;
                font-size: 0.9rem;
                min-width: 110px;
                margin-top: 10px;
            }
        }
        
        @media (max-width: 400px) {
            .btn-contact {
                min-width: 100px;
                padding: 7px 10px;
                font-size: 0.85rem;
            }
        }
        
    
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt=" Logo" class="logo-img">
                <div class="brand-text">
                    <span>Karthika and Associates</span>
                    <span class="brand-subtitle">Chartered Accountants</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                            <li><a class="dropdown-item" href="#">Founder</a></li>
                            <li><a class="dropdown-item" href="#">Our Company</a></li>
                            <li><a class="dropdown-item" href="#">Our Team</a></li>
                            <li><a class="dropdown-item" href="#">Why India</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                            <li><a class="dropdown-item" href="#">Videos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Foreign Clearance</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Overview</a></li>
                                    <li><a class="dropdown-item" href="#">FDI-Prohibited Sectors</a></li>
                                    <li><a class="dropdown-item" href="#">FDI Direct & Indirect Investment</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Auditing</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Overview</a></li>
                                    <li><a class="dropdown-item" href="#">Internal Audit</a></li>
                                    <li><a class="dropdown-item" href="#">Service Tax Audit</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Transfer Pricing</a></li>
                            <li><a class="dropdown-item" href="#">Taxation of Expatriates</a></li>
                            <li><a class="dropdown-item" href="#">Business Taxation</a></li>
                            <li><a class="dropdown-item" href="#">Virtual CFO</a></li>
                            <li><a class="dropdown-item" href="#">Corporate Compliance</a></li>
                            <li><a class="dropdown-item" href="#">Business Setup</a></li>
                            <li><a class="dropdown-item" href="#">Litigation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tools
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="publicationsDropdown">
                            <li><a class="dropdown-item" href="#">Budget Updates</a></li>
                            <li><a class="dropdown-item" href="#">FEMA</a></li>
                            <li><a class="dropdown-item" href="#">GST</a></li>
                            <li><a class="dropdown-item" href="#">Income Tax</a></li>
                            <li><a class="dropdown-item" href="#">Miscellaneous Tools</a></li>
                            <li><a class="dropdown-item" href="#">Social Security Arrangements</a></li>
                            <li><a class="dropdown-item" href="#">Valuation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="knowledgeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Knowledge & Events
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="knowledgeDropdown">
                            <li><a class="dropdown-item" href="#">Our Clients</a></li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                            <li><a class="dropdown-item" href="#">Related Links</a></li>
                            <li><a class="dropdown-item" href="#">Blogs</a></li>
                            <li><a class="dropdown-item" href="#">Newsroom</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-contact" href="contact.php">Contact Us</a>
                    </li>
            

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Multi-level dropdown functionality
            var dropdownElements = [].slice.call(document.querySelectorAll('.dropdown-submenu a.dropdown-toggle'));
            
            dropdownElements.forEach(function(el) {
                el.addEventListener('click', function(e) {
                    if (!this.nextElementSibling.classList.contains('show')) {
                        var siblingMenus = this.parentNode.parentNode.querySelectorAll('.dropdown-menu');
                        siblingMenus.forEach(function(menu) {
                            if (menu !== this.nextElementSibling) {
                                menu.classList.remove('show');
                            }
                        }.bind(this));
                    }
                    
                    this.nextElementSibling.classList.toggle('show');
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
            
            // Close submenus when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(menu) {
                    menu.classList.remove('show');
                });
            });
            
            // Scroll effect for navbar
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                    navbar.classList.remove('navbar-transparent');
                } else {
                    navbar.classList.remove('scrolled');
                    // Add transparent class only on home page when at top
                    if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
                        navbar.classList.add('navbar-transparent');
                    }
                }
            });
            
            // Initialize scroll effect on page load
            if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
                document.querySelector('.navbar').classList.add('navbar-transparent');
            }
            
            // Dark mode toggle
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;
            
            // Check for saved user preference
            if (localStorage.getItem('darkMode') === 'enabled') {
                body.classList.add('dark-mode');
                darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            }
            
            darkModeToggle.addEventListener('click', function() {
                body.classList.toggle('dark-mode');
                
                if (body.classList.contains('dark-mode')) {
                    localStorage.setItem('darkMode', 'enabled');
                    darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
                } else {
                    localStorage.setItem('darkMode', 'disabled');
                    darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
                }
            });
            
            // Set active nav item based on current page
            const currentPage = window.location.pathname.split('/').pop() || 'index.html';
            document.querySelectorAll('.nav-link').forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page');
                } else {
                    link.classList.remove('active');
                    link.removeAttribute('aria-current');
                }
            });
            
            // Accessibility - close dropdown when focus is lost
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                dropdown.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        this.querySelector('.dropdown-toggle').click();
                    }
                });
            });
        });
        
        // Make this header reusable by including it via JavaScript
        function includeHeader() {
            const header = document.querySelector('nav');
            fetch('header.html')
                .then(response => response.text())
                .then(data => {
                    header.innerHTML = data;
                });
        }
        
        // Uncomment this if you want to use the header as a reusable component
        // includeHeader();
    </script>
</body>
</html>
