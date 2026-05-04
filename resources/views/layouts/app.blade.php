<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Life of Dtrink</title>
    <link rel="icon" href="{{ asset('images/logo3.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    @yield('content')

    <script>
        // ===== MENU CLICK (reset URL) =====
        document.querySelectorAll('.menu a').forEach(link => {
            link.addEventListener('click', function() {
                setTimeout(() => {
                    history.replaceState(null, null, ' ');
                }, 10);
            });
        });

        // ===== SCROLL RESET =====
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        window.onload = function() {
            if (!window.location.hash) {
                window.scrollTo(0, 0);
            }
        };

        // ===== NAVBAR SCROLL =====
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('navbarScroll');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 100) {
                    navbar.classList.add('active');
                } else {
                    navbar.classList.remove('active');
                }
            });
        });

        // ===== CENTER SLIDER (5 ITEMS, MIDDLE BIG) =====
        window.addEventListener("load", function() {
            document.querySelectorAll('.slider-new').forEach(slider => {
                const slides = Array.from(slider.querySelectorAll('.slide'));
                let current = 0;

                function update() {

                    slides.forEach((slide, i) => {

                        // 🔥 RESET CỨNG
                        slide.className = "slide";
                        slide.style.opacity = "0";
                        slide.style.visibility = "hidden";

                        let diff = i - current;

                        if (diff < -2) diff += slides.length;
                        if (diff > 2) diff -= slides.length;

                        // ✅ CHỈ SHOW 5 THẰNG
                        if (diff >= -2 && diff <= 2) {

                            const pos = diff + 2;

                            slide.style.visibility = "visible";
                            slide.style.opacity = "1";

                            slide.classList.add("pos-" + pos);

                            // force reflow
                            slide.offsetHeight;

                            // bật animation
                            slide.style.transition = "transform 0.6s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.6s ease";
                        }
                    });
                }

                function next() {
                    current = (current + 1) % slides.length;
                    update();
                }

                update();
                setInterval(next, 2500);
            });
        });

        if (window.location.hash === "#section6") {
            document.getElementById("section6").scrollIntoView({ behavior: "smooth" });
        }

    </script>

</body>
</html>