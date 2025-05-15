<!-- header.php -->
<header class="main-header" >
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="logo" >
            <a href="index.php" style="display: flex; align-items: center; text-decoration: none;">
                <span class="logo-icon">
                    <img src="assets/img/logo.jpg" alt="LumiBites Logo">
                </span>
                <span class="logo-text">LumiBites</span>
            </a>
        </div>

        <!-- Hamburger button (mobile only) -->
        <button class="mobile-menu-btn" id="menuToggle" style="font-size: 24px; background: none; border: none; cursor: pointer;">
            <i class="fas fa-bars"></i>
        </button>

        

        <!-- Navigation menu -->
        <nav class="main-nav" id="mobileNav">
            <ul>
                <li><a href="#home-kami">Home</a></li>
                <li><a href="#tentang-kami">Tentang</a></li>
                <li><a href="#produk-unggulan">Produk</a></li>
                <li><a href="#kontak-kami">Kontak</a></li>
            </ul>
        </nav>
    </div>


<style>

.main-nav {
    
    max-height: 0;
    transition: max-height 0.5s ease;
}

.main-nav.show {
    max-height: 300px; /* Sesuaikan berapa tinggi maksimal menu */
}


.main-nav.show {
    display: block;
}


        .logo {
            display: flex;
            align-items: center;
        }

        .logo-icon img {
            height: 48px;
            width: 48px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--accent-color, #f56a6a);
            transition: transform 0.3s ease;
        }

        .logo-text {
            margin-left: 1px; /* Jarak antara logo dan teks */
            font-family: 'Poppins', sans-serif;
            font-size: 2rem; /* Ukuran teks disesuaikan dengan gambar */
            font-weight: 700;
            background: linear-gradient(45deg, #5D4037, #fff0f5);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: inline-block;
            line-height: 1;
        }

        .main-header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .main-nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .main-nav li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .main-nav li.active a {
            color: #007bff;
        }

        .mobile-menu-btn {
            display: none;
        }

        @media (max-width: 768px) {
            .main-nav {
                display: none;
                width: 100%;
                background-color: #fff;
                position: absolute;
                top: 60px;
                left: 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .main-nav ul {
                flex-direction: column;
                padding: 10px;
            }

            .main-nav.show {
                display: block;
            }

            .mobile-menu-btn {
                display: block;
            }
        }
    </style>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll("section, header");
    const navLinks = document.querySelectorAll("nav ul li a");

    window.onscroll = () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            if (scrollY >= sectionTop - 150) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.parentElement.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.parentElement.classList.add("active");
            }

            // Tangani scroll paling atas (scrollY == 0)
            if (scrollY === 0 && link.getAttribute("href") === "#home-kami") {
                link.parentElement.classList.add("active");
            }
        });
    };
});











document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll("section, header");
    const navLinks = document.querySelectorAll("nav ul li a");
    const menuToggle = document.getElementById("menuToggle");
    const mobileNav = document.getElementById("mobileNav");

    window.onscroll = () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            if (scrollY >= sectionTop - 150) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.parentElement.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.parentElement.classList.add("active");
            }

            if (scrollY === 0 && link.getAttribute("href") === "#home-kami") {
                link.parentElement.classList.add("active");
            }
        });
    };

    // Ini tambahan untuk hamburger menu
    menuToggle.addEventListener('click', function () {
        mobileNav.classList.toggle('show');
    });
});

</script>




</header>
