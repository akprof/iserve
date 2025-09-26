<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNexus - Complete School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --success: #4cc9f0;
            --warning: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --admin: #7209b7;
            --teacher: #f8961e;
            --parent: #43aa8b;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--gradient);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: 0.5s;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 15px 5%;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: #4cc9f0;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            padding: 5px 10px;
            border-radius: 20px;
        }

        nav ul li a:hover, nav ul li a.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            border: none;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 600px;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .hero-image {
            position: absolute;
            right: 5%;
            bottom: 0;
            width: 50%;
            max-width: 700px;
            z-index: 0;
        }

        /* Features Section */
        .features {
            padding: 100px 5%;
            background: rgba(255, 255, 255, 0.05);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
            backdrop-filter: blur(10px);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #4cc9f0;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Dashboard Preview */
        .dashboard-preview {
            padding: 100px 5%;
            text-align: center;
        }

        .dashboard-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 50px;
        }

        .dashboard-card {
            width: 350px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            color: var(--dark);
        }

        .dashboard-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .dashboard-header {
            padding: 20px;
            color: white;
            text-align: left;
        }

        .dashboard-header.admin {
            background: var(--admin);
        }

        .dashboard-header.teacher {
            background: var(--teacher);
        }

        .dashboard-header.parent {
            background: var(--parent);
        }

        .dashboard-header h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .dashboard-content {
            padding: 20px;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .dashboard-features {
            list-style: none;
            text-align: left;
            margin: 15px 0;
        }

        .dashboard-features li {
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .dashboard-features li:last-child {
            border-bottom: none;
        }

        .dashboard-features li i {
            margin-right: 10px;
            color: var(--primary);
        }

        .btn-dashboard {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn-dashboard.admin {
            background: var(--admin);
            color: white;
        }

        .btn-dashboard.teacher {
            background: var(--teacher);
            color: white;
        }

        .btn-dashboard.parent {
            background: var(--parent);
            color: white;
        }

        .btn-dashboard:hover {
            opacity: 0.9;
            transform: translateY(-3px);
        }

        /* Dashboard Views */
        .dashboard-view {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 2000;
            overflow-y: auto;
            display: none;
            color: var(--dark);
        }

        .dashboard-view.active {
            display: block;
        }

        .dashboard-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            background: var(--primary);
            color: white;
        }

        .dashboard-nav h2 {
            display: flex;
            align-items: center;
        }

        .dashboard-nav h2 i {
            margin-right: 10px;
        }

        .close-dashboard {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .close-dashboard:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .dashboard-container {
            padding: 30px 5%;
        }

        /* Dashboard Common Styles */
        .dashboard-header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .dashboard-title {
            font-size: 1.8rem;
            color: var(--dark);
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--primary);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card.admin {
            border-left-color: var(--admin);
        }

        .stat-card.teacher {
            border-left-color: var(--teacher);
        }

        .stat-card.parent {
            border-left-color: var(--parent);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 10px 0;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .stat-icon {
            font-size: 2rem;
            float: right;
            opacity: 0.2;
        }

        .dashboard-content-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .main-content {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .section-title-dash {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--dark);
            display: flex;
            align-items: center;
        }

        .section-title-dash i {
            margin-right: 10px;
            color: var(--primary);
        }

        .chart-container {
            height: 300px;
            margin-bottom: 30px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .data-table th {
            background: #f8f9fa;
            font-weight: 600;
        }

        .data-table tr:hover {
            background: #f8f9fa;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-success {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .badge-warning {
            background: #fff3e0;
            color: #ef6c00;
        }

        .badge-danger {
            background: #ffebee;
            color: #c62828;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .widget {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .notification-item {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
        }

        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .action-btn {
            background: #f8f9fa;
            border: none;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .action-btn i {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .action-btn:hover {
            background: var(--primary);
            color: white;
        }

        .action-btn:hover i {
            color: white;
        }

        .calendar-widget .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            text-align: center;
        }

        .calendar-day {
            padding: 10px;
            border-radius: 50%;
        }

        .calendar-day.active {
            background: var(--primary);
            color: white;
        }

        .event-item {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .event-item:last-child {
            border-bottom: none;
        }

        .event-date {
            font-weight: 600;
            color: var(--primary);
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        .btn-sm {
            padding: 8px 15px;
            font-size: 0.9rem;
        }

        .tab-container {
            margin-bottom: 30px;
        }

        .tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
        }

        .tab.active {
            border-bottom: 3px solid var(--primary);
            font-weight: 600;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.2);
            padding: 50px 5% 20px;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .copyright {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero-image {
                width: 60%;
            }

            .dashboard-content-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .hero {
                flex-direction: column;
                text-align: center;
                padding-top: 100px;
            }
            
            .hero-content {
                max-width: 100%;
            }
            
            .hero-btns {
                justify-content: center;
            }
            
            .hero-image {
                position: relative;
                width: 100%;
                margin-top: 50px;
            }
            
            .dashboard-cards {
                flex-direction: column;
                align-items: center;
            }

            .stats-cards {
                grid-template-columns: 1fr;
            }
            
            .quick-actions {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .btn {
                padding: 8px 20px;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>EduNexus</span>
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#dashboards">Dashboards</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <button class="btn btn-outline">Login</button>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Transform Your School Management with EduNexus</h1>
            <p>An all-in-one platform designed to streamline administration, enhance teaching, and connect parents with their children's education journey.</p>
            <div class="hero-btns">
                <button class="btn btn-primary">Watch Demo</button>
                <button class="btn btn-outline">Learn More</button>
            </div>
            <div class="stats">
                <div style="display: flex; gap: 30px;">
                    <div>
                        <h3>500+</h3>
                        <p>Schools Trust Us</p>
                    </div>
                    <div>
                        <h3>50K+</h3>
                        <p>Active Users</p>
                    </div>
                    <div>
                        <h3>98%</h3>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <svg viewBox="0 0 500 400" xmlns="http://www.w3.org/2000/svg">
                <path d="M250,50 C350,30 450,80 450,150 C450,220 380,280 250,350 C120,280 50,220 50,150 C50,80 150,30 250,50 Z" fill="rgba(255,255,255,0.1)"/>
                <circle cx="250" cy="200" r="120" fill="rgba(255,255,255,0.05)"/>
                <rect x="150" y="120" width="200" height="160" rx="10" fill="rgba(255,255,255,0.8)"/>
                <rect x="170" y="140" width="160" height="20" rx="5" fill="#4361ee"/>
                <rect x="170" y="180" width="100" height="10" rx="5" fill="#ccc"/>
                <rect x="170" y="200" width="120" height="10" rx="5" fill="#ccc"/>
                <rect x="170" y="220" width="80" height="10" rx="5" fill="#ccc"/>
                <circle cx="300" cy="200" r="30" fill="#4cc9f0"/>
                <rect x="280" y="240" width="40" height="30" rx="5" fill="#43aa8b"/>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h2 class="section-title">Powerful Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>Centralized Dashboard</h3>
                <p>Get a holistic view of your institution's performance with intuitive analytics and reporting.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Student Management</h3>
                <p>Efficiently manage student records, attendance, and academic progress all in one place.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Teacher Portal</h3>
                <p>Empower educators with tools for lesson planning, grading, and communication.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Parent Engagement</h3>
                <p>Keep parents informed and involved with real-time updates on their child's progress.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Fee Management</h3>
                <p>Simplify fee collection, tracking, and reporting with automated systems.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobile Friendly</h3>
                <p>Access all features on any device with our responsive design and mobile app.</p>
            </div>
        </div>
    </section>

    <!-- Dashboard Preview -->
    <section class="dashboard-preview" id="dashboards">
        <h2 class="section-title">Interactive Dashboards</h2>
        <p>Experience our tailored interfaces designed for different user roles</p>
        
        <div class="dashboard-cards">
            <!-- Admin Dashboard Card -->
            <div class="dashboard-card">
                <div class="dashboard-header admin">
                    <h3><i class="fas fa-cog"></i> Admin Dashboard</h3>
                    <p>Complete school management</p>
                </div>
                <div class="dashboard-content">
                    <div class="dashboard-stats">
                        <div class="stat">
                            <div class="stat-value">1,247</div>
                            <div class="stat-label">Students</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">68</div>
                            <div class="stat-label">Teachers</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">94%</div>
                            <div class="stat-label">Attendance</div>
                        </div>
                    </div>
                    <ul class="dashboard-features">
                        <li><i class="fas fa-check"></i> Student & Staff Management</li>
                        <li><i class="fas fa-check"></i> Financial Analytics</li>
                        <li><i class="fas fa-check"></i> School-wide Reports</li>
                    </ul>
                    <button class="btn-dashboard admin" data-dashboard="admin">Explore Admin Dashboard</button>
                </div>
            </div>
            
            <!-- Teacher Dashboard Card -->
            <div class="dashboard-card">
                <div class="dashboard-header teacher">
                    <h3><i class="fas fa-chalkboard-teacher"></i> Teacher Dashboard</h3>
                    <p>Classroom management tools</p>
                </div>
                <div class="dashboard-content">
                    <div class="dashboard-stats">
                        <div class="stat">
                            <div class="stat-value">142</div>
                            <div class="stat-label">Students</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Classes</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">82%</div>
                            <div class="stat-label">Avg. Grade</div>
                        </div>
                    </div>
                    <ul class="dashboard-features">
                        <li><i class="fas fa-check"></i> Grade Management</li>
                        <li><i class="fas fa-check"></i> Lesson Planning</li>
                        <li><i class="fas fa-check"></i> Attendance Tracking</li>
                    </ul>
                    <button class="btn-dashboard teacher" data-dashboard="teacher">Explore Teacher Dashboard</button>
                </div>
            </div>
            
            <!-- Parent Dashboard Card -->
            <div class="dashboard-card">
                <div class="dashboard-header parent">
                    <h3><i class="fas fa-user-friends"></i> Parent Dashboard</h3>
                    <p>Stay connected to your child</p>
                </div>
                <div class="dashboard-content">
                    <div class="dashboard-stats">
                        <div class="stat">
                            <div class="stat-value">96%</div>
                            <div class="stat-label">Attendance</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">A-</div>
                            <div class="stat-label">Avg. Grade</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">3</div>
                            <div class="stat-label">New Updates</div>
                        </div>
                    </div>
                    <ul class="dashboard-features">
                        <li><i class="fas fa-check"></i> Progress Tracking</li>
                        <li><i class="fas fa-check"></i> Fee Payments</li>
                        <li><i class="fas fa-check"></i> Direct Messaging</li>
                    </ul>
                    <button class="btn-dashboard parent" data-dashboard="parent">Explore Parent Dashboard</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Views -->
    
    <!-- Admin Dashboard -->
    <div class="dashboard-view" id="admin-dashboard-view">
        <div class="dashboard-nav">
            <h2><i class="fas fa-cog"></i> Administration Dashboard</h2>
            <button class="close-dashboard"><i class="fas fa-times"></i></button>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-header-section">
                <h1 class="dashboard-title"><i class="fas fa-tachometer-alt"></i> Administration Dashboard</h1>
                <div class="user-info">
                    <div class="avatar">A</div>
                    <div>
                        <div>Dr. Sarah Johnson</div>
                        <div style="font-size: 0.9rem; color: #6c757d;">Principal</div>
                    </div>
                </div>
            </div>

            <div class="stats-cards">
                <div class="stat-card admin">
                    <div class="stat-label">Total Students</div>
                    <div class="stat-value">1,247</div>
                    <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                </div>
                <div class="stat-card admin">
                    <div class="stat-label">Teaching Staff</div>
                    <div class="stat-value">68</div>
                    <div class="stat-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                </div>
                <div class="stat-card admin">
                    <div class="stat-label">Attendance Today</div>
                    <div class="stat-value">94%</div>
                    <div class="stat-icon"><i class="fas fa-clipboard-check"></i></div>
                </div>
                <div class="stat-card admin">
                    <div class="stat-label">Fee Collection</div>
                    <div class="stat-value">87%</div>
                    <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
                </div>
            </div>

            <div class="tab-container">
                <div class="tabs">
                    <div class="tab active" data-tab="overview">Overview</div>
                    <div class="tab" data-tab="students">Student Management</div>
                    <div class="tab" data-tab="staff">Staff Management</div>
                    <div class="tab" data-tab="finance">Finance</div>
                    <div class="tab" data-tab="reports">Reports</div>
                </div>

                <!-- Overview Tab -->
                <div class="tab-content active" id="overview">
                    <div class="dashboard-content-section">
                        <div class="main-content">
                            <h2 class="section-title-dash"><i class="fas fa-chart-line"></i> Performance Analytics</h2>
                            <div class="chart-container">
                                <canvas id="adminChart"></canvas>
                            </div>

                            <h2 class="section-title-dash"><i class="fas fa-list"></i> Recent Activities</h2>
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Activity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15 Oct 2023</td>
                                        <td>Mid-term examination schedule published</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>14 Oct 2023</td>
                                        <td>Staff meeting for curriculum planning</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>13 Oct 2023</td>
                                        <td>Parent-teacher meeting for Grade 10</td>
                                        <td><span class="badge badge-warning">In Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>12 Oct 2023</td>
                                        <td>School infrastructure maintenance</td>
                                        <td><span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="section-title-dash"><i class="fas fa-bell"></i> Notifications</h2>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-exclamation-circle"></i></div>
                                    <div>
                                        <div>5 Pending fee approvals</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">2 hours ago</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-check-circle"></i></div>
                                    <div>
                                        <div>Teacher attendance submitted</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Today, 8:30 AM</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-calendar-alt"></i></div>
                                    <div>
                                        <div>Sports day event next week</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Yesterday</div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <h2 class="section-title-dash"><i class="fas fa-bolt"></i> Quick Actions</h2>
                                <div class="quick-actions">
                                    <div class="action-btn">
                                        <i class="fas fa-user-plus"></i>
                                        <span>Add Student</span>
                                    </div>
                                    <div class="action-btn">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                        <span>Fee Reports</span>
                                    </div>
                                    <div class="action-btn">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Attendance</span>
                                    </div>
                                    <div class="action-btn">
                                        <i class="fas fa-cog"></i>
                                        <span>Settings</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Management Tab -->
                <div class="tab-content" id="students">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-user-graduate"></i> Student Management</h2>
                        
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Student</button>
                            <div>
                                <input type="text" class="form-control" placeholder="Search students..." style="width: 300px;">
                            </div>
                        </div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Parent</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ST2023001</td>
                                    <td>Emma Wilson</td>
                                    <td>Grade 5A</td>
                                    <td>Mr. & Mrs. Wilson</td>
                                    <td>emma.w@example.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ST2023002</td>
                                    <td>James Brown</td>
                                    <td>Grade 8B</td>
                                    <td>Mrs. Brown</td>
                                    <td>james.b@example.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ST2023003</td>
                                    <td>Sophia Garcia</td>
                                    <td>Grade 10A</td>
                                    <td>Mr. Garcia</td>
                                    <td>sophia.g@example.com</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Staff Management Tab -->
                <div class="tab-content" id="staff">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-chalkboard-teacher"></i> Staff Management</h2>
                        
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Staff</button>
                            <div>
                                <input type="text" class="form-control" placeholder="Search staff..." style="width: 300px;">
                            </div>
                        </div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TF2023001</td>
                                    <td>Robert Chen</td>
                                    <td>Mathematics Teacher</td>
                                    <td>Mathematics</td>
                                    <td>robert.c@example.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TF2023002</td>
                                    <td>Maria Rodriguez</td>
                                    <td>Science Teacher</td>
                                    <td>Science</td>
                                    <td>maria.r@example.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TF2023003</td>
                                    <td>David Kim</td>
                                    <td>Administrator</td>
                                    <td>Administration</td>
                                    <td>david.k@example.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Finance Tab -->
                <div class="tab-content" id="finance">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-file-invoice-dollar"></i> Financial Management</h2>
                        
                        <div class="stats-cards">
                            <div class="stat-card admin">
                                <div class="stat-label">Total Revenue</div>
                                <div class="stat-value">$248,500</div>
                                <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
                            </div>
                            <div class="stat-card admin">
                                <div class="stat-label">Pending Fees</div>
                                <div class="stat-value">$12,350</div>
                                <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            </div>
                            <div class="stat-card admin">
                                <div class="stat-label">Expenses</div>
                                <div class="stat-value">$187,200</div>
                                <div class="stat-icon"><i class="fas fa-receipt"></i></div>
                            </div>
                        </div>
                        
                        <div class="chart-container">
                            <canvas id="financeChart"></canvas>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-list"></i> Recent Transactions</h2>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Student</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15 Oct 2023</td>
                                    <td>Emma Wilson</td>
                                    <td>Term 2 Tuition Fee</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>14 Oct 2023</td>
                                    <td>James Brown</td>
                                    <td>Term 2 Tuition Fee</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>13 Oct 2023</td>
                                    <td>Sophia Garcia</td>
                                    <td>Term 2 Tuition Fee</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Reports Tab -->
                <div class="tab-content" id="reports">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-chart-bar"></i> Reports & Analytics</h2>
                        
                        <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                            <button class="btn btn-primary">Attendance Report</button>
                            <button class="btn btn-outline">Academic Performance</button>
                            <button class="btn btn-outline">Financial Summary</button>
                            <button class="btn btn-outline">Staff Performance</button>
                        </div>
                        
                        <div class="chart-container">
                            <canvas id="reportChart"></canvas>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-download"></i> Export Reports</h2>
                        <div style="display: flex; gap: 15px;">
                            <button class="btn btn-primary"><i class="fas fa-file-pdf"></i> PDF Report</button>
                            <button class="btn btn-outline"><i class="fas fa-file-excel"></i> Excel Report</button>
                            <button class="btn btn-outline"><i class="fas fa-print"></i> Print Report</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Teacher Dashboard -->
    <div class="dashboard-view" id="teacher-dashboard-view">
        <div class="dashboard-nav">
            <h2><i class="fas fa-chalkboard-teacher"></i> Teacher Dashboard</h2>
            <button class="close-dashboard"><i class="fas fa-times"></i></button>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-header-section">
                <h1 class="dashboard-title"><i class="fas fa-tachometer-alt"></i> Teacher Dashboard</h1>
                <div class="user-info">
                    <div class="avatar">T</div>
                    <div>
                        <div>Mr. Robert Chen</div>
                        <div style="font-size: 0.9rem; color: #6c757d;">Mathematics Teacher</div>
                    </div>
                </div>
            </div>

            <div class="stats-cards">
                <div class="stat-card teacher">
                    <div class="stat-label">My Students</div>
                    <div class="stat-value">142</div>
                    <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                </div>
                <div class="stat-card teacher">
                    <div class="stat-label">Assignments Due</div>
                    <div class="stat-value">3</div>
                    <div class="stat-icon"><i class="fas fa-tasks"></i></div>
                </div>
                <div class="stat-card teacher">
                    <div class="stat-label">Classes Today</div>
                    <div class="stat-value">5</div>
                    <div class="stat-icon"><i class="fas fa-chalkboard"></i></div>
                </div>
                <div class="stat-card teacher">
                    <div class="stat-label">Avg. Performance</div>
                    <div class="stat-value">82%</div>
                    <div class="stat-icon"><i class="fas fa-chart-bar"></i></div>
                </div>
            </div>

            <div class="tab-container">
                <div class="tabs">
                    <div class="tab active" data-tab="overview-t">Overview</div>
                    <div class="tab" data-tab="classes">My Classes</div>
                    <div class="tab" data-tab="attendance-t">Attendance</div>
                    <div class="tab" data-tab="grading">Grading</div>
                    <div class="tab" data-tab="resources">Resources</div>
                </div>

                <!-- Overview Tab -->
                <div class="tab-content active" id="overview-t">
                    <div class="dashboard-content-section">
                        <div class="main-content">
                            <h2 class="section-title-dash"><i class="fas fa-chart-line"></i> Class Performance</h2>
                            <div class="chart-container">
                                <canvas id="teacherChart"></canvas>
                            </div>

                            <h2 class="section-title-dash"><i class="fas fa-list"></i> Today's Schedule</h2>
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>8:00 - 8:45</td>
                                        <td>Grade 10A</td>
                                        <td>Mathematics</td>
                                        <td>Room 201</td>
                                    </tr>
                                    <tr>
                                        <td>9:00 - 9:45</td>
                                        <td>Grade 9B</td>
                                        <td>Advanced Math</td>
                                        <td>Room 305</td>
                                    </tr>
                                    <tr>
                                        <td>10:30 - 11:15</td>
                                        <td>Grade 11A</td>
                                        <td>Calculus</td>
                                        <td>Room 201</td>
                                    </tr>
                                    <tr>
                                        <td>11:30 - 12:15</td>
                                        <td>Grade 10B</td>
                                        <td>Mathematics</td>
                                        <td>Room 205</td>
                                    </tr>
                                    <tr>
                                        <td>1:30 - 2:15</td>
                                        <td>Grade 9A</td>
                                        <td>Advanced Math</td>
                                        <td>Room 305</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="section-title-dash"><i class="fas fa-bell"></i> Notifications</h2>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-exclamation-circle"></i></div>
                                    <div>
                                        <div>Grade 10A assignment due tomorrow</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Today, 9:15 AM</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-check-circle"></i></div>
                                    <div>
                                        <div>Staff meeting at 3:00 PM</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Today, 8:30 AM</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-calendar-alt"></i></div>
                                    <div>
                                        <div>Parent meeting scheduled for Friday</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Yesterday</div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget calendar-widget">
                                <div class="calendar-header">
                                    <h2 class="section-title-dash"><i class="fas fa-calendar"></i> October 2023</h2>
                                    <div>
                                        <button><i class="fas fa-chevron-left"></i></button>
                                        <button><i class="fas fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <div class="calendar-days">
                                    <div>M</div><div>T</div><div>W</div><div>T</div><div>F</div><div>S</div><div>S</div>
                                    <div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>1</div><div>2</div>
                                    <div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div>
                                    <div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div>
                                    <div>17</div><div class="calendar-day active">18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div>
                                    <div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- My Classes Tab -->
                <div class="tab-content" id="classes">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-users"></i> My Classes</h2>
                        
                        <div class="stats-cards">
                            <div class="stat-card teacher">
                                <div class="stat-label">Grade 10A Mathematics</div>
                                <div class="stat-value">32 Students</div>
                                <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                            </div>
                            <div class="stat-card teacher">
                                <div class="stat-label">Grade 9B Advanced Math</div>
                                <div class="stat-value">28 Students</div>
                                <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                            </div>
                            <div class="stat-card teacher">
                                <div class="stat-label">Grade 11A Calculus</div>
                                <div class="stat-value">25 Students</div>
                                <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-list"></i> Class Rosters</h2>
                        
                        <div style="margin-bottom: 20px;">
                            <select class="form-control" style="width: 300px;">
                                <option>Select a Class</option>
                                <option>Grade 10A Mathematics</option>
                                <option>Grade 9B Advanced Math</option>
                                <option>Grade 11A Calculus</option>
                            </select>
                        </div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Average Grade</th>
                                    <th>Attendance</th>
                                    <th>Last Assignment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ST2023001</td>
                                    <td>Emma Wilson</td>
                                    <td>A</td>
                                    <td>96%</td>
                                    <td>Algebra Test - 95%</td>
                                </tr>
                                <tr>
                                    <td>ST2023002</td>
                                    <td>James Brown</td>
                                    <td>B+</td>
                                    <td>92%</td>
                                    <td>Algebra Test - 87%</td>
                                </tr>
                                <tr>
                                    <td>ST2023003</td>
                                    <td>Sophia Garcia</td>
                                    <td>A-</td>
                                    <td>98%</td>
                                    <td>Algebra Test - 92%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Attendance Tab -->
                <div class="tab-content" id="attendance-t">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-clipboard-check"></i> Attendance Management</h2>
                        
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <div>
                                <select class="form-control" style="width: 200px; display: inline-block;">
                                    <option>Grade 10A Mathematics</option>
                                    <option>Grade 9B Advanced Math</option>
                                    <option>Grade 11A Calculus</option>
                                </select>
                                <input type="date" class="form-control" style="width: 200px; display: inline-block; margin-left: 10px;">
                            </div>
                            <button class="btn btn-primary">Submit Attendance</button>
                        </div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ST2023001</td>
                                    <td>Emma Wilson</td>
                                    <td>
                                        <select class="form-control">
                                            <option>Present</option>
                                            <option>Absent</option>
                                            <option>Late</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" placeholder="Optional note"></td>
                                </tr>
                                <tr>
                                    <td>ST2023002</td>
                                    <td>James Brown</td>
                                    <td>
                                        <select class="form-control">
                                            <option>Present</option>
                                            <option>Absent</option>
                                            <option>Late</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" placeholder="Optional note"></td>
                                </tr>
                                <tr>
                                    <td>ST2023003</td>
                                    <td>Sophia Garcia</td>
                                    <td>
                                        <select class="form-control">
                                            <option>Present</option>
                                            <option>Absent</option>
                                            <option>Late</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" placeholder="Optional note"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h2 class="section-title-dash" style="margin-top: 30px;"><i class="fas fa-chart-bar"></i> Attendance Overview</h2>
                        <div class="chart-container">
                            <canvas id="attendanceChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Grading Tab -->
                <div class="tab-content" id="grading">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-graduation-cap"></i> Grade Management</h2>
                        
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <div>
                                <select class="form-control" style="width: 200px; display: inline-block;">
                                    <option>Select a Class</option>
                                    <option>Grade 10A Mathematics</option>
                                    <option>Grade 9B Advanced Math</option>
                                    <option>Grade 11A Calculus</option>
                                </select>
                                <select class="form-control" style="width: 200px; display: inline-block; margin-left: 10px;">
                                    <option>Select an Assignment</option>
                                    <option>Algebra Test</option>
                                    <option>Geometry Quiz</option>
                                    <option>Final Exam</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Submit Grades</button>
                        </div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ST2023001</td>
                                    <td>Emma Wilson</td>
                                    <td><input type="text" class="form-control" value="95"></td>
                                    <td><input type="text" class="form-control" placeholder="Add comment"></td>
                                </tr>
                                <tr>
                                    <td>ST2023002</td>
                                    <td>James Brown</td>
                                    <td><input type="text" class="form-control" value="87"></td>
                                    <td><input type="text" class="form-control" placeholder="Add comment"></td>
                                </tr>
                                <tr>
                                    <td>ST2023003</td>
                                    <td>Sophia Garcia</td>
                                    <td><input type="text" class="form-control" value="92"></td>
                                    <td><input type="text" class="form-control" placeholder="Add comment"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h2 class="section-title-dash" style="margin-top: 30px;"><i class="fas fa-chart-pie"></i> Grade Distribution</h2>
                        <div class="chart-container">
                            <canvas id="gradeChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Resources Tab -->
                <div class="tab-content" id="resources">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-book"></i> Teaching Resources</h2>
                        
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <button class="btn btn-primary"><i class="fas fa-plus"></i> Upload New Resource</button>
                            <div>
                                <input type="text" class="form-control" placeholder="Search resources..." style="width: 300px;">
                            </div>
                        </div>
                        
                        <div class="quick-actions">
                            <div class="action-btn">
                                <i class="fas fa-file-pdf"></i>
                                <span>Lesson Plans</span>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-video"></i>
                                <span>Videos</span>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-image"></i>
                                <span>Images</span>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-link"></i>
                                <span>Web Links</span>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash" style="margin-top: 30px;"><i class="fas fa-folder"></i> My Resources</h2>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Subject</th>
                                    <th>Date Added</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Algebra Lesson Plan Week 5</td>
                                    <td>PDF</td>
                                    <td>Mathematics</td>
                                    <td>10 Oct 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">Share</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Geometry Quiz Template</td>
                                    <td>DOC</td>
                                    <td>Mathematics</td>
                                    <td>8 Oct 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">Share</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Calculus Video Tutorial</td>
                                    <td>MP4</td>
                                    <td>Mathematics</td>
                                    <td>5 Oct 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline">Share</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parent Dashboard -->
    <div class="dashboard-view" id="parent-dashboard-view">
        <div class="dashboard-nav">
            <h2><i class="fas fa-user-friends"></i> Parent Dashboard</h2>
            <button class="close-dashboard"><i class="fas fa-times"></i></button>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-header-section">
                <h1 class="dashboard-title"><i class="fas fa-tachometer-alt"></i> Parent Dashboard</h1>
                <div class="user-info">
                    <div class="avatar">P</div>
                    <div>
                        <div>Mrs. Elena Rodriguez</div>
                        <div style="font-size: 0.9rem; color: #6c757d;">Parent of Sofia (Grade 8)</div>
                    </div>
                </div>
            </div>

            <div class="stats-cards">
                <div class="stat-card parent">
                    <div class="stat-label">Child's Attendance</div>
                    <div class="stat-value">96%</div>
                    <div class="stat-icon"><i class="fas fa-clipboard-check"></i></div>
                </div>
                <div class="stat-card parent">
                    <div class="stat-label">Average Grade</div>
                    <div class="stat-value">A-</div>
                    <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
                </div>
                <div class="stat-card parent">
                    <div class="stat-label">Pending Fees</div>
                    <div class="stat-value">$0</div>
                    <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <div class="stat-card parent">
                    <div class="stat-label">Upcoming Events</div>
                    <div class="stat-value">3</div>
                    <div class="stat-icon"><i class="fas fa-calendar-day"></i></div>
                </div>
            </div>

            <div class="tab-container">
                <div class="tabs">
                    <div class="tab active" data-tab="overview-p">Overview</div>
                    <div class="tab" data-tab="academics">Academics</div>
                    <div class="tab" data-tab="attendance-p">Attendance</div>
                    <div class="tab" data-tab="fees">Fees & Payments</div>
                    <div class="tab" data-tab="communication">Communication</div>
                </div>

                <!-- Overview Tab -->
                <div class="tab-content active" id="overview-p">
                    <div class="dashboard-content-section">
                        <div class="main-content">
                            <h2 class="section-title-dash"><i class="fas fa-chart-line"></i> Academic Progress</h2>
                            <div class="chart-container">
                                <canvas id="parentChart"></canvas>
                            </div>

                            <h2 class="section-title-dash"><i class="fas fa-list"></i> Recent Grades</h2>
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Assignment</th>
                                        <th>Grade</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>Algebra Test</td>
                                        <td>A</td>
                                        <td>15 Oct 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>Physics Lab Report</td>
                                        <td>B+</td>
                                        <td>12 Oct 2023</td>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>Essay Writing</td>
                                        <td>A-</td>
                                        <td>10 Oct 2023</td>
                                    </tr>
                                    <tr>
                                        <td>History</td>
                                        <td>Chapter Quiz</td>
                                        <td>B+</td>
                                        <td>8 Oct 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="section-title-dash"><i class="fas fa-bell"></i> Notifications</h2>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-exclamation-circle"></i></div>
                                    <div>
                                        <div>Parent-teacher meeting next week</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Today, 10:30 AM</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-check-circle"></i></div>
                                    <div>
                                        <div>Science project submission confirmed</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">Yesterday, 3:45 PM</div>
                                    </div>
                                </div>
                                <div class="notification-item">
                                    <div class="notification-icon"><i class="fas fa-calendar-alt"></i></div>
                                    <div>
                                        <div>School photography day on 25th Oct</div>
                                        <div style="font-size: 0.8rem; color: #6c757d;">2 days ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <h2 class="section-title-dash"><i class="fas fa-calendar-day"></i> Upcoming Events</h2>
                                <div class="event-item">
                                    <div class="event-date">Oct 20, 2023</div>
                                    <div>Science Fair</div>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">Oct 25, 2023</div>
                                    <div>School Photography Day</div>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">Oct 30, 2023</div>
                                    <div>Mid-term Examinations Begin</div>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">Nov 5, 2023</div>
                                    <div>Sports Day</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academics Tab -->
                <div class="tab-content" id="academics">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-graduation-cap"></i> Academic Performance</h2>
                        
                        <div class="stats-cards">
                            <div class="stat-card parent">
                                <div class="stat-label">Mathematics</div>
                                <div class="stat-value">A</div>
                                <div class="stat-icon"><i class="fas fa-calculator"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">Science</div>
                                <div class="stat-value">B+</div>
                                <div class="stat-icon"><i class="fas fa-flask"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">English</div>
                                <div class="stat-value">A-</div>
                                <div class="stat-icon"><i class="fas fa-book"></i></div>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-chart-bar"></i> Subject-wise Performance</h2>
                        <div class="chart-container">
                            <canvas id="academicChart"></canvas>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-tasks"></i> Recent Assignments</h2>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Assignment</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mathematics</td>
                                    <td>Algebra Problem Set</td>
                                    <td>18 Oct 2023</td>
                                    <td><span class="badge badge-success">Submitted</span></td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>Lab Report - Physics</td>
                                    <td>20 Oct 2023</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>Essay - Modern Literature</td>
                                    <td>22 Oct 2023</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Attendance Tab -->
                <div class="tab-content" id="attendance-p">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-user-check"></i> Attendance Record</h2>
                        
                        <div class="stats-cards">
                            <div class="stat-card parent">
                                <div class="stat-label">Total Present</div>
                                <div class="stat-value">42</div>
                                <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">Total Absent</div>
                                <div class="stat-value">2</div>
                                <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">Attendance %</div>
                                <div class="stat-value">95.5%</div>
                                <div class="stat-icon"><i class="fas fa-percentage"></i></div>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-calendar-alt"></i> Monthly Attendance</h2>
                        <div class="chart-container">
                            <canvas id="parentAttendanceChart"></canvas>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-list"></i> Recent Attendance</h2>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>17 Oct 2023</td>
                                    <td><span class="badge badge-success">Present</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>16 Oct 2023</td>
                                    <td><span class="badge badge-success">Present</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>15 Oct 2023</td>
                                    <td><span class="badge badge-success">Present</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>14 Oct 2023</td>
                                    <td><span class="badge badge-danger">Absent</span></td>
                                    <td>Medical leave</td>
                                </tr>
                                <tr>
                                    <td>13 Oct 2023</td>
                                    <td><span class="badge badge-success">Present</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Fees & Payments Tab -->
                <div class="tab-content" id="fees">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-file-invoice-dollar"></i> Fee Management</h2>
                        
                        <div class="stats-cards">
                            <div class="stat-card parent">
                                <div class="stat-label">Total Due</div>
                                <div class="stat-value">$0</div>
                                <div class="stat-icon"><i class="fas fa-money-bill-wave"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">Paid This Term</div>
                                <div class="stat-value">$1,200</div>
                                <div class="stat-icon"><i class="fas fa-receipt"></i></div>
                            </div>
                            <div class="stat-card parent">
                                <div class="stat-label">Next Due Date</div>
                                <div class="stat-value">15 Jan 2024</div>
                                <div class="stat-icon"><i class="fas fa-calendar"></i></div>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-credit-card"></i> Make a Payment</h2>
                        
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
                            <div class="form-group">
                                <label>Select Fee Type</label>
                                <select class="form-control">
                                    <option>Term 2 Tuition Fee - $1,200</option>
                                    <option>Sports Fee - $50</option>
                                    <option>Library Fee - $30</option>
                                    <option>Technology Fee - $100</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Payment Method</label>
                                <select class="form-control">
                                    <option>Credit/Debit Card</option>
                                    <option>Bank Transfer</option>
                                    <option>PayPal</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Proceed to Payment</button>
                        </div>
                        
                        <h2 class="section-title-dash"><i class="fas fa-history"></i> Payment History</h2>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15 Sep 2023</td>
                                    <td>Term 1 Tuition Fee</td>
                                    <td>$1,200</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><button class="btn btn-sm btn-outline">Download</button></td>
                                </tr>
                                <tr>
                                    <td>10 Aug 2023</td>
                                    <td>Registration Fee</td>
                                    <td>$100</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><button class="btn btn-sm btn-outline">Download</button></td>
                                </tr>
                                <tr>
                                    <td>5 Jul 2023</td>
                                    <td>Sports Fee</td>
                                    <td>$50</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><button class="btn btn-sm btn-outline">Download</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Communication Tab -->
                <div class="tab-content" id="communication">
                    <div class="main-content">
                        <h2 class="section-title-dash"><i class="fas fa-comments"></i> Communication Center</h2>
                        
                        <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                            <button class="btn btn-primary"><i class="fas fa-envelope"></i> New Message</button>
                            <button class="btn btn-outline"><i class="fas fa-bullhorn"></i> School Announcements</button>
                        </div>
                        
                        <div class="widget">
                            <h2 class="section-title-dash"><i class="fas fa-inbox"></i> Messages</h2>
                            
                            <div class="notification-item">
                                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <div><strong>From: Mr. Robert Chen (Mathematics Teacher)</strong></div>
                                    <div>Sofia is doing excellent in algebra. She scored 95% on the recent test.</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">Today, 2:30 PM</div>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <div><strong>From: School Administration</strong></div>
                                    <div>Reminder: Parent-teacher meetings scheduled for next week.</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">Yesterday, 10:15 AM</div>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <div><strong>From: Ms. Maria Rodriguez (Science Teacher)</strong></div>
                                    <div>Science fair project submission deadline is approaching.</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">2 days ago</div>
                                </div>
                            </div>
                        </div>
                        
                        <h2 class="section-title-dash" style="margin-top: 30px;"><i class="fas fa-phone-alt"></i> Contact Teachers</h2>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Teacher</th>
                                    <th>Subject</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mr. Robert Chen</td>
                                    <td>Mathematics</td>
                                    <td>robert.c@example.com</td>
                                    <td>(555) 123-4567</td>
                                    <td><button class="btn btn-sm btn-primary">Message</button></td>
                                </tr>
                                <tr>
                                    <td>Ms. Maria Rodriguez</td>
                                    <td>Science</td>
                                    <td>maria.r@example.com</td>
                                    <td>(555) 123-4568</td>
                                    <td><button class="btn btn-sm btn-primary">Message</button></td>
                                </tr>
                                <tr>
                                    <td>Mrs. Jennifer Smith</td>
                                    <td>English</td>
                                    <td>jennifer.s@example.com</td>
                                    <td>(555) 123-4569</td>
                                    <td><button class="btn btn-sm btn-primary">Message</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-column">
                <h3>EduNexus</h3>
                <p>Transforming education through technology. Our school management system helps institutions streamline operations and enhance learning outcomes.</p>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#dashboards">Dashboards</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Education Street, Learn City</li>
                    <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> info@edunexus.com</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 EduNexus. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetSection.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });

        // Dashboard navigation
        document.querySelectorAll('.btn-dashboard').forEach(button => {
            button.addEventListener('click', function() {
                const dashboardType = this.getAttribute('data-dashboard');
                const dashboardView = document.getElementById(`${dashboardType}-dashboard-view`);
                
                // Hide all dashboard views
                document.querySelectorAll('.dashboard-view').forEach(view => {
                    view.classList.remove('active');
                });
                
                // Show the selected dashboard
                dashboardView.classList.add('active');
                
                // Update charts for the active dashboard
                updateCharts();
            });
        });

        // Close dashboard views
        document.querySelectorAll('.close-dashboard').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.dashboard-view').classList.remove('active');
            });
        });

        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabContainer = this.closest('.tab-container');
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all tabs in this container
                tabContainer.querySelectorAll('.tab').forEach(t => {
                    t.classList.remove('active');
                });
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Hide all tab contents in this container
                tabContainer.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });
                
                // Show the selected tab content
                document.getElementById(tabId).classList.add('active');
                
                // Update charts if needed
                updateCharts();
            });
        });

        // Initialize charts
        function updateCharts() {
            // Admin Chart - School Statistics
            const adminCtx = document.getElementById('adminChart');
            if (adminCtx) {
                new Chart(adminCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Primary', 'Grade 6-8', 'Grade 9-10', 'Grade 11-12'],
                        datasets: [{
                            label: 'Student Count',
                            data: [420, 320, 280, 227],
                            backgroundColor: '#4361ee',
                            borderColor: '#3a0ca3',
                            borderWidth: 1
                        }, {
                            label: 'Attendance %',
                            data: [96, 94, 92, 90],
                            backgroundColor: '#4cc9f0',
                            borderColor: '#4895ef',
                            borderWidth: 1,
                            type: 'line',
                            yAxisID: 'y1'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Student Count'
                                }
                            },
                            y1: {
                                position: 'right',
                                beginAtZero: true,
                                max: 100,
                                title: {
                                    display: true,
                                    text: 'Attendance %'
                                },
                                grid: {
                                    drawOnChartArea: false
                                }
                            }
                        }
                    }
                });
            }

            // Finance Chart
            const financeCtx = document.getElementById('financeChart');
            if (financeCtx) {
                new Chart(financeCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                        datasets: [{
                            label: 'Revenue',
                            data: [22000, 25000, 23000, 28000, 30000, 32000, 31000, 33000, 35000, 37000],
                            borderColor: '#4361ee',
                            backgroundColor: 'rgba(67, 97, 238, 0.1)',
                            borderWidth: 2,
                            fill: true
                        }, {
                            label: 'Expenses',
                            data: [18000, 19000, 20000, 21000, 22000, 23000, 24000, 25000, 26000, 27000],
                            borderColor: '#f72585',
                            backgroundColor: 'rgba(247, 37, 133, 0.1)',
                            borderWidth: 2,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            }

            // Report Chart
            const reportCtx = document.getElementById('reportChart');
            if (reportCtx) {
                new Chart(reportCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Primary', 'Middle School', 'High School'],
                        datasets: [{
                            data: [420, 320, 280],
                            backgroundColor: ['#4361ee', '#4cc9f0', '#f72585']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            }

            // Teacher Chart - Class Performance
            const teacherCtx = document.getElementById('teacherChart');
            if (teacherCtx) {
                new Chart(teacherCtx, {
                    type: 'line',
                    data: {
                        labels: ['Aug', 'Sep', 'Oct'],
                        datasets: [{
                            label: 'Grade 10A Mathematics',
                            data: [75, 82, 88],
                            borderColor: '#f8961e',
                            backgroundColor: 'rgba(248, 150, 30, 0.1)',
                            borderWidth: 2,
                            fill: true
                        }, {
                            label: 'Grade 9B Advanced Math',
                            data: [80, 78, 85],
                            borderColor: '#43aa8b',
                            backgroundColor: 'rgba(67, 170, 139, 0.1)',
                            borderWidth: 2,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                title: {
                                    display: true,
                                    text: 'Average Score %'
                                }
                            }
                        }
                    }
                });
            }

            // Attendance Chart
            const attendanceCtx = document.getElementById('attendanceChart');
            if (attendanceCtx) {
                new Chart(attendanceCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Grade 10A', 'Grade 9B', 'Grade 11A'],
                        datasets: [{
                            label: 'Attendance %',
                            data: [94, 89, 92],
                            backgroundColor: ['#4361ee', '#4cc9f0', '#43aa8b']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            }

            // Grade Chart
            const gradeCtx = document.getElementById('gradeChart');
            if (gradeCtx) {
                new Chart(gradeCtx, {
                    type: 'pie',
                    data: {
                        labels: ['A (90-100)', 'B (80-89)', 'C (70-79)', 'D (60-69)', 'F (<60)'],
                        datasets: [{
                            data: [12, 18, 8, 2, 0],
                            backgroundColor: ['#43aa8b', '#4cc9f0', '#f8961e', '#f72585', '#7209b7']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            }

            // Parent Chart - Child's Performance
            const parentCtx = document.getElementById('parentChart');
            if (parentCtx) {
                new Chart(parentCtx, {
                    type: 'radar',
                    data: {
                        labels: ['Mathematics', 'Science', 'English', 'History', 'Arts', 'Physical Ed'],
                        datasets: [{
                            label: 'Current Term',
                            data: [90, 85, 88, 82, 92, 95],
                            backgroundColor: 'rgba(67, 170, 139, 0.2)',
                            borderColor: '#43aa8b',
                            borderWidth: 2
                        }, {
                            label: 'Previous Term',
                            data: [85, 80, 82, 78, 88, 90],
                            backgroundColor: 'rgba(248, 150, 30, 0.2)',
                            borderColor: '#f8961e',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            r: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            }

            // Academic Chart
            const academicCtx = document.getElementById('academicChart');
            if (academicCtx) {
                new Chart(academicCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Mathematics', 'Science', 'English', 'History', 'Geography', 'Arts'],
                        datasets: [{
                            label: 'Scores',
                            data: [95, 87, 92, 85, 88, 94],
                            backgroundColor: '#4361ee'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            }

            // Parent Attendance Chart
            const parentAttendanceCtx = document.getElementById('parentAttendanceChart');
            if (parentAttendanceCtx) {
                new Chart(parentAttendanceCtx, {
                    type: 'line',
                    data: {
                        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
                        datasets: [{
                            label: 'Attendance %',
                            data: [100, 100, 80, 100, 100],
                            borderColor: '#43aa8b',
                            backgroundColor: 'rgba(67, 170, 139, 0.1)',
                            borderWidth: 2,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            }
        }

        // Initialize charts on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Set up any additional event listeners or initializations
        });
    </script>
</body>
</html>