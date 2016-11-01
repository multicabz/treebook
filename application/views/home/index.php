<?php if(!isset($current_user)) : ?>

<div class="jumbotron">
	<h1>Welcome to Treebook!</h1>

	<p class="lead">Kickstart your CodeIgniter applications and save yourself 100s of hours of development time.<br/>That means you make more money.</p>

	<?php if (isset($current_user->email)) : ?>
		<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> View my family</a>
	<?php else :?>
		<a href="<?php echo site_url(LOGIN_URL); ?>" class="btn btn-success"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <?php echo lang('bf_action_login'); ?></a>
	<?php endif;?>
</div>

<hr />

<div class="row text-center">
    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo site_url('media/photos/1.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
      <h2>Johnshe Ricaplaza</h2>
      <p>Hellow world!</p>
      <p><a class="btn btn-default" href="#" role="button">View profile »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo site_url('media/photos/2.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
      <h2>Jenarie Undang</h2>
      <p>We have a vacation today!</p>
      <p><a class="btn btn-default" href="#" role="button">View profile »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo site_url('media/photos/3.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
      <h2>Amille Rey Cabasag</h2>
      <p>Family reunion today!</p>
      <p><a class="btn btn-default" href="#" role="button">View profile »</a></p>
    </div><!-- /.col-lg-4 -->
</div>

<?php else: ?>

            <div class="col-md-9">
                <div class="profile-content">
                               Some user related content goes here...
                </div>
            </div>
    </div> <!---_sidebar end---->

<?php endif; ?>
