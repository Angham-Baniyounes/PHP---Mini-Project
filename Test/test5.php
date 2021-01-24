<?php 
    include 'data.php';
    $url = $_SERVER['REQUEST_URI'];
    $URL = explode('=', $url);
    $ID = $URL[1];
    foreach ($dataTrainee as $stds => $stds_value) {
        if($stds_value['id'] == $ID) {
            foreach ($stds_value as $std => $std_value) {
                if (is_array($std_value)) {
                    if($std == 'projects') {
                        foreach($std_value as $st => $st_value) {
                            foreach($st_value as $s => $s_value) {
                                if ($s == 'project_name') {
                                    $project_name = $s_value;
                                } elseif ($s == 'is_compleated') {
                                    if($s_value == 'yes') {
                                        $is_compleated = 'yes';
                                    } elseif ($s_value == 'no') {
                                        $is_compleated = 'no';
                                    }
                                }
                            }
                        }
                    } elseif ($std == 'attendance') {
                        foreach($std_value as $st => $st_value) {
                            foreach($st_value as $s => $s_value) {
                                if ($s == 'check_in') {
                                    $check_in = $s_value;
                                } elseif ($s == 'check_out') {
                                    $check_out = $s_value;
                                }
                            }
                        }
                    }
                } else {
                    if ($std == 'id') {
                        $id = $std_value;
                    } elseif ($std == 'name') {
                        $name = $std_value;
                    } elseif ($std == 'image') {
                        $img = $std_value;
                    } elseif ($std == 'birthday') {
                        $bd = $std_value;
                    } elseif ($std == 'github account') {
                        $gitAccount = $std_value;
                    } elseif ($std == 'linkedin') {
                        $linkedin = $std_value;
                    } 
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="profileStyle.css">
        <title>Profile</title>
    </head>
    <body>
    <div class="container">
        <div class="main-body">    
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                            <?php echo "<h4>$name</h4>"; ?>
                            <p class="text-secondary mb-1">a Trainee at Coding Academy by Orange as Full Stack Developer</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class='fa fa-linkedin text-linkedin'></i></h6>
                                <span class="text-secondary"><?php echo"<a href=$linkedin>"?>Linkedin</a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class='fa fa-github text-github'></i></h6>
                                <span class="text-secondary"><?php echo"<a href=$g>"?>Github</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo "$name"; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Birthday</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo "$bd"; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">projects</i></h6>
                            <!-- <small><?php echo " $project_name "; ?></small>
                            <?php 
                                if($is_compleated == 'yes') {
                                    echo "<div class='progress mb-3' style='height: 5px'>
                                            <div class='progress-bar bg-primary' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";

                                }elseif ($is_compleated == 'no') {
                                    echo "<div class='progress mb-3' style='height: 5px'>
                                            <div class='progress-bar bg-primary' role='progressbar' style='width: 70%' aria-valuenow='72' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                }
                            ?> -->
                            <small>project_name</small>
                            <div class='progress mb-3' style='height: 5px'>
                                <div class='progress-bar bg-primary' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>
                            <small>wordpress</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">attendance</i></h6>
                        <small>15 dec 2020</small>
                        <div class="attendance"> 
                            <div>
                                <?php ?>
                                <i class="fa fa-sign-in" aria-hidden="true"> 09:00 </i> 
                            </div>
                            <div>
                                <i class="fa fa-sign-out" aria-hidden="true"> 16:00 </i>
                            </div>
                        </div>
                        <small>14 dec 2020</small>
                        <div>
                            <i class="fa fa-sign-in" aria-hidden="true"> 09:00 </i> 
                        </div>
                        <div>
                            <i class="fa fa-sign-out" aria-hidden="true"> 16:00 </i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>