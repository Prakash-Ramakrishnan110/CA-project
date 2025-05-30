<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karthika and Associates | Chartered Accountants</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Lottie Animations -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
        :root {
            --primary-color: #0a2463;
            --secondary-color: #3e92cc;
            --accent-color: #ffd700;
            --dark-color: #001845;
            --light-color: #f9f9f9;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #fff;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-color) 100%);
            color: white;
            padding: 200px 0 150px;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .hero-title {
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            position: relative;
        }
        
        .hero-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }
        
        .text-stroke {
            -webkit-text-stroke: 1px var(--accent-color);
            color: transparent;
            display: inline-block;
        }
        
        /* Rotating Text Animation */
        .rotating-text-container {
            display: inline-block;
            position: relative;
            color: var(--accent-color);
            vertical-align: top;
            height: 1.2em;
        }
        
        .rotating-text {
            display: inline-block;
            position: relative;
            height: 100%;
        }
        
        .rotating-text span {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: auto;
            animation: rotateWord 18s linear infinite 0s;
            font-weight: 700;
        }
        
        .rotating-text span:nth-child(2) { animation-delay: 3s; }
        .rotating-text span:nth-child(3) { animation-delay: 6s; }
        .rotating-text span:nth-child(4) { animation-delay: 9s; }
        .rotating-text span:nth-child(5) { animation-delay: 12s; }
        .rotating-text span:nth-child(6) { animation-delay: 15s; }
        
        @keyframes rotateWord {
            0% { opacity: 0; }
            2%, 15% { opacity: 1; }
            17%, 100% { opacity: 0; }
        }
        
        .hero-subtitle {
            font-weight: 400;
            font-size: 1.3rem;
            margin-bottom: 30px;
            max-width: 700px;
            opacity: 0.9;
        }
        
        /* Floating Elements */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        .floating-element {
            position: absolute;
            border-radius: 50%;
            filter: blur(5px);
            animation: float 8s ease-in-out infinite;
            z-index: 1;
        }
        
        /* Common Styles */
        .hover-scale {
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .hover-float {
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.5s ease;
        }
        
        .hover-float:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Button Effects */
        .btn-glow {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-glow::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }
        
        .btn-glow:hover::after {
            left: 100%;
        }
        
        /* Section Titles */
        .section-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }
        
        /* Service Cards */
        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
            position: relative;
            z-index: 2;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            opacity: 0;
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .service-card:hover {
            color: white;
        }
        
        .service-card:hover::before {
            opacity: 1;
        }
        
        .service-card:hover .service-icon {
            background: white !important;
            color: var(--primary-color) !important;
        }
        
        .service-card:hover h3,
        .service-card:hover p,
        .service-card:hover a {
            color: white !important;
        }
        
        /* Team Cards */
        .team-card img {
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .team-card:hover img {
            transform: scale(1.1);
        }
        
        /* Testimonial Cards */
        .testimonial-card {
            position: relative;
            overflow: hidden;
        }
        
        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 120px;
            font-family: Georgia, serif;
            color: rgba(10, 36, 99, 0.05);
            line-height: 1;
            z-index: 0;
        }
        
        /* Contact CTA */
        .contact-cta {
            background: linear-gradient(135deg, #FF9933 0%, #FFFFFF 50%, #138808 100%);
            color: #000080;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }
        
        /* Particle Animation */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Glow Effects */
        .glow {
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.7);
            animation: pulse 2s infinite alternate;
        }
        
        @keyframes pulse {
            0% { text-shadow: 0 0 10px rgba(255, 215, 0, 0.7); }
            100% { text-shadow: 0 0 20px rgba(255, 215, 0, 0.9), 0 0 30px rgba(255, 215, 0, 0.5); }
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            height: 50px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding-left: 20px;
            margin-bottom: 20px;
        }
        
        textarea.form-control {
            height: 150px;
            padding-top: 15px;
        }
        
        /* Additional spacing */
        section {
            padding: 100px 0;
            position: relative;
        }
        
        .stats-section {
            padding: 80px 0;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-section {
                padding: 150px 0 100px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .contact-form {
                padding: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .contact-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
   <?php include "layout/header.php"; ?>
  <!-- Hero Section -->
  <section class="hero-section">
    <!-- Floating Particles -->
    <div class="particles" id="particles-js"></div>
    
    <!-- Floating Elements -->
    <div class="floating-element" style="top: 20%; left: 5%; width: 30px; height: 30px; background: rgba(255, 215, 0, 0.3); animation-delay: 0s;"></div>
    <div class="floating-element" style="bottom: 15%; right: 10%; width: 50px; height: 50px; background: rgba(62, 146, 204, 0.3); animation-delay: 2s;"></div>
    <div class="floating-element" style="top: 30%; right: 20%; width: 40px; height: 40px; background: rgba(255, 153, 51, 0.3); animation-delay: 1s;"></div>
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="hero-title">
                    Strategic <span class="text-stroke">Financial</span> Solutions for 
                    <span class="rotating-text-container">
                        <span class="rotating-text">
                            <span style="white-space: nowrap;">Your Business Growth</span>
                            <span>Startups</span>
                            <span>Enterprises</span>
                            <span>Multinationals</span>
                            <span>Investors</span>
                            <span>Entrepreneurs</span>
                        </span>
                    </span>
                </h1>
                <p class="hero-subtitle">
                    Karthika and Associates provides comprehensive financial advisory services to help businesses navigate complex regulations and maximize growth potential.
                </p>
                <div style="display: flex; gap: 15px;">
                    <button class="btn btn-glow" style="background-color: var(--accent-color); color: var(--dark-color); font-weight: 600; padding: 12px 30px; border-radius: 6px; border: none;">
                        Get Started <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                    <button class="btn btn-glow" style="background-color: transparent; color: white; font-weight: 600; padding: 12px 30px; border-radius: 6px; border: 2px solid rgba(255,255,255,0.3);">
                        Learn More <i class="fas fa-play-circle ms-2"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_6wzcvn2a.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">About Our Firm</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Delivering excellence in financial advisory services since 2010</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="hover-scale" style="border-radius: 15px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            <source src="https://assets.mixkit.co/videos/preview/mixkit-businessman-checking-financial-data-17639-large.mp4" type="video/mp4">
                        </video>
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, rgba(10, 36, 99, 0.2), rgba(10, 36, 99, 0.5));"></div>
                        <div style="position: absolute; bottom: 30px; left: 30px; color: white;">
                            <h3 style="font-weight: 600; margin-bottom: 10px;">Our Story</h3>
                            <p style="max-width: 500px;">Watch our journey from a small practice to a leading financial advisory firm</p>
                            <button style="background: transparent; border: 2px solid white; color: white; padding: 8px 20px; border-radius: 30px; font-weight: 500; margin-top: 10px; transition: all 0.3s ease;">
                                <i class="fas fa-play me-2"></i> Play Video
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hover-float" style="background-color: white; border-radius: 15px; padding: 40px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                    <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 20px;">Why Choose Karthika and Associates?</h3>
                    <p style="margin-bottom: 20px; font-size: 1.1rem;">Founded by CA Karthika Menon, our firm has grown to become one of the most respected chartered accountancy practices in the region, known for our technical expertise, ethical standards, and client-focused approach.</p>
                    
                    <div class="feature-item" style="display: flex; gap: 20px; margin-bottom: 20px;">
                        <div style="flex-shrink: 0; width: 60px; height: 60px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5rem;">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Professional Excellence</h4>
                            <p style="color: #666;">Our team includes qualified CAs, MBAs, and financial experts with extensive industry experience.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item" style="display: flex; gap: 20px; margin-bottom: 20px;">
                        <div style="flex-shrink: 0; width: 60px; height: 60px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5rem;">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Innovative Solutions</h4>
                            <p style="color: #666;">We leverage technology and creative thinking to solve complex financial challenges.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item" style="display: flex; gap: 20px;">
                        <div style="flex-shrink: 0; width: 60px; height: 60px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Data Security</h4>
                            <p style="color: #666;">Your financial information is protected with enterprise-grade security measures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section" style="background-color: white;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Our Services</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Comprehensive financial solutions tailored to your business needs</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="0">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Foreign Direct Investment</h3>
                        <p style="color: #666; margin-bottom: 20px;">Comprehensive guidance on FDI regulations, compliance, and structuring investments in India.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Taxation Services</h3>
                        <p style="color: #666; margin-bottom: 20px;">Strategic tax planning and compliance services for businesses and individuals.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Audit & Assurance</h3>
                        <p style="color: #666; margin-bottom: 20px;">Independent audit services that enhance the reliability of financial information.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="0">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Transfer Pricing</h3>
                        <p style="color: #666; margin-bottom: 20px;">Expert advice on transfer pricing regulations and documentation requirements.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Business Setup</h3>
                        <p style="color: #666; margin-bottom: 20px;">End-to-end assistance for establishing and structuring your business in India.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Virtual CFO</h3>
                        <p style="color: #666; margin-bottom: 20px;">Strategic financial leadership on demand for growing businesses.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="#" class="btn btn-primary btn-glow" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border: none; padding: 12px 30px; border-radius: 30px; font-weight: 600;">
                    View All Services <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
  </section>

  <!-- New Services Section - GST & Compliance -->
  <section class="gst-section" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">GST & Compliance Services</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Expert guidance to navigate India's complex GST landscape</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">GST Registration & Filing</h3>
                        <p style="color: #666; margin-bottom: 20px;">Comprehensive GST registration services and monthly/quarterly return filing to ensure compliance.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">GST Audit & Assessment</h3>
                        <p style="color: #666; margin-bottom: 20px;">Professional GST audit services to ensure compliance and prepare for departmental assessments.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">GST Advisory</h3>
                        <p style="color: #666; margin-bottom: 20px;">Strategic advice on GST implications for business decisions and transactions.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Learn More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- New Section - Industry Specializations -->
  <section class="industries-section" style="background-color: white;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Industry Specializations</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Deep expertise in key industries</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Technology & Startups</h3>
                        <p style="color: #666; margin-bottom: 20px;">Specialized services for SaaS companies, e-commerce, and tech startups including R&D tax credits.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Manufacturing</h3>
                        <p style="color: #666; margin-bottom: 20px;">Custom solutions for import/export, excise, and supply chain optimization.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Healthcare</h3>
                        <p style="color: #666; margin-bottom: 20px;">Financial services tailored for hospitals, clinics, and medical device companies.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 1.8rem;">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Real Estate</h3>
                        <p style="color: #666; margin-bottom: 20px;">Specialized accounting and tax services for developers, REITs, and construction firms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-color) 100%); color: white; overflow: hidden;">
    <div class="container">
        <div class="row text-center">
            <!-- Stat Item 1 -->
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item" style="position: relative;">
                    <div class="stat-number" 
                         style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;"
                         data-target="250">0</div>
                    <div class="stat-label" style="font-size: 1.1rem; opacity: 0.9;">Happy Clients</div>
                    <div class="stat-hover-effect" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%); opacity: 0; transition: opacity 0.3s ease;"></div>
                </div>
            </div>
            
            <!-- Stat Item 2 -->
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item" style="position: relative;">
                    <div class="stat-number" 
                         style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;"
                         data-target="12">0</div>
                    <div class="stat-label" style="font-size: 1.1rem; opacity: 0.9;">Years Experience</div>
                    <div class="stat-hover-effect" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%); opacity: 0; transition: opacity 0.3s ease;"></div>
                </div>
            </div>
            
            <!-- Stat Item 3 -->
            <div class="col-md-3 col-6">
                <div class="stat-item" style="position: relative;">
                    <div class="stat-number" 
                         style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;"
                         data-target="98">0</div>
                    <div class="stat-label" style="font-size: 1.1rem; opacity: 0.9; position: relative;">
                        <span>Client Retention</span>
                        <span class="stat-percent-symbol" style="position: absolute; font-size: 1.5rem; top: -10px; right: -15px;">%</span>
                    </div>
                    <div class="stat-hover-effect" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%); opacity: 0; transition: opacity 0.3s ease;"></div>
                </div>
            </div>
            
            <!-- Stat Item 4 -->
            <div class="col-md-3 col-6">
                <div class="stat-item" style="position: relative;">
                    <div class="stat-number" 
                         style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;"
                         data-target="500">0</div>
                    <div class="stat-label" style="font-size: 1.1rem; opacity: 0.9;">Projects Completed</div>
                    <div class="stat-hover-effect" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%); opacity: 0; transition: opacity 0.3s ease;"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating animated circles in background -->
    <div class="floating-circles">
        <div class="circle" style="position: absolute; border-radius: 50%; background: rgba(255,255,255,0.05);"></div>
        <div class="circle" style="position: absolute; border-radius: 50%; background: rgba(255,255,255,0.05);"></div>
        <div class="circle" style="position: absolute; border-radius: 50%; background: rgba(255,255,255,0.05);"></div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section" style="background-color: white;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Our Leadership Team</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Experienced professionals guiding your financial success</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="team-card hover-float" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Karthika Menon - Founder & Managing Partner" style="width: 100%; height: 300px; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(10, 36, 99, 0.8), transparent); padding: 20px; color: white;">
                            <h5 style="font-weight: 600; margin-bottom: 5px;">CA Karthika Menon</h5>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Founder & Managing Partner</p>
                        </div>
                    </div>
                    <div style="padding: 25px; text-align: center;">
                        <p style="color: #666; margin-bottom: 20px;">With over 18 years of experience in chartered accountancy, Karthika specializes in international taxation and business advisory.</p>
                        <div style="display: flex; justify-content: center; gap: 15px;">
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card hover-float" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Rahul Sharma - Partner - Audit & Assurance" style="width: 100%; height: 300px; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(10, 36, 99, 0.8), transparent); padding: 20px; color: white;">
                            <h5 style="font-weight: 600; margin-bottom: 5px;">CA Rahul Sharma</h5>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Partner - Audit & Assurance</p>
                        </div>
                    </div>
                    <div style="padding: 25px; text-align: center;">
                        <p style="color: #666; margin-bottom: 20px;">Rahul leads our audit practice with expertise in statutory audits, internal controls, and risk management.</p>
                        <div style="display: flex; justify-content: center; gap: 15px;">
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card hover-float" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1573497019706-4e0b7f4e5b81?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Priya Nair - Partner - Taxation" style="width: 100%; height: 300px; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(10, 36, 99, 0.8), transparent); padding: 20px; color: white;">
                            <h5 style="font-weight: 600; margin-bottom: 5px;">CA Priya Nair</h5>
                            <p style="font-size: 0.9rem; opacity: 0.9;">Partner - Taxation</p>
                        </div>
                    </div>
                    <div style="padding: 25px; text-align: center;">
                        <p style="color: #666; margin-bottom: 20px;">Priya heads our tax practice with specialized knowledge in GST, international taxation, and transfer pricing.</p>
                        <div style="display: flex; justify-content: center; gap: 15px;">
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn-glow" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- New Section - Case Studies -->
  <section class="case-studies-section" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Success Stories</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">How we've helped our clients achieve their financial goals</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="0">
                <div class="hover-float" style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                    <div style="position: relative; height: 250px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tech Startup Case Study" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(10, 36, 99, 0.8), transparent);"></div>
                        <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                            <h4 style="font-weight: 600;">Tech Startup Expansion</h4>
                            <p style="opacity: 0.9;">Bangalore-based SaaS company</p>
                        </div>
                    </div>
                    <div style="padding: 25px;">
                        <p style="color: #666; margin-bottom: 20px;">Guided a fast-growing SaaS startup through their Series B funding round and international expansion, helping them establish tax-efficient structures in 3 countries.</p>
                        <div style="display: flex; gap: 15px;">
                            <div style="flex: 1; background-color: #e6f0ff; border-radius: 8px; padding: 15px; text-align: center;">
                                <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">45%</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Tax savings</p>
                            </div>
                            <div style="flex: 1; background-color: #e6f0ff; border-radius: 8px; padding: 15px; text-align: center;">
                                <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">3</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Countries expanded</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                <div class="hover-float" style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                    <div style="position: relative; height: 250px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Manufacturing Case Study" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(10, 36, 99, 0.8), transparent);"></div>
                        <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                            <h4 style="font-weight: 600;">Manufacturing Turnaround</h4>
                            <p style="opacity: 0.9;">Pune-based auto components manufacturer</p>
                        </div>
                    </div>
                    <div style="padding: 25px;">
                        <p style="color: #666; margin-bottom: 20px;">Implemented cost-saving measures and tax optimization strategies for a struggling manufacturer, resulting in a complete financial turnaround within 18 months.</p>
                        <div style="display: flex; gap: 15px;">
                            <div style="flex: 1; background-color: #e6f0ff; border-radius: 8px; padding: 15px; text-align: center;">
                                <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">₹2.8 Cr</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Annual savings</p>
                            </div>
                            <div style="flex: 1; background-color: #e6f0ff; border-radius: 8px; padding: 15px; text-align: center;">
                                <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">22%</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Profit increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="#" class="btn btn-primary btn-glow" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border: none; padding: 12px 30px; border-radius: 30px; font-weight: 600;">
                    View All Case Studies <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section" style="background-color: white;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Client Testimonials</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">What our clients say about our services</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="0">
                <div class="testimonial-card hover-float" style="background-color: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; gap: 5px; color: var(--accent-color);">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p style="font-style: italic; color: #555; margin-bottom: 25px; position: relative; padding-left: 20px;">
                        Karthika and Associates provided exceptional guidance during our market entry into India. Their knowledge of local regulations saved us time and money.
                    </p>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Johnson - CEO, Global Tech Solutions" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Michael Johnson</h5>
                            <p style="color: #666; font-size: 0.9rem;">CEO, Global Tech Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="100">
                <div class="testimonial-card hover-float" style="background-color: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; gap: 5px; color: var(--accent-color);">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p style="font-style: italic; color: #555; margin-bottom: 25px; position: relative; padding-left: 20px;">
                        The team's expertise in transfer pricing helped us navigate complex regulations while optimizing our tax position. Highly recommended!
                    </p>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Williams - CFO, International Manufacturing Co." style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Sarah Williams</h5>
                            <p style="color: #666; font-size: 0.9rem;">CFO, International Manufacturing Co.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-right" data-aos-delay="200">
                <div class="testimonial-card hover-float" style="background-color: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; gap: 5px; color: var(--accent-color);">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p style="font-style: italic; color: #555; margin-bottom: 25px; position: relative; padding-left: 20px;">
                        Their virtual CFO service has been invaluable to our startup. We get executive-level financial guidance without the full-time cost.
                    </p>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Raj Patel - Founder, Tech Innovations Pvt. Ltd." style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Raj Patel</h5>
                            <p style="color: #666; font-size: 0.9rem;">Founder, Tech Innovations Pvt. Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12" data-aos="fade-up">
                <h4 style="text-align: center; margin-bottom: 30px; color: var(--primary-color); font-weight: 600;">Trusted by leading organizations</h4>
                <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 30px;">
                    <img src="https://via.placeholder.com/150x60/0a2463/ffffff?text=Client+1" alt="Client Logo 1" class="hover-scale" style="height: 40px; filter: grayscale(100%); opacity: 0.7; transition: all 0.3s ease;">
                    <img src="https://via.placeholder.com/150x60/0a2463/ffffff?text=Client+2" alt="Client Logo 2" class="hover-scale" style="height: 40px; filter: grayscale(100%); opacity: 0.7; transition: all 0.3s ease;">
                    <img src="https://via.placeholder.com/150x60/0a2463/ffffff?text=Client+3" alt="Client Logo 3" class="hover-scale" style="height: 40px; filter: grayscale(100%); opacity: 0.7; transition: all 0.3s ease;">
                    <img src="https://via.placeholder.com/150x60/0a2463/ffffff?text=Client+4" alt="Client Logo 4" class="hover-scale" style="height: 40px; filter: grayscale(100%); opacity: 0.7; transition: all 0.3s ease;">
                    <img src="https://via.placeholder.com/150x60/0a2463/ffffff?text=Client+5" alt="Client Logo 5" class="hover-scale" style="height: 40px; filter: grayscale(100%); opacity: 0.7; transition: all 0.3s ease;">
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- New Section - Resources -->
  <section class="resources-section" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" data-aos="fade-up">Resources</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto;">Latest insights and financial updates</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="hover-float" style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; height: 200px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tax Planning Article" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 15px; left: 15px; background-color: var(--accent-color); color: var(--dark-color); padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; font-weight: 600;">
                            Article
                        </div>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Tax Planning Strategies for FY 2023-24</h4>
                        <p style="color: #666; margin-bottom: 20px;">Key considerations for individuals and businesses to optimize their tax position in the current financial year.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Read More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="hover-float" style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; height: 200px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="GST Update" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 15px; left: 15px; background-color: var(--accent-color); color: var(--dark-color); padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; font-weight: 600;">
                            Update
                        </div>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">Recent GST Changes and Their Impact</h4>
                        <p style="color: #666; margin-bottom: 20px;">Analysis of the latest GST amendments and how they affect different business sectors.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Read More <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="hover-float" style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); height: 100%;">
                    <div style="position: relative; height: 200px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Webinar" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 15px; left: 15px; background-color: var(--accent-color); color: var(--dark-color); padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; font-weight: 600;">
                            Webinar
                        </div>
                    </div>
                    <div style="padding: 25px;">
                        <h4 style="color: var(--primary-color); font-weight: 600; margin-bottom: 15px;">FDI in India: Opportunities & Challenges</h4>
                        <p style="color: #666; margin-bottom: 20px;">Join our experts as they discuss the evolving FDI landscape and regulatory considerations.</p>
                        <a href="#" style="color: var(--secondary-color); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center;">
                            Register Now <i class="fas fa-arrow-right ms-2" style="transition: all 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Contact CTA Section -->
  <section class="contact-cta">
    <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.1; z-index: 1;">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-hands-typing-on-a-computer-keyboard-3454-large.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" style="position: relative; z-index: 2;">
                <h2 class="glow" style="font-weight: 700; margin-bottom: 30px; font-size: 2.5rem; color: #000080;">Ready to Transform Your Financial Strategy?</h2>
                <p style="margin-bottom: 40px; font-size: 1.2rem; max-width: 700px; margin-left: auto; margin-right: auto;">Contact us today for a free initial consultation with one of our experts. We'll help you navigate India's financial landscape with confidence.</p>
                <button class="btn btn-glow" style="background-color: #000080; color: white; font-weight: 600; padding: 15px 40px; border-radius: 50px; border: none; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                    Get in Touch <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="contact-section" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <h2 class="section-title">Contact Us</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem;">Have questions about our services or need financial advice? Reach out to our team for personalized assistance.</p>
                
                <div class="contact-info" style="margin-bottom: 40px;">
                    <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 50px; height: 50px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Our Office</h5>
                            <p style="color: #666;">123 Financial District, Mumbai, Maharashtra 400001</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 50px; height: 50px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Phone</h5>
                            <p style="color: #666;">+91 98765 43210</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 15px;">
                        <div style="width: 50px; height: 50px; background-color: #e6f0ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5 style="color: var(--primary-color); font-weight: 600; margin-bottom: 5px;">Email</h5>
                            <p style="color: #666;">info@karthikaandassociates.com</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links" style="display: flex; gap: 15px;">
                    <a href="#" class="btn-glow" style="width: 50px; height: 50px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn-glow" style="width: 50px; height: 50px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="btn-glow" style="width: 50px; height: 50px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-glow" style="width: 50px; height: 50px; border-radius: 50%; background-color: #e6f0ff; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="contact-form hover-float">
                    <h3 style="color: var(--primary-color); font-weight: 600; margin-bottom: 25px;">Send Us a Message</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Subject">
                        <textarea class="form-control" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-primary w-100 btn-glow" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); border: none; padding: 12px; border-radius: 8px; font-weight: 600;">
                            Send Message <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>



  <!-- Back to Top Button -->
  <a href="#" class="btn btn-primary btn-glow" style="position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 99; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);">
      <i class="fas fa-arrow-up"></i>
  </a>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS (Animate On Scroll) -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- GSAP for advanced animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <script>
      // Initialize AOS
      AOS.init({
          duration: 800,
          easing: 'ease-in-out',
          once: true
      });
      
      // GSAP Animations
      gsap.registerPlugin(ScrollTrigger);
      
      // Animate elements on scroll
      gsap.utils.toArray(".feature-item").forEach(item => {
          gsap.from(item, {
              scrollTrigger: {
                  trigger: item,
                  start: "top 80%",
                  toggleActions: "play none none none"
              },
              opacity: 0,
              y: 50,
              duration: 0.8,
              ease: "power2.out"
          });
      });
      
      // Counter Animation
      function animateCounters() {
          const counters = document.querySelectorAll('.stat-number');
          const speed = 200;
          
          counters.forEach(counter => {
              const target = +counter.getAttribute('data-target');
              const count = +counter.innerText;
              const increment = target / speed;
              
              if(count < target) {
                  counter.innerText = Math.ceil(count + increment);
                  setTimeout(animateCounters, 1);
              } else {
                  counter.innerText = target;
              }
          });
      }
      
      // Start counter animation when stats section is in view
      ScrollTrigger.create({
          trigger: ".stats-section",
          start: "top 80%",
          onEnter: animateCounters,
          once: true
      });
      
      // Particle Animation
      function createParticles() {
          const particlesContainer = document.getElementById('particles-js');
          const particleCount = 30;
          
          for (let i = 0; i < particleCount; i++) {
              const particle = document.createElement('div');
              particle.classList.add('particle');
              
              // Random properties
              const size = Math.random() * 10 + 5;
              const posX = Math.random() * 100;
              const posY = Math.random() * 100;
              const delay = Math.random() * 5;
              const duration = Math.random() * 10 + 10;
              
              // Apply styles
              particle.style.width = `${size}px`;
              particle.style.height = `${size}px`;
              particle.style.left = `${posX}%`;
              particle.style.top = `${posY}%`;
              particle.style.background = `rgba(255, 255, 255, ${Math.random() * 0.5 + 0.1})`;
              particle.style.animationDelay = `${delay}s`;
              particle.style.animationDuration = `${duration}s`;
              
              particlesContainer.appendChild(particle);
          }
      }
      
      // Create particles when page loads
      window.addEventListener('load', createParticles);
      
      // Hover effects for buttons
      const buttons = document.querySelectorAll('.btn-glow');
      buttons.forEach(button => {
          button.addEventListener('mouseenter', function() {
              this.style.transform = 'translateY(-3px)';
              this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.2)';
          });
          button.addEventListener('mouseleave', function() {
              this.style.transform = 'translateY(0)';
              this.style.boxShadow = 'none';
          });
      });
      
      // Text glow effect on scroll
      gsap.to(".glow", {
          scrollTrigger: {
              trigger: ".contact-cta",
              start: "top center",
              toggleActions: "play none none none"
          },
          textShadow: "0 0 20px rgba(255, 215, 0, 0.9), 0 0 30px rgba(255, 215, 0, 0.5)",
          duration: 1,
          yoyo: true,
          repeat: -1
      });
      
      // Back to top button
      const backToTopButton = document.querySelector('.btn-glow[href="#"]');
      window.addEventListener('scroll', function() {
          if (window.pageYOffset > 300) {
              backToTopButton.style.opacity = '1';
              backToTopButton.style.visibility = 'visible';
          } else {
              backToTopButton.style.opacity = '0';
              backToTopButton.style.visibility = 'hidden';
          }
      });
      
      // Smooth scrolling for all links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
              
              document.querySelector(this.getAttribute('href')).scrollIntoView({
                  behavior: 'smooth'
              });
          });
      });
  </script>
</body>
</html>