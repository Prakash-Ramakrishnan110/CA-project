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
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        :root {
            --saffron: #FF9933;
            --white: #FFFFFF;
            --green: #138808;
            --navy-blue: #454593;
            --dark-blue: #0d2b4e;
            --light-gray: #f8f9fa;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Footer Styles */
        footer {
            background-color: var(--navy-blue);
            color: white;
            padding: 60px 0 20px;
            position: relative;
            background-image: linear-gradient(to bottom, var(--navy-blue), #000040);
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 60px;
            margin-right: 15px;
            filter: brightness(0) invert(1);
            transition: var(--transition);
        }
        
        .footer-logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        
        .footer-logo-text .title {
            font-weight: 700;
            font-size: 1.4rem;
            color: white;
        }
        
        .footer-logo-text .subtitle {
            font-size: 0.8rem;
            font-weight: 400;
            color: rgba(255,255,255,0.8);
            letter-spacing: 1px;
        }
        
        .footer-about {
            margin-bottom: 20px;
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            line-height: 1.7;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .footer-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-radius: 50%;
            transition: var(--transition);
            font-size: 1rem;
        }
        
        .footer-social a:hover {
            background-color: var(--saffron);
            transform: translateY(-3px);
            color: var(--navy-blue);
        }
        
        .footer-heading {
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
            border-radius: 3px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
            font-size: 0.95rem;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
            color: rgba(255,255,255,0.8);
        }
        
        .footer-contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            line-height: 1.6;
            font-size: 0.95rem;
        }
        
        .footer-contact-info i {
            color: var(--saffron);
            margin-right: 12px;
            margin-top: 4px;
            font-size: 1.1rem;
            min-width: 18px;
        }
        
        .footer-bottom {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);
            text-align: center;
            color: rgba(255,255,255,0.7);
            font-size: 0.85rem;
        }
        
        .footer-bottom-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
            flex-wrap: wrap;
        }
        
        .footer-bottom-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-bottom-links a:hover {
            color: var(--saffron);
        }
        
        .footer-bottom-links a:not(:last-child)::after {
            content: '|';
            margin-left: 10px;
            color: rgba(255,255,255,0.3);
        }
        
        .designer-credit {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
            flex-wrap: wrap;
            gap: 5px;
        }
        
        .designer-credit a {
            color: var(--green);
            text-decoration: none;
            font-weight: bold;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .footer-col {
                margin-bottom: 30px;
            }
            
            .footer-logo img {
                height: 50px;
            }
        }
        
        @media (max-width: 767.98px) {
            footer {
                padding: 50px 0 20px;
            }
            
            .footer-logo {
                justify-content: center;
                text-align: center;
            }
            
            .footer-about, 
            .footer-heading,
            .footer-links,
            .footer-contact-info {
                text-align: center;
            }
            
            .footer-heading::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-social {
                justify-content: center;
            }
            
            .footer-contact-info li {
                justify-content: center;
            }
            
            .footer-bottom-links {
                gap: 10px;
            }
            
            .footer-bottom-links a:not(:last-child)::after {
                margin-left: 5px;
            }
        }
        
        @media (max-width: 575.98px) {
            .footer-logo {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-logo img {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .footer-bottom-links {
                flex-direction: column;
                gap: 5px;
            }
            
            .footer-bottom-links a:not(:last-child)::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-col">
                    <div class="footer-logo">
                        <img src="https://via.placeholder.com/60x60" alt="Karthika and Associates Logo">
                        <div class="footer-logo-text">
                            <span class="title">Karthika and Associates</span>
                            <span class="subtitle">Chartered Accountants</span>
                        </div>
                    </div>
                    <p class="footer-about">
                        We are a leading Chartered Accountancy firm providing comprehensive financial and business advisory services to clients across India with a commitment to excellence, integrity, and national values.
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Publications</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-col">
                    <h4 class="footer-heading">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Audit & Assurance</a></li>
                        <li><a href="#">Tax Consultancy</a></li>
                        <li><a href="#">GST Services</a></li>
                        <li><a href="#">Company Formation</a></li>
                        <li><a href="#">Financial Planning</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-col">
                    <h4 class="footer-heading">Contact Us</h4>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Financial Street, Business District, Mumbai, Maharashtra 400001</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>+91 98765 43210</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@karthikaandassociates.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon-Fri: 9:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Karthika and Associates. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Disclaimer</a>
                </div>
                <div class="designer-credit">
                    Designed by 
                    <a href="https://saakra.com" target="_blank">
                        <img src="images/IMG-20160317-WA0004-removebg-preview.png" alt="Saakra Enterprises Logo" style="height:40px; vertical-align:middle; margin-right:8px;">
                        Saakra Enterprises Private Limited
                    </a>
                </div></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>