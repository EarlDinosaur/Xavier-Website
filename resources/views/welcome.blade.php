<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XAVIER - Fungi Disease Diagnostic Tool</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/xavier.css') }}">
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="logo-text">
                            <h1>XAVIER</h1>
                            <p>Fungi Disease Diagnostic Tool</p>
                        </div>
                    </div>
                    <nav class="nav-links">
                        <a href="#about">ABOUT</a>
                        <a href="#thesis">THESIS PAPER</a>
                        <a href="#terms">TERMS AND CONDITION</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Your Fungi <span>Assistant</span> is Here</h2>
                    <p>Predict multiple fungal skin diseases quickly and accurately with XAVIER AI.</p>
                    <p class="highlight">Symptoms and explanations? We've got you covered!</p>
                    <a href="#analyze" class="cta-button">Analyze Your Skin</a>
                </div>
                <div class="hero-images">
                    <div class="hero-image">
                        <div style="background: #f1f5f9; height: 120px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 48px;">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <p>Medical Examination</p>
                    </div>
                    <div class="hero-image">
                        <div style="background: #f1f5f9; height: 120px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 48px;">
                            <i class="fas fa-search"></i>
                        </div>
                        <p>Detailed Analysis</p>
                    </div>
                    <div class="hero-image">
                        <div style="background: #f1f5f9; height: 120px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 48px;">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <p>Professional Care</p>
                    </div>
                    <div class="hero-image">
                        <div style="background: #f1f5f9; height: 120px; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 48px;">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <p>Health Monitoring</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works section -->
        <section class="how-it-works">
            <div class="container">
                <h2 class="section-title">How does it work?</h2>
                <div class="steps-grid">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <h3>We ask some question</h3>
                        <p>Answer a few simple questions about your symptoms and skin condition</p>
                    </div>
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>We analyze your infection</h3>
                        <p>Our AI analyzes your responses and examines the patterns</p>
                    </div>
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>We give detailed information</h3>
                        <p>Receive comprehensive analysis and treatment recommendations</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Diseases section -->
        <section class="diseases">
            <div class="container">
                <h2 class="section-title">Fungal skin diseases to be detected in this tool:</h2>
                <div class="diseases-grid">
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-foot-print"></i>
                        </div>
                        <div class="disease-name">Athlete's Foot</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <div class="disease-name">Jock Itch</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="disease-name">Ringworm</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="disease-name">Tinea Nigra</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-toenail"></i>
                        </div>
                        <div class="disease-name">Onychomycosis</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="disease-name">Tinea versicolor</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-thermometer-half"></i>
                        </div>
                        <div class="disease-name">Intertrigo</div>
                    </div>
                    <div class="disease-card">
                        <div class="disease-image">
                            <i class="fas fa-mouth"></i>
                        </div>
                        <div class="disease-name">Oral Thrush</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section class="contact">
            <div class="container">
                <h2 class="section-title">Contact Us</h2>
                <p style="text-align: center; color: #cbd5e1; margin-bottom: 50px; font-size: 18px;">
                    Any question or remarks? Just write us a message!
                </p>
                <div class="contact-container">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p>Say something to start a live chat!</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+91 86193XXXXX</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>demo@gmail.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>VIT Bhopal University, Kotri Kalan, Ashta, Near, Indore Road, Bhopal, Madhya Pradesh 466114</span>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Select Subject?</label>
                                <div class="radio-group">
                                    <div class="radio-option">
                                        <input type="radio" id="general" name="subject" value="general" required>
                                        <label for="general">General Inquiries</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="technical" name="subject" value="technical">
                                        <label for="technical">Technical Inquiries</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="medical" name="subject" value="medical">
                                        <label for="medical">Medical Disclaimer</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="privacy" name="subject" value="privacy">
                                        <label for="privacy">Data Privacy and Security</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" placeholder="Write your message.." required></textarea>
                            </div>
                            
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <h3>XAVIER</h3>
                        <p>Don't wait for symptoms - take control of your health with early risk assessment.</p>
                    </div>
                    
                    <div class="footer-links">
                        <h4>Landings</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links">
                        <h4>Socials</h4>
                        <ul>
                            <li><a href="#linkedin">LinkedIn</a></li>
                            <li><a href="#github">Github</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    © 2025 AI Rights Reserved
                </div>
            </div>
        </footer>
    </body>
</html>
