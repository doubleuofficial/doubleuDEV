<?php 
    $pageTitle = "DoubleU | Official Artist Website";
    include('../includes/header.php'); 
    include('../includes/navbar.php'); 
?>

    <header class="hero container reveal">
        <h1 class="artist-name">DoubleU</h1>
        <p class="subtitle">Official Artist Website</p>
    </header>

    <main class="container">
        <section id="music" class="glass-card reveal" style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <img src="../assets/images/coldsheets.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="Latest Release">
            </div>
            <div style="flex: 1.2; padding: 60px; min-width: 300px;">
                <span class="label">Latest Release</span>
                <h2 style="font-size: 3rem; margin-bottom: 20px;">Cold Sheets Wide Eyes</h2>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/5DQTE3P8uBY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section id="about" class="glass-card reveal" style="display: flex; flex-wrap: wrap; flex-direction: row-reverse;">
            <div style="flex: 1; min-width: 300px; height: 500px; background: url('../assets/images/doubleu.jpg') center/cover; filter: grayscale(1);"></div>
            <div style="flex: 1; padding: 60px; min-width: 300px;">
                <span class="label">The Story</span>
                <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Pain Into Purpose</h2>
                <p style="opacity: 0.8;">From Army combat medic to independent creator.</p>
            </div>
        </section>

        <section id="discography" class="reveal" style="margin-bottom: 80px;">
            <h2 style="text-transform: uppercase; letter-spacing: 2px;">Full Discography</h2>
            <div class="disco-grid">
                <div class="glass-card disco-item">
                    <img src="../assets/images/aplacetoland.jpg" alt="A Place To Land">
                    <h3>A Place To Land</h3>
                </div>
                <div class="glass-card disco-item">
                    <img src="../assets/images/faded405.jpg" alt="Faded 405">
                    <h3>Faded 405</h3>
                </div>
                <div class="glass-card disco-item">
                    <img src="../assets/images/zerosum.jpg" alt="Zero Sum">
                    <h3>Zero Sum</h3>
                </div>
                <div class="glass-card disco-item">
                    <img src="../assets/images/twoofus.jpg" alt="Two of Us">
                    <h3>Two of Us</h3>
                </div>
            </div>
        </section>

    </main>

<?php include('../includes/footer.php'); ?>