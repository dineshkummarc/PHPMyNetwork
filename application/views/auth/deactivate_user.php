<?php
require_once(__DIR__ . '/../basic.php'); ?>
<div>
    <?php require_once(__DIR__ .'/../devices/nav.php');?>
</div>
<div id="container">
    <div class="pad_15 login">
        <div id="infoMessage"><?php echo $message; ?></div>
        <h1><?php echo lang('deactivate_heading'); ?></h1>

        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>
        <div style="margin-left:1em;">
        <?php echo form_open("auth/deactivate/" . $user->id); ?>

        <p>
            <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
            <input type="radio" name="confirm" value="yes" checked="checked"/>
            <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
            <input type="radio" name="confirm" value="no"/>
        </p>

        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id' => $user->id)); ?>

        <p><?php echo form_submit('submit', lang('deactivate_submit_btn')); ?></p>

        <?php echo form_close(); ?>
    </div>
    </div>
</div>
