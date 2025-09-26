// Services Data
        const services = [
            {
                name: "Tourism & Hospitality",
                description: "Register and promote tourism centers, manage hospitality businesses, and access tourism development support in Ekiti State.",
                icon: "fas fa-map-marked-alt"
            },
            {
                name: "Land Services & Title Registration",
                description: "Apply for land titles, conduct searches, and complete property registration processes with our streamlined digital platform.",
                icon: "fas fa-map-marked-alt"
            },
            {
                name: "Health Insurance Registration",
                description: "Enroll in the state health insurance scheme, make payments, and access healthcare services across Ekiti State.",
                icon: "fas fa-heartbeat"
            },
            {
                name: "Business Registration & Licensing",
                description: "Register your business, apply for permits, and access support services for entrepreneurs and established businesses.",
                icon: "fas fa-briefcase"
            },
            {
                name: "Building Approvals & Permits",
                description: "Submit building plans, apply for construction permits, and get approvals for your development projects.",
                icon: "fas fa-hard-hat"
            },
            {
                name: "Environmental Compliance",
                description: "Apply for environmental impact assessments, waste management permits, and environmental compliance certificates.",
                icon: "fas fa-leaf"
            },
            {
                name: "Investment Promotion",
                description: "Access investment opportunities, incentives, and support services for local and international investors.",
                icon: "fas fa-chart-line"
            },
            {
                name: "Job Creation & Employment Services",
                description: "Find employment opportunities, register for skills development programs, and access career support services.",
                icon: "fas fa-user-tie"
            },
            {
                name: "Signage & Advertisement Permits",
                description: "Apply for outdoor advertising permits, signage approvals, and manage your advertising compliance.",
                icon: "fas fa-ad"
            },
            {
                name: "Public Utilities & Infrastructure",
                description: "Access services related to water, electricity, roads, and other public infrastructure projects across the state.",
                icon: "fas fa-tools"
            },
            {
                name: "Legislative Services",
                description: "Access legislative documents, track bills, and engage with the state assembly's proceedings and services.",
                icon: "fas fa-gavel"
            },
            {
                name: "Microcredit & Financial Services",
                description: "Apply for microcredit facilities, business loans, and access financial support programs for SMEs.",
                icon: "fas fa-hand-holding-usd"
            }
        ];

        // Function to generate service cards
        function generateServiceCards() {
            const servicesSlider = document.getElementById('servicesSlider');
            
            services.forEach(service => {
                const card = document.createElement('div');
                card.className = 'service-card';
                
                card.innerHTML = `
                    <div class="card-header">
                        <h5><i class="${service.icon}"></i></h5>
                        <h3>${service.name}</h3>
                    </div>
                    <div class="card-body">
                        <p>${service.description}</p>
                        <div class="card-actions">
                            <a href="#" class="card-btn card-btn-primary">Access Service</a>
                            <a href="#" class="card-btn card-btn-secondary">Learn More</a>
                        </div>
                    </div>
                `;
                
                servicesSlider.appendChild(card);
            });
        }

        // Dashboard Management
        let currentDashboard = null;

        function showDashboard(dashboardType) {
            // Hide all dashboards and landing page
            document.getElementById('landing-page').style.display = 'none';
            document.getElementById('citizen-dashboard').classList.remove('active');
            document.getElementById('mda-dashboard').classList.remove('active');
            
            // Show selected dashboard
            if (dashboardType === 'citizen') {
                document.getElementById('citizen-dashboard').classList.add('active');
                currentDashboard = 'citizen';
            } else if (dashboardType === 'mda') {
                document.getElementById('mda-dashboard').classList.add('active');
                currentDashboard = 'mda';
            } else if (dashboardType === 'demo') {
                // For demo, show citizen dashboard but with option to switch
                document.getElementById('citizen-dashboard').classList.add('active');
                currentDashboard = 'citizen';
                // Add demo mode indicator
            }
            
            // Close login modal
            document.getElementById('login-modal').classList.remove('active');
        }

        function showLandingPage() {
            document.getElementById('landing-page').style.display = 'block';
            document.getElementById('citizen-dashboard').classList.remove('active');
            document.getElementById('mda-dashboard').classList.remove('active');
            currentDashboard = null;
        }

        function toggleMobileMenu() {
            if (currentDashboard === 'citizen') {
                document.getElementById('citizen-sidebar').classList.toggle('active');
            } else if (currentDashboard === 'mda') {
                document.getElementById('mda-sidebar').classList.toggle('active');
            }
        }

        // Initialize the page
        $(document).ready(function() {
            generateServiceCards();
            
            // Initialize hero carousel
            $('.hero-carousel').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: true,
                pauseOnHover: false
            });
            
            // Initialize services slider with red indicators
            $('#servicesSlider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '0px',
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            centerMode: false,
                            arrows: false
                        }
                    }
                ]
            });
            
            // Initialize testimonial slider
            $('#testimonialSlider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                arrows: false
            });
            
            // FAQ functionality
            $('.faq-question').click(function() {
                $(this).parent().toggleClass('active');
                $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
            });
            
            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 70
                    }, 1000);
                }
            });
            
            // Add animation to elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observe elements for animation
            document.querySelectorAll('.feature-card, .stat-item, .news-card').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(element);
            });

            // Login modal functionality
            document.getElementById('login-btn').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('login-modal').classList.add('active');
            });

            document.getElementById('register-btn').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('login-modal').classList.add('active');
            });

            document.getElementById('cta-register').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('login-modal').classList.add('active');
            });

            document.getElementById('close-modal').addEventListener('click', function() {
                document.getElementById('login-modal').classList.remove('active');
            });

            // Login option selection
            document.querySelectorAll('.login-option').forEach(option => {
                option.addEventListener('click', function() {
                    const role = this.getAttribute('data-role');
                    showDashboard(role);
                });
            });

            // Logout functionality
            document.getElementById('citizen-logout').addEventListener('click', function() {
                showLandingPage();
            });

            document.getElementById('mda-logout').addEventListener('click', function() {
                showLandingPage();
            });

            // Mobile menu functionality
            document.getElementById('citizen-menu-btn').addEventListener('click', function() {
                toggleMobileMenu();
            });

            document.getElementById('mda-menu-btn').addEventListener('click', function() {
                toggleMobileMenu();
            });

            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === document.getElementById('login-modal')) {
                    document.getElementById('login-modal').classList.remove('active');
                }
            });
        });