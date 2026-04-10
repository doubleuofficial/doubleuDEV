<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "DoubleU | Official Artist Website"; ?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="description" content="DoubleU - Official Artist Website. One-stop cinematic music creator for film, TV, and sync licensing.">

    <style>
        :root {
            --bg-color: #050505;
            --text-color: #f5f5f7;
            --accent-main: #1a73e8; 
            --youtube-red: #ff0000;
            --spotify-green: #1DB954;
            --card-bg: rgba(20, 20, 20, 0.7); 
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-color);
            background-image: radial-gradient(at 50% 50%, #111 0, #050505 100%);
            background-attachment: fixed;
            color: var(--text-color);
            line-height: 1.6;
            margin: 0;
        }

        .container { width: 100%; max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* HERO SECTION */
        .hero { padding: 160px 0 60px; text-align: center; }
        .artist-name {
            font-size: clamp(3.5rem, 12vw, 7rem); font-weight: 900;
            text-transform: uppercase; letter-spacing: -5px;
            background: linear-gradient(to bottom, #ffffff, #777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .subtitle { font-size: 1rem; opacity: 0.7; letter-spacing: 5px; text-transform: uppercase; margin-bottom: 30px; }

        /* SECTIONS & CARDS */
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            margin-bottom: 80px;
            overflow: hidden;
        }

        .label { color: var(--accent-main); font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px; display: block; }

        /* BUTTONS */
        .btn-primary {
            display: inline-flex; align-items: center; justify-content: center; gap: 10px; padding: 16px 45px; 
            background: var(--accent-main); color: white; border-radius: 50px; font-weight: 700; transition: 0.3s; border: none; cursor: pointer;
        }
        .btn-youtube { background: var(--youtube-red); }
        .btn-play {
            display: flex; align-items: center; justify-content: center; gap: 8px; padding: 10px; 
            background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 30px; font-size: 0.8rem; font-weight: bold; margin-top: 10px;
        }

        /* GRIDS */
        .disco-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 40px;
        }
        .disco-item { padding: 15px; text-align: center; }
        .disco-item img { width: 100%; border-radius: 12px; aspect-ratio: 1/1; object-fit: cover; }

        .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; padding: 60px; }

        /* VIDEO */
        .video-container { position: relative; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; margin-top: 20px; }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

        @media (max-width: 850px) {
            .contact-grid { grid-template-columns: 1fr; padding: 30px; }
            .hero { padding-top: 120px; }
        }
    </style>
</head>
<body>
