<!-- Footer -->
    <footer class="main-footer" id="kontak-kami">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <div class="footer-logo">
                        <a href="index.php">
                            <!-- <span class="logo-icon"><i class="fas fa-store-alt"></i></span> -->
                            <span class="logo-text">Cookies Pie</span>
                        </a>
                    </div>
                    <p>Toko Jualan.</p>
                    <div class="footer-social">
                        <!-- <a href="#"><i class="fab fa-facebook-f"></i></a> -->
                        <a href="https://www.instagram.com/cookie_zpie?igsh=MTU3eDJ5Y2dtZjRhaA=="><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6285274421751" target="_blank"><i class="fab fa-whatsapp"></i></a>

                    </div>
                </div>
                
                <div class="footer-col footer-links">
                    <h3>Link Cepat</h3>
                    <ul>
                    <li><a href="#home-kami">Home</a></li>
                <li><a href="#tentang-kami">Tentang</a></li>
                <li><a href="#produk-unggulan">Produk</a></li>
                        
                    </ul>
                </div>
                
                
                
                <div class="footer-col footer-contact">
                    <h3>Kontak Kami</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl.Srikandi No 1, Kota Pekanbaru, Riau</li>
                        <li><i class="fab fa-whatsapp"></i> 0852-7442-1751</li>
                        <li>
    <a href="https://www.instagram.com/cookie_zpie?igsh=MTU3eDJ5Y2dtZjRhaA==" target="_blank" style="text-decoration: none; color: inherit;">
      <i class="fab fa-instagram"></i> @cookie_zpie
    </a>
  </li>
                        <!-- <li><i class="fas fa-envelope"></i> info@namatoko.com</li> -->
                        <li><i class="fas fa-clock"></i> Senin-Minggu, 08:00-21:00 WIB</li>
                    </ul>
                </div>
            </div>
            
           
        </div>
    </footer>




        <style>

/* Hero Slider */
.hero-slider {
    position: relative;
    width: 100%;
    height: 80vh;
    overflow: hidden;
    cursor: grab;
    user-select: none;
}

.hero-slider:active {
    cursor: grabbing;
}

.hero-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease;
    display: flex;
    align-items: center;
}

/* Dots Styling */
.hero-slider-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255,255,255,0.5);
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background-color: white;
    transform: scale(1.2);
}

/* Touch Friendly Controls */
.hero-slider-controls button {
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.hero-slider-controls button:hover {
    background: rgba(255,255,255,0.4);
}

.slider-prev { left: 20px; }
.slider-next { right: 20px; }


        </style>







    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.hero-slider');
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    let startX, moveX;
    const threshold = 50;

    // Touch events for swipe
    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    }, { passive: true });

    slider.addEventListener('touchmove', (e) => {
        if (!startX) return;
        moveX = e.touches[0].clientX;
    }, { passive: true });

    slider.addEventListener('touchend', () => {
        if (!startX || !moveX) return;
        
        const diffX = startX - moveX;
        if (diffX > threshold) {
            nextSlide();
        } else if (diffX < -threshold) {
            prevSlide();
        }
        
        startX = null;
        moveX = null;
    });

    // Dot click navigation
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideIndex = parseInt(this.getAttribute('data-slide'));
            goToSlide(slideIndex);
        });
    });

    // Button controls
    document.querySelector('.slider-prev').addEventListener('click', prevSlide);
    document.querySelector('.slider-next').addEventListener('click', nextSlide);

    function updateSlider() {
        slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentIndex);
        });
        
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider();
    }

    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    // Auto slide (optional)
    setInterval(nextSlide, 5000);
});







    </script>

    <script src="assets/js/main.js"></script>