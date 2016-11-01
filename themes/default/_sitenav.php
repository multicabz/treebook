<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> <?php e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire'); ?></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php if (empty($current_user)) : ?>
        <li><a href="<?php echo site_url(LOGIN_URL); ?>"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Sign In</a></li>
        <?php else : ?>
        <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('users/profile'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $current_user->display_name; ?></a></li>
        <li><a href="<?php echo site_url('logout'); ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> <?php e(lang('bf_action_logout')); ?></a></li>
        <?php endif; ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container"><!-- Start of Main Container -->