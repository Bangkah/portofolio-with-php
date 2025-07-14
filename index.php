<?php
// Konfigurasi website
$site_title = "Portfolio Muhammad Dhiyaul Atha";
$site_name = "Muhammad Dhiyaul Atha";
$site_description = "Mahasiswa Teknik Informatika & Web Developer";

// Data untuk portfolio
$about_text = "Halo! Saya Muhammad Dhiyaul Atha, seorang mahasiswa Teknik Informatika yang memiliki ketertarikan besar dalam dunia pengembangan web. Fokus utama saya adalah pada pengembangan website berbasis PHP, dengan dukungan keahlian di bidang JavaScript dan MySQL. Saya selalu antusias dalam mengeksplorasi teknologi-teknologi web terbaru dan berkomitmen untuk terus belajar dan berkembang dalam dunia pemrograman.";

$skills = [
    [
        "name" => "PHP",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
    ],
    [
        "name" => "JavaScript",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
    ],
    [
        "name" => "MySQL",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
    ],
    [
        "name" => "HTML5",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
    ],
    [
        "name" => "CSS3",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
    ],
    [
        "name" => "Bootstrap",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
    ],
    [
        "name" => "Git",
        "icon" => "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"
    ]
];

$projects = [
    [
        "title" => "Portofolio Pribadi",
        "description" => "Website portofolio pribadi interaktif dengan animasi dan efek transisi menarik",
        "technologies" => ["JavaScript", "HTML", "CSS", "ScrollReveal.js"],
        "image" => "gambar1.png",
        "demo" => "https://aatha.vercel.app/",
        "github" => "https://github.com/Bangkah"
    ],
    [
        "title" => "Dashboard Admin",
        "description" => "Dashboard admin yang responsive dengan fitur CRUD, chart visualisasi data, dan autentikasi pengguna",
        "technologies" => ["PHP", "MySQL", "JavaScript", "Chart.js"],
        "image" => "gambar2.png",
        "demo" => "https://github.com/Bangkah",
        "github" => "https://github.com/Bangkah"
    ],
    [
        "title" => "Website Penyimpanan Tugas",
        "description" => "Aplikasi penyimpanan dan manajemen file tugas mahasiswa dengan sistem upload, download, dan pencarian file",
        "technologies" => ["PHP", "MySQL", "Bootstrap", "JavaScript"],
        "image" => "gambar3.png",
        "demo" => "https://catatan-kuliah.kesug.com/",
        "github" => "https://github.com/Bangkah"
    ]
];

$contact_info = [
    "email" => " mdhyaulatha@gmail.com",
    "phone" => " +6285270573533",
    "whatsapp" => "+6285270573533",
    "location" => "Lhokseumawe, Indonesia",
    "github" => " https://github.com/Bangkah",
    "linkedin" => "https://www.linkedin.com/in/dhyaul-atha-42a6b7280"
];

// Fungsi untuk menangani form contact
$message_sent = false;
$error_message = "";

if ($_POST && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars(string: $_POST['message'] ?? '');
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "mdhyaulatha@gmail.com"; 
        $subject = "Pesan dari $name melalui formulir kontak";
        $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $message_sent = true;
        } else {
            $error_message = "Gagal mengirim pesan. Silakan coba lagi.";
        }
    } else {
        $error_message = "Semua field harus diisi!";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #667eea;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .btn {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 12px 30px;
            border: 2px solid white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .btn:hover {
            background: white;
            color: #667eea;
            transform: translateY(-2px);
        }

        /* Sections */
        .section {
            padding: 80px 0;
            background: white;
        }

        .section:nth-child(even) {
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #667eea;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image {
            text-align: center;
        }

        .about-image img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .skill-item {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .skill-item:hover {
            transform: translateY(-5px);
        }

        .skill-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-top: 1rem;
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .skill-icon img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .project-description {
            color: #666;
            margin-bottom: 1rem;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .tech-tag {
            background: #667eea;
            color: white;
            padding: 0.2rem 0.5rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .project-links {
            display: flex;
            gap: 1rem;
        }

        .project-links a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .project-links a:hover {
            text-decoration: underline;
        }

        /* Contact Section */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .whatsapp-btn {
            background: #25D366;
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .whatsapp-btn:hover {
            background: #1da851;
            transform: translateY(-2px);
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e9ecef;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: #25D366;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #1da851;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
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
        <nav class="container">
            <div class="logo"><?php echo $site_name; ?></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Halo, Saya Muhammad Dhiyaul Atha</h1>
            <p>Mahasiswa Teknik Informatika & Web Developer</p>
            <a href="#about" class="btn">Lebih Lanjut</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">Tentang Saya</h2>
            <div class="about-content">
                <div class="about-text">
                    <p><?php echo $about_text; ?></p>
                </div>
                <div class="about-image">
                    <img src="portofolio.jpeg" alt="Profile">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title">Keahlian</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                <div class="skill-item">
                    <div class="skill-icon">
                        <img src="<?php echo $skill['icon']; ?>" alt="<?php echo $skill['name']; ?>">
                    </div>
                    <div class="skill-name"><?php echo $skill['name']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Proyek</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="project-image">
                    <div class="project-content">
                        <h3 class="project-title"><?php echo $project['title']; ?></h3>
                        <p class="project-description"><?php echo $project['description']; ?></p>
                        <div class="project-tech">
                            <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <a href="<?php echo $project['demo']; ?>">Demo</a>
                            <a href="<?php echo $project['github']; ?>">GitHub</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Kontak</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="contact-item">
                        <strong>Email:</strong> <?php echo $contact_info['mdhyaulatha@gmial.com']; ?>
                    </div>
                    <div class="contact-item">
                        <strong>Telepon: </strong> <?php echo $contact_info['phone']; ?>
                    </div>
                    <div class="contact-item">
                        <strong>Lokasi: </strong> <?php echo $contact_info['location']; ?>
                    </div>
                    <div class="contact-item">
                        <strong>GitHub: </strong> <a href="<?php echo $contact_info['github']; ?>">Bangkah</a>
                    </div>
                    <div class="contact-item">
                        <strong>LinkedIn: </strong> <a href="<?php echo $contact_info['linkedin']; ?>">Muhammad Dhiyaul Atha</a>
                    </div>
                    
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/85270573533<?php echo str_replace(['+', ' ', '-'], '', $contact_info['whatsapp']); ?>?text=Halo%20Muhammad%20Dhiyaul%20Atha,%20saya%20ingin%20bertanya%20tentang%20project%20Anda" class="whatsapp-btn">
                        📱 Chat WhatsApp
                    </a>
                </div>
                
                <div class="contact-form">
                    <h3>Kirim</h3>
                    
                    
                    <?php if ($error_message): ?>
                    <div class="error-message">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="#contact">
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan:</label>
                            <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" name="submit" class="submit-btn">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 <?php echo $site_name; ?>. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling untuk navigasi
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