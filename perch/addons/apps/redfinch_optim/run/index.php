<?php

include(__DIR__ . '/../../../../core/inc/api.php');

// Permissions
if(!($CurrentUser->logged_in() && $CurrentUser->has_priv('redfinch_optim.run_task'))) {
    PerchUtil::redirect(PERCH_LOGINPATH);
}

// Perch API
$API = new PerchAPI(1.0, 'redfinch_optim');

// APIs
$Lang = $API->get('Lang');
$HTML = $API->get('HTML');
$Settings = $API->get('Settings');

// Page settings
$Perch->page_title = $Lang->get('Run Task');

// Page Initialising
include('../modes/_subnav.php');
include('../modes/tasks.run.pre.php');

// Perch Frame
include(PERCH_CORE . '/inc/top.php');

// Page
include('../modes/tasks.run.post.php');

// Perch Frame
include(PERCH_CORE . '/inc/btm.php');
