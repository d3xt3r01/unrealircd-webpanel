<?php
require_once "../common.php";
require_once "../connection.php";
require_once "../header.php";
require_once "../Classes/class-checkup.php";


$checkup = new CheckUp();


?>
<h4>Network Health Checkup</h4>

<div class="container">

<div class="row mt-3">
    <div class="col-sm mb-3">
        <div class="card text-center">
            <div class="card-header bg-<?php echo ($checkup->num_of_problems['chanmodes']) ? "danger" : "success"; ?> text-white">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-hashtag fa-3x"></i>
                    </div>
                    <div class="col">
                        <h3 class="display-4"><?php echo $checkup->num_of_problems['chanmodes']; ?></h3><div class="display-5">problems</div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6>Channel Modes</h6>
                    </div>
                    <div class="col"> <a class="btn btn-primary">View</a></div>
                </div>
            </div>
        </div>
        

    </div>
    <div class="col-sm mb-3">
        <div class="card text-center">
            <div class="card-header bg-<?php echo ($checkup->num_of_problems['usermodes']) ? "danger" : "success"; ?> text-white">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <div class="col">
                        <h3 class="display-4"><?php echo $checkup->num_of_problems['usermodes']; ?></h3><div class="display-5">problems</div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6>User Modes</h6>
                    </div>
                    <div class="col"><a class="btn btn-primary">View</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm mb-3">
        <div class="card text-center">
            <div class="card-header bg-warning">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-plug fa-3x"></i>
                    </div>
                    <div class="col">
                        <h3 class="display-4"><?php // nothing ?></h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6>Modules</h6>
                    </div>
                    <div class="col"><a class="btn btn-primary">View</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm mb-3">
        <div class="card text-center">
            <div class="card-header bg-secondary text-white">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-network-wired fa-3x"></i>
                    </div>
                    <div class="col">
                        <h3 class="display-4"><?php // nothing ?></h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6>Servers</h6>
                    </div>
                    <div class="col"> <a class="btn btn-primary">View</a></div>
                </div>
            </div>
        </div>
    </div>
</div>