    <footer class="float">
        <section id="reserve" class="reserve">
            <h2 class="section-title reserve-title">ご予約</h2>
            <div class="reserve-text">ご予約・お問い合わせはお電話から<br class="is-sp">お願いいたします。</div>
            <a href="tel:03-3403-3044" class="reserve-number">03-3403-3044</a>
        </section>

        <div class="inner">
            <p class="copyright">Copyright &copy; 2022 戈六 All Right Reserved.</p>
        </div>
    </footer>

    <div class="page-top"><a href="#"></a></div>

    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>

        const swiper = new Swiper('.swiper', {
            
            speed: 2000,
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                
            },
        });

    </script>
</body>
</html>