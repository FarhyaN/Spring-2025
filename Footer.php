</main>
    <footer>
    <div class="social-icons">

    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div>

					</ul>
        <p>&copy; 2025 Fusion Cuisine. All rights reserved. Designed by Farhya Ndancky for CIS 344</p>
    </footer>
    <!-- JavaScript for background slideshow -->
<script>
    const images = [
        'images/bg1.jpeg',
        'images/bg2.jpeg',
        'images/bg3.webp'
    ];

    let index = 0;
    const body = document.getElementById('background');

    function changeBackground() {
        body.style.backgroundImage = `url('${images[index]}')`;
        body.style.backgroundSize = 'cover';
        body.style.backgroundRepeat = 'no-repeat';
        body.style.backgroundPosition = 'center';
        body.style.backgroundAttachment = 'fixed';

        index = (index + 1) % images.length;
    }

    changeBackground(); // Initial
    setInterval(changeBackground, 5000);
 </script>
</body>
</html>
