<?php include 'data.php'; ?>
<?php 
    foreach ($dataTrainee as $stds => $stds_value) {
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
        echo "<a href='profile.php/?id=$id'>
            <div class='col-md-3'>
                <div class='card user-card'>
                    <div class='card-header'>
                        <h5>$id</h5>
                    </div>
                    <div class='card-block'>
                        <div class='user-image'>";
                            echo "<img src=".$img." class='img-radius' alt='User-Profile-Image'>
                        </div>";
                        echo "<h6 class='f-w-600 m-t-25 m-b-10'>$name</h6>";
                        echo "<p class='text-muted'>Female | Birthday : $bd </p>";
                        echo "<hr>";
                        echo "<p class='m-t-15 text-muted'>a Trainee at Coding Academy by Orange</p>
                        <hr>";
                        echo "<div class='row justify-content-center user-social-link'>";
                            echo "<div class='col-auto'><a href=".$linkedin."><i class='fa fa-linkedin text-linkedin'></i></a></div>";
                            echo "<div class='col-auto'><a href=".$gitAccount."><i class='fa fa-github text-github'></i></a></div>";
                        echo "</div>";
                    echo"</div>
                </div>          
            </div>
        </a>"; 
    }
?>    