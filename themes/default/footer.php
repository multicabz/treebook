    </div> <!--end of container-->
    <?php if ( ! isset($show) || $show == true) : ?>
    <hr />
    <footer class="footer">
        <div class="container">
            <p class="text-center">&copy TREEBOOK <?php echo date("Y"); ?></a></p>
        </div>
    </footer>
    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-3.1.1.js"><\/script>');</script>
    <?php echo Assets::js(); ?>
</body>
</html>