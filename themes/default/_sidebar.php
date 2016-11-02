<div class="row profile">
        <div class="col-md-3">
                <div class="profile-sidebar">
                        <div class="basic">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="<?php echo site_url('media/photos/3.jpg'); ?>" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                            <?php echo $current_user->display_name; ?>
                                    </div>
                                    <div class="profile-usertitle-job">
                                            Developer
                                    </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                            </div>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                                <ul class="nav">
                                        <li <?php echo check_segment(2,""); ?>>
                                                <a href="<?php echo site_url(); ?>">
                                                <i class="glyphicon glyphicon-home"></i>
                                                Overview </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                    <i class="glyphicon glyphicon-tree-deciduous"></i>
                                                    Family tree
                                                </a>
                                        </li>
                                        <li <?php echo check_method('profile'); ?>>
                                                <a href="<?php echo site_url('users/profile'); ?>">
                                                <i class="glyphicon glyphicon-wrench"></i>
                                                Account Settings </a>
                                        </li>
                                        <li>
                                                <a href="#" target="_blank">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                Tasks </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                <i class="glyphicon glyphicon-flag"></i>
                                                Help </a>
                                        </li>
                                </ul>
                        </div>
                        <!-- END MENU -->
                </div>
        </div>
        <div class="col-md-9">
            <div class="action-notification">
                 <?php echo Template::message(); ?>
            </div>