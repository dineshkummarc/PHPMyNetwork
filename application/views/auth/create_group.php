<?php
require_once(__DIR__ . '/../basic.php'); ?>
<div>
    <?php require_once(__DIR__ .'/../devices/nav.php');?>
</div>
<div id="container">
    <div class="pad_15 login">
        <div id="infoMessage"><?php echo $message; ?></div>
        <h1><?php echo lang('create_group_heading'); ?></h1>

        <p><?php echo lang('create_group_subheading'); ?></p>

        <div id="infoMessage"><?php echo $message; ?></div>
        <div style="margin-left:1em;">
        <?php echo form_open("auth/create_group"); ?>

        <p>
            <?php echo lang('create_group_name_label', 'group_name'); ?> <br/>
            <?php echo form_input($group_name); ?>
        </p>

        <p>
            <?php echo lang('create_group_desc_label', 'description'); ?> <br/>
            <?php echo form_input($description); ?>
        </p>

        <p><?php echo form_submit('submit', lang('create_group_submit_btn')); ?></p>

        <?php echo form_close(); ?>
    </div>
    </div>
</div>

