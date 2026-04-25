<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?php echo $page_title; ?></title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: 2026 Trend -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Clash+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Your CSS remains exactly the same */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #020617;
            font-family: 'Space Grotesk', sans-serif;
            color: #e2e8f0;
            overflow-x: hidden;
        }

        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: radial-gradient(circle at 20% 50%, #0f172a 0%, #020617 100%);
        }

        .animated-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 40px,
                rgba(56, 189, 248, 0.03) 40px,
                rgba(56, 189, 248, 0.03) 80px
            );
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(80px, 80px); }
        }

        .cursor {
            width: 12px;
            height: 12px;
            background: #38bdf8;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.1s ease;
            box-shadow: 0 0 20px #38bdf8;
            mix-blend-mode: difference;
        }

        .cursor-follower {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(56, 189, 248, 0.5);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.2s ease;
            transform: translate(-50%, -50%);
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 0;
            border-bottom: 1px solid rgba(56, 189, 248, 0.15);
            margin-bottom: 4rem;
            backdrop-filter: blur(10px);
        }

        .logo {
            font-family: 'Clash Display', sans-serif;
            font-size: 1.6rem;
            font-weight: 700;
            background: linear-gradient(135deg, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .logo span {
            color: #38bdf8;
            text-shadow: 0 0 10px rgba(56, 189, 248, 0.5);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #38bdf8;
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: white;
        }

        .music-btn {
            background: rgba(56, 189, 248, 0.1);
            border: 1px solid rgba(56, 189, 248, 0.3);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            color: #38bdf8;
            font-size: 1.2rem;
        }

        .music-btn:hover {
            background: #38bdf8;
            color: #020617;
            transform: scale(1.1);
            box-shadow: 0 0 25px rgba(56, 189, 248, 0.5);
        }

        .music-btn.playing {
            animation: pulse 1s infinite;
            background: #38bdf8;
            color: #020617;
        }

        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.7); }
            50% { box-shadow: 0 0 0 10px rgba(56, 189, 248, 0); }
        }

        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 4rem;
            margin-bottom: 6rem;
            align-items: center;
        }

        .badge-2026 {
            display: inline-block;
            background: rgba(56, 189, 248, 0.15);
            border: 1px solid rgba(56, 189, 248, 0.3);
            padding: 0.3rem 1rem;
            border-radius: 40px;
            font-size: 0.7rem;
            letter-spacing: 2px;
            margin-bottom: 1.5rem;
            color: #38bdf8;
        }

        .hero h1 {
            font-family: 'Clash Display', sans-serif;
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin-bottom: 1.5rem;
        }

        .gradient-name {
            background: linear-gradient(135deg, #38bdf8, #a78bfa, #38bdf8);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: shine 4s linear infinite;
        }

        @keyframes shine {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        .hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin: 1.5rem 0;
        }

        .hero-tag {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            padding: 0.4rem 1rem;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .hero-tag i {
            color: #38bdf8;
            margin-right: 6px;
        }

        .hero p {
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, #38bdf8, #818cf8);
            color: #020617;
            padding: 0.9rem 2rem;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(56, 189, 248, 0.3);
        }

        .btn-outline {
            border: 1px solid rgba(56, 189, 248, 0.5);
            background: transparent;
            color: #38bdf8;
            padding: 0.9rem 2rem;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-outline:hover {
            background: rgba(56, 189, 248, 0.1);
            border-color: #38bdf8;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #38bdf8;
        }

        .hero-image {
            position: relative;
        }

        .glow-ring {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #38bdf8, #818cf8);
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(60px);
            opacity: 0.3;
            z-index: -1;
        }

        .hero-avatar {
            width: 100%;
            aspect-ratio: 1/1;
            background: linear-gradient(145deg, #0f172a, #020617);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            border: 2px solid rgba(56, 189, 248, 0.3);
            animation: morph 8s ease-in-out infinite;
        }

        @keyframes morph {
            0%, 100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 70% 30% 30% 70% / 60% 40% 60% 40%; }
        }

        .section-title {
            font-family: 'Clash Display', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            letter-spacing: -0.02em;
        }

        .section-title span {
            color: #38bdf8;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 5rem;
        }

        .skill-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(56, 189, 248, 0.1);
            border-radius: 1.5rem;
            padding: 1.8rem;
            transition: all 0.4s;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            border-color: rgba(56, 189, 248, 0.3);
            background: rgba(15, 23, 42, 0.8);
        }

        .skill-icon {
            font-size: 2.5rem;
            color: #38bdf8;
            margin-bottom: 1rem;
        }

        .skill-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
        }

        .skill-card p {
            color: #94a3b8;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .about-section {
            background: rgba(15, 23, 42, 0.4);
            border-radius: 2rem;
            padding: 3rem;
            margin-bottom: 5rem;
            border: 1px solid rgba(56, 189, 248, 0.1);
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .about-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .about-icon {
            width: 50px;
            height: 50px;
            background: rgba(56, 189, 248, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #38bdf8;
        }

        .about-text h4 {
            font-size: 0.8rem;
            color: #94a3b8;
            margin-bottom: 0.2rem;
        }

        .about-text p {
            font-size: 1rem;
            font-weight: 500;
        }

        .projects-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 5rem;
        }

        .project-card {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(56, 189, 248, 0.1);
            border-radius: 1.5rem;
            overflow: hidden;
            transition: all 0.4s;
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: rgba(56, 189, 248, 0.3);
        }

        .project-preview {
            height: 200px;
            background: linear-gradient(135deg, #1e293b, #0f172a);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #38bdf8;
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-info h3 {
            margin-bottom: 0.5rem;
        }

        .project-info p {
            color: #94a3b8;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }

        .project-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .project-tag {
            background: rgba(56, 189, 248, 0.1);
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            font-size: 0.7rem;
        }

        footer {
            border-top: 1px solid rgba(56, 189, 248, 0.1);
            padding: 2.5rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 3rem;
        }

        .social-links {
            display: flex;
            gap: 1.5rem;
        }

        .social-links a {
            color: #64748b;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            color: #38bdf8;
            transform: translateY(-3px);
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 900px) {
            .container { padding: 0 1.2rem; }
            .hero { grid-template-columns: 1fr; text-align: center; gap: 2rem; }
            .hero h1 { font-size: 2.8rem; }
            .hero-tags { justify-content: center; }
            .btn-group { justify-content: center; }
            .hero-stats { justify-content: center; }
            .section-title { font-size: 2rem; text-align: center; }
            .about-grid { justify-content: center; }
            footer { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

<?php
// ==================== PHP DYNAMIC DATA ====================
$page_title = "Tazim | Cyber Security • Developer • 2026";

// Personal Info
$name = "Abdullah Al Tazim";
$tagline = "Cyber Security & Developer";
$location = "Bangladesh";
$languages = "Bengali (Native), English (Fluent)";
$what_i_do = "Cyber Security Analysis + Web Development + Python Software Development";

// Stats
$experience_years = "5+";
$projects_completed = "42+";
$client_satisfaction = "98%";

// Hero section
$badge_text = "2026 — Cyber Era Developer";
$hero_title_first = "I'm";
$hero_title_name = $name;
$hero_title_second = "Cyber Security";
$hero_title_third = "& Developer";
$hero_description = "Expert in Cyber Security, Web Development, and Python Software Development — three domains. Working to secure and modernize the digital world in 2026.";

// Skills
$skills = [
    [
        'icon' => 'fas fa-shield-haltered',
        'title' => 'Cyber Security',
        'description' => 'Penetration testing, network security, vulnerability assessment, security audit. Expert in protecting against modern cyber threats.'
    ],
    [
        'icon' => 'fas fa-globe',
        'title' => 'Web Development',
        'description' => 'React, Next.js, Node.js, modern frontend & backend development. Building fast, scalable & secure web applications.'
    ],
    [
        'icon' => 'fab fa-python',
        'title' => 'Python Software Development',
        'description' => 'Desktop applications, automation tools, data processing, Django backend. Creating efficient software with Python.'
    ]
];

// Projects
$projects = [
    [
        'icon' => 'fas fa-shield-virus',
        'title' => 'Security Audit Tool',
        'description' => 'Python-based automated vulnerability scanner and security report generator.',
        'tags' => ['Python', 'Cyber Security']
    ],
    [
        'icon' => 'fas fa-globe',
        'title' => 'Modern E-commerce Platform',
        'description' => 'Full-stack e-commerce website built with Next.js + Node.js. Includes payment gateway and admin panel.',
        'tags' => ['React', 'Node.js', 'MongoDB']
    ],
    [
        'icon' => 'fas fa-robot',
        'title' => 'Automation Bot',
        'description' => 'Python-based social media automation and data scraping tool.',
        'tags' => ['Python', 'Selenium', 'APIs']
    ]
];

// Social & Footer
$copyright = "© 2026 — Abdullah Al Tazim | Cyber Security & Development";
$nav_links = ['Home', 'Skills', 'Projects', 'Contact'];
$social_links = [
    'fab fa-github' => '#',
    'fab fa-linkedin-in' => '#',
    'fab fa-twitter' => '#',
    'fab fa-instagram' => '#'
];
?>

<div class="animated-bg"></div>
<div class="cursor"></div>
<div class="cursor-follower"></div>

<div class="container">
    <header>
        <div class="logo"><span></span>Tazim</div>
        <div class="nav-links">
            <?php foreach ($nav_links as $link): ?>
                <a href="#"><?php echo $link; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="music-btn" id="musicBtn">
            <i class="fas fa-play" id="musicIcon"></i>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <div class="badge-2026">
                <i class="fas fa-shield-haltered"></i> <?php echo $badge_text; ?>
            </div>
            <h1>
                <?php echo $hero_title_first; ?> <span class="gradient-name"><?php echo $hero_title_name; ?></span><br>
                <?php echo $hero_title_second; ?><br>
                <?php echo $hero_title_third; ?>
            </h1>
            <div class="hero-tags">
                <span class="hero-tag"><i class="fas fa-shield-haltered"></i> Cyber Security Expert</span>
                <span class="hero-tag"><i class="fas fa-code"></i> Web Developer</span>
                <span class="hero-tag"><i class="fab fa-python"></i> Python Developer</span>
            </div>
            <p><?php echo $hero_description; ?></p>
            <div class="btn-group">
                <a href="#" class="btn-primary">View Projects <i class="fas fa-arrow-right"></i></a>
                <a href="#" class="btn-outline">Contact Me</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number"><?php echo $experience_years; ?></div>
                    <div>Years Experience</div>
                </div>
                <div class="stat">
                    <div class="stat-number"><?php echo $projects_completed; ?></div>
                    <div>Projects Completed</div>
                </div>
                <div class="stat">
                    <div class="stat-number"><?php echo $client_satisfaction; ?></div>
                    <div>Client Satisfaction</div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <div class="glow-ring"></div>
            <div class="hero-avatar">
                <i class="fas fa-user-secret"></i>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section>
        <h2 class="section-title animate-on-scroll">Core <span>Skills</span> //</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon"><i class="<?php echo $skill['icon']; ?>"></i></div>
                    <h3><?php echo $skill['title']; ?></h3>
                    <p><?php echo $skill['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section animate-on-scroll">
        <h2 class="section-title" style="margin-bottom: 1rem;">About <span>Me</span> //</h2>
        <div class="about-grid">
            <div class="about-item">
                <div class="about-icon"><i class="fas fa-user"></i></div>
                <div class="about-text">
                    <h4>My Name</h4>
                    <p><?php echo $name; ?></p>
                </div>
            </div>
            <div class="about-item">
                <div class="about-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="about-text">
                    <h4>Location</h4>
                    <p><?php echo $location; ?></p>
                </div>
            </div>
            <div class="about-item">
                <div class="about-icon"><i class="fas fa-language"></i></div>
                <div class="about-text">
                    <h4>Languages</h4>
                    <p><?php echo $languages; ?></p>
                </div>
            </div>
            <div class="about-item">
                <div class="about-icon"><i class="fas fa-briefcase"></i></div>
                <div class="about-text">
                    <h4>What I Do</h4>
                    <p><?php echo $what_i_do; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Showcase -->
    <section>
        <h2 class="section-title animate-on-scroll">Recent <span>Projects</span> //</h2>
        <div class="projects-showcase">
            <?php foreach ($projects as $project): ?>
                <div class="project-card animate-on-scroll">
                    <div class="project-preview">
                        <i class="<?php echo $project['icon']; ?>"></i>
                    </div>
                    <div class="project-info">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="project-tag"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div><?php echo $copyright; ?></div>
        <div class="social-links">
            <?php foreach ($social_links as $icon => $url): ?>
                <a href="<?php echo $url; ?>"><i class="<?php echo $icon; ?>"></i></a>
            <?php endforeach; ?>
        </div>
    </footer>
</div>

<script>
    // Custom cursor
    const cursor = document.querySelector('.cursor');
    const follower = document.querySelector('.cursor-follower');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX - 6 + 'px';
        cursor.style.top = e.clientY - 6 + 'px';
        follower.style.left = e.clientX + 'px';
        follower.style.top = e.clientY + 'px';
    });

    document.addEventListener('mousedown', () => {
        cursor.style.transform = 'scale(0.8)';
        follower.style.transform = 'translate(-50%, -50%) scale(0.8)';
    });
    document.addEventListener('mouseup', () => {
        cursor.style.transform = 'scale(1)';
        follower.style.transform = 'translate(-50%, -50%) scale(1)';
    });

    // Music Player
    const musicBtn = document.getElementById('musicBtn');
    const musicIcon = document.getElementById('musicIcon');
    let isPlaying = false;
    let audio = null;

    musicBtn.addEventListener('click', () => {
        if (!audio) {
            audio = new Audio('https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3');
            audio.loop = true;
        }
        
        if (isPlaying) {
            audio.pause();
            musicIcon.className = 'fas fa-play';
            musicBtn.classList.remove('playing');
        } else {
            audio.play();
            musicIcon.className = 'fas fa-pause';
            musicBtn.classList.add('playing');
        }
        isPlaying = !isPlaying;
    });

    // Scroll Animation
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    animatedElements.forEach(el => observer.observe(el));
</script>
</body>
</html>