<?php echo theme_view('header'); ?>
<?php echo theme_view('_sitenav'); ?>

<?php if(isset($current_user)) : ?>
    <?php echo theme_view('_sidebar'); ?>
<?php endif; ?>

    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();

        echo theme_view('footer');
    ?>