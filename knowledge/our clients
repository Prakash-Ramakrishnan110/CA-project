<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clients | Karthika & Associates</title>
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
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-color) 100%);
            color: white;
            padding: 100px 0 60px;
            position: relative;
            overflow: hidden;
            margin-bottom: 60px;
        }
        
        .page-title {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 15px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .page-subtitle {
            font-weight: 400;
            font-size: 1.2rem;
            max-width: 700px;
            opacity: 0.9;
        }
        
        /* Client Section */
        .clients-section {
            padding: 80px 0;
        }
        
        .section-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }
        
        .client-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            background-color: white;
        }
        
        .client-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .client-card-img {
            height: 120px;
            object-fit: contain;
            width: 100%;
            padding: 30px;
            background-color: white;
        }
        
        .client-card-body {
            padding: 25px;
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
        }
        
        .client-card-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .client-card-text {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .client-industry {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--dark-color);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            background-color: #f9f9f9;
            padding: 80px 0;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            height: 100%;
        }
        
        .testimonial-text {
            font-style: italic;
            color: #555;
            margin-bottom: 25px;
            position: relative;
        }
        
        .testimonial-text:before {
            content: '"';
            font-size: 4rem;
            color: rgba(10, 36, 99, 0.1);
            position: absolute;
            top: -20px;
            left: -15px;
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid var(--accent-color);
        }
        
        .testimonial-author-name {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .testimonial-author-position {
            font-size: 0.9rem;
            color: #777;
        }
        
        /* Client Categories */
        .client-categories {
            margin-bottom: 50px;
        }
        
        .category-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        
        .category-btn {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid #ddd;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .category-btn:hover, .category-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .page-title {
                font-size: 2.4rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
                text-align: center;
            }
            
            .page-subtitle {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
            
            .section-title {
                text-align: center;
            }
            
            .section-title:after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        @media (max-width: 576px) {
            .page-title {
                font-size: 1.8rem;
            }
            
            .page-subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

  <!-- Clients Page Content -->
  <section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title" data-aos="fade-up">Our Valued Clients</h1>
                <p class="page-subtitle" data-aos="fade-up" data-aos-delay="100">We take pride in our diverse portfolio of clients across various industries, each with unique challenges that we help address with customized solutions.</p>
            </div>
        </div>
    </div>
  </section>

  <!-- Client Categories Filter -->
  <section class="client-categories">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="category-filter" data-aos="fade-up">
                    <button class="category-btn active" data-filter="all">All Industries</button>
                    <button class="category-btn" data-filter="technology">Technology</button>
                    <button class="category-btn" data-filter="manufacturing">Manufacturing</button>
                    <button class="category-btn" data-filter="finance">Finance</button>
                    <button class="category-btn" data-filter="healthcare">Healthcare</button>
                    <button class="category-btn" data-filter="retail">Retail</button>
                    <button class="category-btn" data-filter="startups">Startups</button>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Clients Grid Section -->
  <section class="clients-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Our Client Portfolio</h2>
        
        <div class="row">
            <!-- Client 1 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-category="technology">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/techcorp.com" alt="TechCorp" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">TechCorp Solutions</h3>
                        <p class="client-card-text">Global technology services provider with operations in 12 countries.</p>
                        <span class="client-industry">Technology</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 2 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-category="manufacturing">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/indusmfg.com" alt="Indus Manufacturing" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">Indus Manufacturing</h3>
                        <p class="client-card-text">Leading automotive parts manufacturer with $250M annual revenue.</p>
                        <span class="client-industry">Manufacturing</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 3 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-category="finance">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/globalbank.com" alt="GlobalBank" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">GlobalBank Financial</h3>
                        <p class="client-card-text">Multinational banking corporation with operations in Asia and Europe.</p>
                        <span class="client-industry">Finance</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 4 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-category="healthcare">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/medlife.com" alt="MedLife" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">MedLife Healthcare</h3>
                        <p class="client-card-text">Chain of multispecialty hospitals with 15 facilities across India.</p>
                        <span class="client-industry">Healthcare</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 5 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-category="retail">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/urbancart.com" alt="UrbanCart" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">UrbanCart Retail</h3>
                        <p class="client-card-text">E-commerce platform specializing in urban lifestyle products.</p>
                        <span class="client-industry">Retail</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 6 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-category="startups">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/finova.com" alt="Finova" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">Finova Technologies</h3>
                        <p class="client-card-text">Fintech startup revolutionizing digital payments in emerging markets.</p>
                        <span class="client-industry">Startup</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 7 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-category="technology">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/datacloud.com" alt="DataCloud" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">DataCloud Systems</h3>
                        <p class="client-card-text">Enterprise cloud computing and data analytics solutions provider.</p>
                        <span class="client-industry">Technology</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 8 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-category="manufacturing">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/greenpack.com" alt="GreenPack" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">GreenPack Materials</h3>
                        <p class="client-card-text">Sustainable packaging solutions manufacturer with global clients.</p>
                        <span class="client-industry">Manufacturing</span>
                    </div>
                </div>
            </div>
            
            <!-- Client 9 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-category="finance">
                <div class="client-card">
                    <img src="https://logo.clearbit.com/capvest.com" alt="CapitalVest" class="client-card-img">
                    <div class="client-card-body">
                        <h3 class="client-card-title">CapitalVest Advisors</h3>
                        <p class="client-card-text">Boutique investment firm specializing in emerging markets.</p>
                        <span class="client-industry">Finance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonial-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Client Testimonials</h2>
        
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <p class="testimonial-text">Karthika and Associates provided exceptional guidance during our international expansion. Their tax structuring advice saved us millions in potential liabilities.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah Chen" class="testimonial-author-img">
                        <div>
                            <h4 class="testimonial-author-name">Sarah Chen</h4>
                            <p class="testimonial-author-position">CFO, TechCorp Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <p class="testimonial-text">Their team's deep understanding of manufacturing sector regulations helped us streamline compliance across all our facilities.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rajiv Mehra" class="testimonial-author-img">
                        <div>
                            <h4 class="testimonial-author-name">Rajiv Mehra</h4>
                            <p class="testimonial-author-position">Director, Indus Manufacturing</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <p class="testimonial-text">As a startup, we needed advisors who could grow with us. Karthika's team has been instrumental in our funding rounds and financial strategy.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Malhotra" class="testimonial-author-img">
                        <div>
                            <h4 class="testimonial-author-name">Priya Malhotra</h4>
                            <p class="testimonial-author-position">CEO, Finova Technologies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS (Animate On Scroll) -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      // Initialize AOS
      AOS.init({
          duration: 800,
          easing: 'ease-in-out',
          once: true
      });
      
      // Client Filter Functionality
      document.addEventListener('DOMContentLoaded', function() {
          const filterButtons = document.querySelectorAll('.category-btn');
          const clientCards = document.querySelectorAll('[data-category]');
          
          filterButtons.forEach(button => {
              button.addEventListener('click', function() {
                  // Remove active class from all buttons
                  filterButtons.forEach(btn => btn.classList.remove('active'));
                  
                  // Add active class to clicked button
                  this.classList.add('active');
                  
                  const filterValue = this.getAttribute('data-filter');
                  
                  clientCards.forEach(card => {
                      if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                          card.style.display = 'block';
                      } else {
                          card.style.display = 'none';
                      }
                  });
              });
          });
      });
  </script>
</body>
</html>