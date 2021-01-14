<footer class="p-3 mt-5" id="footer" style="background-color: #ffb3a9; color: #fff">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('sidebar-footer')): ?>
                <div class="container">
                    <div class="row">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="absolute-widgets">
            <div class="container">
                <div class="copyright-footer text-center">
                    &copy H&N Cosmetics
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
