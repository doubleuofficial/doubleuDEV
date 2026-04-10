<?php 
    $pageTitle = "DoubleU | Home";
    include(__DIR__ . '/../includes/header.php'); 
?>

<header class="hero container reveal">
    <h1 class="artist-name">DoubleU</h1>
    <p class="subtitle">Official Artist Website</p>
</header>

<main class="container">
    
    <div class="glass-card reveal" style="padding: 20px; text-align: center; border: 1px solid var(--accent-main); background: rgba(26,115,232,0.1);">
        <p style="font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
            Incoming: <span style="color: var(--accent-main);">A Place To Land</span> drops 4/24/26
        </p>
    </div>

    <section id="music" class="glass-card reveal" style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px;">
            <img src="../assets/images/coldsheets.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="Latest Release">
        </div>
        <div style="flex: 1.2; padding: 60px; min-width: 300px;">
            <span class="label">Latest Release</span>
            <h2 style="font-size: 3rem; margin-bottom: 20px; margin-top: 0;">Cold Sheets Wide Eyes</h2>
            <a href="https://youtu.be/5DQTE3P8uBY" class="btn-primary btn-youtube" target="_blank">
                <i class="fa-brands fa-youtube"></i> Watch on YouTube
            </a>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/5DQTE3P8uBY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="about" class="glass-card reveal" style="display: flex; flex-wrap: wrap; flex-direction: row-reverse;">
        <div style="flex: 1; min-width: 300px; height: 500px; background: url('../assets/images/doubleu.jpg') center/cover; filter: grayscale(1);"></div>
        <div style="flex: 1; padding: 60px; min-width: 300px;">
            <span class="label">The Story</span>
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; margin-top: 0;">Pain Into Purpose</h2>
            <p style="opacity: 0.8;">From Army combat medic to independent creator, DoubleU translates scars directly into art. Deeply rooted in the 904 and 405.</p>
            <a href="profile.php" class="btn-primary" style="margin-top: 20px;">View Full Profile</a>
        </div>
    </section>

    <section id="licensing" class="glass-card reveal" style="padding: 60px; border-left: 4px solid var(--accent-main);">
        <span class="label">Sync & Licensing</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 20px; margin-top: 0;">Cinematic Catalog</h2>
        <p style="opacity: 0.8; max-width: 800px;">Every track is 100% pre-cleared for film, TV, and advertising. One-stop shop for both master and publishing.</p>
        <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="padding: 20px; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px;">
                <p style="color: var(--accent-main); font-size: 0.7rem; font-weight: bold; margin: 0;">THRILLER</p>
                <p style="margin: 5px 0 0;"><strong>Zero Sum</strong></p>
            </div>
            <div style="padding: 20px; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px;">
                <p style="color: var(--accent-main); font-size: 0.7rem; font-weight: bold; margin: 0;">NOIR</p>
                <p style="margin: 5px 0 0;"><strong>Two of Us</strong></p>
            </div>
        </div>
    </section>

    <section id="discography" class="reveal" style="margin-bottom: 80px;">
        <h2 style="text-transform: uppercase; letter-spacing: 2px;">Full Discography</h2>
        <div class="disco-grid">
            <div class="glass-card disco-item">
                <img src="../assets/images/aplacetoland.jpg" alt="A Place To Land">
                <h3>A Place To Land</h3>
                <p style="opacity: 0.5; font-size: 0.8rem;">Single • 2026</p>
            </div>
            <div class="glass-card disco-item">
                <img src="../assets/images/faded405.jpg" alt="Faded 405">
                <h3>Faded 405</h3>
                <p style="opacity: 0.5; font-size: 0.8rem;">Album • 2026</p>
            </div>
            <div class="glass-card disco-item">
                <img src="../assets/images/zerosum.jpg" alt="Zero Sum">
                <h3>Zero Sum</h3>
                <p style="opacity: 0.5; font-size: 0.8rem;">Single • 2026</p>
            </div>
            <div class="glass-card disco-item">
                <img src="../assets/images/twoofus.jpg" alt="Two of Us">
                <h3>Two of Us</h3>
                <p style="opacity: 0.5; font-size: 0.8rem;">Single • 2021</p>
            </div>
        </div>
    </section>

    <section id="contact" class="glass-card reveal">
        <div class="contact-grid">
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 20px; margin-top: 0;">Get In Touch</h2>
                <p style="color: var(--accent-main); font-weight: bold;">sync@doubleuofficial.online</p>
            </div>
            <form id="subscribe-form" action="../includes/process.php" method="POST">
                <input type="email" name="user_email" placeholder="Enter email address" style="width: 100%; padding: 15px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; color: white; margin-bottom: 10px;" required>
                <button type="submit" class="btn-primary" style="width: 100%;">Subscribe</button>
            </form>
        </div>
    </section>

</main>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
