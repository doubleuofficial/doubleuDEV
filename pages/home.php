<?php 
    $pageTitle = "DoubleU | Official Artist Website";
    
    // We include the header.php first for meta tags, 
    // but the CSS below will override or supplement it.
    include(__DIR__ . '/../includes/header.php'); 
?>

<style>
    /* --- INTEGRATED CSS FOR HOME.PHP --- */
    :root {
        --bg-color: #050505;
        --text-color: #f5f5f7;
        --accent-main: #1a73e8; 
        --youtube-red: #ff0000;
        --card-bg: rgba(20, 20, 20, 0.7); 
        --border-color: rgba(255, 255, 255, 0.08);
    }

    body {
        background-color: var(--bg-color);
        background-image: radial-gradient(at 50% 50%, #111 0, #050505 100%);
        background-attachment: fixed;
        color: var(--text-color);
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .hero { padding: 160px 0 60px; text-align: center; }
    
    .artist-name {
        font-size: clamp(3.5rem, 12vw, 7rem); 
        font-weight: 900;
        text-transform: uppercase; 
        letter-spacing: -5px;
        background: linear-gradient(to bottom, #ffffff, #777);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 0;
    }

    .subtitle { 
        font-size: 1rem; opacity: 0.7; letter-spacing: 5px; 
        text-transform: uppercase; margin-bottom: 30px; 
    }

    .glass-card {
        background: var(--card-bg);
        backdrop-filter: blur(15px);
        border: 1px solid var(--border-color);
        border-radius: 24px;
        margin-bottom: 80px;
        overflow: hidden;
    }

    .label { 
        color: var(--accent-main); font-size: 0.75rem; font-weight: 800; 
        text-transform: uppercase; letter-spacing: 3px; display: block; margin-bottom: 10px;
    }

    .btn-primary {
        display: inline-flex; align-items: center; justify-content: center; gap: 10px; 
        padding: 16px 45px; background: var(--accent-main); color: white; 
        border-radius: 50px; font-weight: 700; transition: 0.3s; border: none; cursor: pointer;
        text-decoration: none;
    }

    .btn-youtube { background: var(--youtube-red); }

    .video-container { 
        position: relative; padding-bottom: 56.25%; height: 0; 
        border-radius: 12px; overflow: hidden; margin-top: 20px; 
    }
    .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

    .disco-grid {
        display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
        gap: 20px; margin-top: 40px;
    }

    .disco-item { padding: 15px; text-align: center; }
    .disco-item img { width: 100%; border-radius: 12px; aspect-ratio: 1/1; object-fit: cover; }

    .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; padding: 60px; }

    @media (max-width: 850px) {
        .contact-grid { grid-template-columns: 1fr; padding: 30px; }
        .hero { padding-top: 120px; }
    }
</style>

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
                <a href="profile.php" class="btn-primary" style="margin-top: 20px;">Read Full Bio</a>
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
