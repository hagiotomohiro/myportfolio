<!-- footer start -->
<footer class="footer open">
    <p class="footer__copyright">&copy; 2024 Tomohiro hagio</p>
</footer>
<!-- footer end -->
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.js" defer></script>
<script src="./assets/js/particles.js" defer></script>
<script src="./assets/js/app.js" defer></script>
<?php
$current_path = $_SERVER['PHP_SELF'];
$current_file = basename($current_path);
?>

<?php if ($current_file === 'index.php') : ?>
    <script src="/myportfolio/assets/js/main.js" defer></script>
<?php elseif (strpos($current_path, '/pages/') !== false) : ?>
    <script src="/myportfolio/assets/js/other.js" defer></script>
<?php endif; ?>
</body>

</html>