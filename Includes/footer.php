<footer style="text-align: center; padding: 60px; opacity: 0.4; font-size: 0.8rem;">
        <p>© <?php echo date("Y"); ?> DOUBLEU. ALL RIGHTS RESERVED.</p>
    </footer>

    <script>
        // Scroll animations
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('active'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
    </script>
</body>
</html>
