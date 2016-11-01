<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>
<p><br/><a href="<?php echo site_url(); ?>">&larr; <?php echo lang('us_back_to') . $this->settings_lib->item('site.title'); ?></a></p>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"><?php echo lang('us_login'); ?></h1>
             <?php echo Template::message(); ?>

            <?php
                    if (validation_errors()) :
            ?>
            <div class="row-fluid">
                    <div class="span12">
                            <div class="alert alert-danger fade in">
                              <a data-dismiss="alert" class="close">&times;</a>
                                    <?php echo validation_errors(); ?>
                            </div>
                    </div>
            </div>
            <?php endif; ?>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <?php echo form_open(LOGIN_URL, array('autocomplete' => 'off','class'=>'form-signin')); ?>
                    <input type="text" name="login" id="login_value" class="form-control" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" required autofocus />
                    <input type="password" name="password" id="password" class="form-control" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" required />                    
                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="5" />
                    <?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
                        <label class="checkbox pull-left">
                            <input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3" />
                            Remember me
                        </label>
                    <?php endif; ?>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                <?php echo form_close(); ?>
            </div>
            <?php // show for Email Activation (1) only
		if ($this->settings_lib->item('auth.user_activation_method') == 1) : ?>
            <!-- Activation Block -->
                            <p style="text-align: left" class="well">
                                    <?php echo lang('bf_login_activate_title'); ?><br />
                                    <?php
                                    $activate_str = str_replace('[ACCOUNT_ACTIVATE_URL]',anchor('/activate', lang('bf_activate')),lang('bf_login_activate_email'));
                                    $activate_str = str_replace('[ACTIVATE_RESEND_URL]',anchor('/resend_activation', lang('bf_activate_resend')),$activate_str);
                                    echo $activate_str; ?>
                            </p>
            <?php endif; ?>

            <p style="text-align: center">
                    <?php if ( $site_open ) : ?>
                            <?php echo anchor(REGISTER_URL, lang('us_sign_up')); ?>
                    <?php endif; ?>

                    <!-- <br/><?php echo anchor('/forgot_password', lang('us_forgot_your_password')); ?> -->
            </p>
        </div>
    </div>
</div>