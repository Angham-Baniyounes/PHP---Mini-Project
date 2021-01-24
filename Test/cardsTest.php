<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="indexStyle.css">
    <title>Document</title>
</head>
<body>
<?php include 'dataTest.php';?>
<?php 
    foreach ($dataStudent as $stds => $stds_value) {
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
        echo "<div class='card user-card'>
                <div class='card-header'>
                    <h5>$id</h5>
                </div>
                <div class='card-block'>
                    <div class='user-image'>";
                        echo "<img src=".$img." class='img-radius' alt='User-Profile-Image'>
                    </div>";
                    echo "<h6 class='f-w-600 m-t-25 m-b-10'>$name</h6>";
                    echo "<p class='text-muted'>Active | Female | Birthday : $bd </p>";
                    echo "<hr>";
                    echo "<p class='text-muted m-t-15'>Activity Level: 87%</p>";
                    echo "<ul class='list-unstyled activity-leval'>
                        <li class='active'></li>
                        <li class='active'></li>
                        <li class='active'></li>
                        <li></li>
                        <li></li>
                    </ul>";
                    echo "<p class='m-t-15 text-muted'>a Trainee at Coding Academy by Orange</p>
                    <hr>";
                    echo "<div class='row justify-content-center user-social-link'>";
                        echo "<div class='col-auto'><a href=".$linkedin."><i class='fa fa-linkedin text-linkedin'></i></a></div>";
                        echo "<div class='col-auto'><a href=".$gitAccount."><i class='fa fa-github text-github'></i></a></div>";
                    echo "</div>";
                echo"</div>
            </div>";
    }
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>