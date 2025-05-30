<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Karthika and Associates | Chartered Accountants</title>
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
            background-color: #f8f9fa;
            color: var(--dark-blue);
        }
        
        .contact-hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 60px;
            text-align: center;
        }
        
        .contact-hero h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .contact-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 80px;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .info-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: var(--transition);
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .info-card h3 {
            color: var(--primary-blue);
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .info-card h3 i {
            margin-right: 15px;
            font-size: 1.5rem;
            color: var(--gold);
        }
        
        .contact-item {
            display: flex;
            margin-bottom: 15px;
        }
        
        .contact-item i {
            color: var(--saffron);
            margin-right: 15px;
            font-size: 1.1rem;
            margin-top: 3px;
        }
        
        .contact-item a {
            color: var(--dark-blue);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .contact-item a:hover {
            color: var(--secondary-blue);
        }
        
        .form-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }
        
        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-card h2 {
            color: var(--primary-blue);
            margin-bottom: 25px;
            font-weight: 600;
        }
        
        .form-control {
            height: 50px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--secondary-blue);
            box-shadow: 0 0 0 0.25rem rgba(42, 111, 219, 0.25);
        }
        
        textarea.form-control {
            height: 150px;
            resize: none;
        }
        
        .btn-submit {
            background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
            color: var(--navy-blue);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 80px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .business-hours {
            list-style: none;
            padding: 0;
        }
        
        .business-hours li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .business-hours li:last-child {
            border-bottom: none;
        }
        
        .day {
            font-weight: 500;
        }
        
        .time {
            color: var(--secondary-blue);
        }
        
        /* New styles for additional content */
        .service-areas {
            margin-bottom: 60px;
        }
        
        .service-areas h2 {
            color: var(--primary-blue);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        
        .area-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: var(--transition);
            height: 100%;
        }
        
        .area-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .area-card h3 {
            color: var(--saffron);
            margin-bottom: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .area-card h3 i {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        .area-card ul {
            padding-left: 20px;
        }
        
        .area-card li {
            margin-bottom: 8px;
        }
        
        .emergency-contact {
            background-color: var(--light-blue);
            border-left: 4px solid var(--saffron);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin-bottom: 30px;
        }
        
        .emergency-contact h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .testimonials {
            background-color: var(--light-blue);
            padding: 60px 0;
            margin-bottom: 60px;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            font-size: 80px;
            color: rgba(42, 111, 219, 0.1);
            position: absolute;
            top: 10px;
            left: 15px;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .testimonial-role {
            font-size: 0.9rem;
            color: #666;
        }
        
        .faq-section {
            margin-bottom: 60px;
        }
        
        .faq-item {
            margin-bottom: 15px;
        }
        
        .faq-question {
            background-color: white;
            padding: 15px 20px;
            border-radius: 8px;
            font-weight: 600;
            color: var(--primary-blue);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }
        
        .faq-question:hover {
            background-color: var(--light-blue);
        }
        
        .faq-question i {
            transition: var(--transition);
        }
        
        .faq-question.collapsed i {
            transform: rotate(0deg);
        }
        
        .faq-question:not(.collapsed) i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 8px 8px;
            margin-top: 2px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-blue);
            color: var(--primary-blue);
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .contact-hero {
                padding: 60px 0;
            }
            
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .contact-section {
                flex-direction: column;
                gap: 30px;
            }
            
            .info-card, .form-card {
                padding: 20px;
            }
            
            .testimonials {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation would be included here from your main template -->
    
    <div class="contact-hero">
        <div class="container">
            <h1>Get in Touch With Us</h1>
            <p>We're here to help and answer any questions you might have. Our team of chartered accountants looks forward to assisting you with your financial needs.</p>
        </div>
    </div>

    <div class="contact-container">
        <div class="contact-section">
            <div class="contact-info">
                <div class="info-card">
                    <h3><i class="fas fa-map-marker-alt"></i> Our Office</h3>
                    <div class="contact-item">
                        <i class="fas fa-building"></i>
                        <div>
                            <p>Karthika and Associates</p>
                            <p>123 Financial District, 5th Floor</p>
                            <p>Sankari, Salem, Tamil Nadu 637301</p>
                            <p>India</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-directions"></i>
                        <a href="https://maps.google.com?q=Karthika+and+Associates+Sankari+Salem" target="_blank">Get Directions</a>
                    </div>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-clock"></i> Business Hours</h3>
                    <ul class="business-hours">
                        <li>
                            <span class="day">Monday - Friday:</span>
                            <span class="time">9:00 AM - 6:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Saturday:</span>
                            <span class="time">10:00 AM - 2:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Sunday:</span>
                            <span class="time">Closed</span>
                        </li>
                        <li>
                            <span class="day">Public Holidays:</span>
                            <span class="time">Closed</span>
                        </li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-phone-alt"></i> Contact Details</h3>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+914277123456">+91 42 7712 3456</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-mobile-alt"></i>
                        <a href="tel:+919876543210">+91 98765 43210</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@karthikaassociates.com">info@karthikaassociates.com</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <a href="https://www.karthikaassociates.com" target="_blank">www.karthikaassociates.com</a>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://www.facebook.com/karthikaassociates" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/karthika-associates" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/karthikaassoc" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://wa.me/919876543210" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="emergency-contact">
                    <h3><i class="fas fa-exclamation-circle"></i> Urgent Tax Matters</h3>
                    <p>For urgent tax-related matters outside business hours, please contact our emergency helpline:</p>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+919876543211">+91 98765 43211</a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <div class="form-card">
                    <h2>Send Us a Message</h2>
                    <form id="contactForm" action="https://formsubmit.co/info@karthikaassociates.com" method="POST">
                        <input type="hidden" name="_subject" value="New Contact Form Submission">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="https://www.karthikaassociates.com/thank-you.html">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                        <select class="form-control" name="service">
                            <option value="" disabled selected>Select Service Interested In</option>
                            <option value="Auditing">Auditing Services</option>
                            <option value="Taxation">Taxation Services</option>
                            <option value="Business Setup">Business Setup</option>
                            <option value="FDI">Foreign Direct Investment</option>
                            <option value="Other">Other Services</option>
                        </select>
                        <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="consentCheck" required>
                            <label class="form-check-label" for="consentCheck">
                                I consent to Karthika and Associates collecting my details through this form
                            </label>
                        </div>
                        <button type="submit" class="btn-submit">Send Message <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                
                <div class="info-card mt-4">
                    <h3><i class="fas fa-file-alt"></i> Document Submission</h3>
                    <p>For secure document submission, please use our encrypted upload portal:</p>
                    <a href="https://secure.karthikaassociates.com/upload" class="btn btn-primary w-100" target="_blank">
                        <i class="fas fa-cloud-upload-alt"></i> Upload Documents
                    </a>
                    <p class="small mt-2">Maximum file size: 25MB. Supported formats: PDF, DOC, XLS, JPG</p>
                </div>
            </div>
        </div>

        <div class="service-areas">
            <h2>Areas We Serve</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="area-card">
                        <h3><i class="fas fa-city"></i> Local Services</h3>
                        <p>We provide comprehensive accounting services throughout Tamil Nadu with a focus on:</p>
                        <ul>
                            <li>Sankari and surrounding areas</li>
                            <li>Salem district</li>
                            <li>Erode region</li>
                            <li>Namakkal district</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="area-card">
                        <h3><i class="fas fa-globe-asia"></i> National Services</h3>
                        <p>Our national network covers major Indian cities including:</p>
                        <ul>
                            <li>Chennai</li>
                            <li>Bangalore</li>
                            <li>Hyderabad</li>
                            <li>Mumbai</li>
                            <li>Delhi NCR</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="area-card">
                        <h3><i class="fas fa-plane"></i> International Services</h3>
                        <p>We assist international clients with:</p>
                        <ul>
                            <li>FDI compliance</li>
                            <li>Cross-border taxation</li>
                            <li>NRI financial services</li>
                            <li>International business setup</li>
                            <li>Transfer pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.123456789012!2d78.12345678901234!3d11.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf123456789ab%3A0x1234567890abcdef!2sKarthika%20and%20Associates!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="testimonials">
            <div class="container">
                <h2 class="text-center mb-5" style="color: var(--primary-blue);">What Our Clients Say</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">Karthika and Associates provided exceptional service during our business setup in India. Their knowledge of FDI regulations saved us months of paperwork.</p>
                            <div class="testimonial-author">Rajesh Kumar</div>
                            <div class="testimonial-role">CEO, Tech Solutions Pvt. Ltd.</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">As an NRI, I was confused about tax implications in India. The team guided me through every step and optimized my tax liabilities legally.</p>
                            <div class="testimonial-author">Priya Menon</div>
                            <div class="testimonial-role">NRI Client, USA</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <p class="testimonial-text">Their audit team identified several areas for cost savings in our manufacturing business. Professional, thorough, and highly recommended.</p>
                            <div class="testimonial-author">Vikram Singh</div>
                            <div class="testimonial-role">Director, ABC Manufacturing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2 class="text-center mb-5" style="color: var(--primary-blue);">Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                    What documents do I need for my first consultation?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq1" class="collapse faq-answer">
                    <p>For your first consultation, please bring any relevant financial documents including PAN card, previous tax returns, financial statements, and any specific documents related to your query. If you're unsure, just bring identification and we'll guide you on what else might be needed.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                    How do you charge for your services?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq2" class="collapse faq-answer">
                    <p>Our fees depend on the complexity and scope of work. We offer:</p>
                    <ul>
                        <li>Fixed fees for standard services like tax filing</li>
                        <li>Hourly rates for advisory services</li>
                        <li>Retainer arrangements for ongoing services</li>
                        <li>Project-based pricing for specific engagements</li>
                    </ul>
                    <p>We provide transparent quotes after understanding your requirements.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                    Can you help with GST registration and compliance?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq3" class="collapse faq-answer">
                    <p>Yes, we offer comprehensive GST services including:</p>
                    <ul>
                        <li>New GST registration</li>
                        <li>Monthly/quarterly return filing</li>
                        <li>GST audit and reconciliation</li>
                        <li>Representation before GST authorities</li>
                        <li>Advisory on GST rates and compliance</li>
                    </ul>
                    <p>We stay updated with all GST amendments to ensure your business remains compliant.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                    What makes your firm different from other CAs?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq4" class="collapse faq-answer">
                    <p>Karthika and Associates stands out through:</p>
                    <ul>
                        <li><strong>Specialized Expertise:</strong> Deep knowledge in FDI, international taxation, and NRI services</li>
                        <li><strong>Technology Integration:</strong> Secure client portals and digital processes</li>
                        <li><strong>Personalized Service:</strong> Dedicated relationship managers for each client</li>
                        <li><strong>Proactive Approach:</strong> We identify opportunities and risks before they become issues</li>
                        <li><strong>Transparent Pricing:</strong> No hidden fees or surprises</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">
                    How can I schedule an appointment?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="faq5" class="collapse faq-answer">
                    <p>You can schedule an appointment through:</p>
                    <ul>
                        <li>Our online booking system at <a href="https://www.karthikaassociates.com/appointments" target="_blank">www.karthikaassociates.com/appointments</a></li>
                        <li>Calling our office at +91 42 7712 3456 during business hours</li>
                        <li>WhatsApp message to +91 98765 43210</li>
                        <li>Email to appointments@karthikaassociates.com</li>
                    </ul>
                    <p>We offer in-person, phone, and video consultations based on your preference.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer would be included here from your main template -->

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            // You can add form validation here
            console.log('Form submitted');
            // In a real implementation, you might want to prevent default and use AJAX
            // e.preventDefault();
            // Then handle the form submission with fetch or XMLHttpRequest
        });
        
        // Smooth scrolling for FAQ items
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                // Smooth scroll to the question if it's being expanded
                if (this.classList.contains('collapsed')) {
                    this.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            });
        });
    </script>
</body>
</html>