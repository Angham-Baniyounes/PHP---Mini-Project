<?php 
    $dataStudent = array(
        array(
            'id' => '1',
            'name' => 'Angham',
            'birthday' => '13 November',
            'github account' => 'https://github.com/Angham-Baniyounes?tab=repositories',
            'linkedin' => 'https://www.linkedin.com/in/angham-baniYounes/',
            'image' => 'https://avatars.githubusercontent.com/u/71583926?s=460&u=290e3c7e943e0eea053b4bb1c89607207d67163a&v=4',
            'projects' => array(
                            array(
                                'project_name' => 'Portfolio',
                                 'is_compleated' => 'yes'
                                ),
                            array(
                                'project_name' => 'Wordpress',
                                 'is_compleated' => 'no'
                                )
                        ),
            'attendance' => array( 
                                    array(
                                        'check_in' =>'15 dec 2020 09:00',
                                         'check_out' => '15 dec 2020 16:00'
                                    ),
                                    array(
                                        'check_in' => '14 dec 2020 08:00',
                                        'check_out' => '14 dec 2020 14:00'
                                    )
                            )
        ),
        array(
            'id' => '2',
            'name' => 'Leen',
            'birthday' => '1 May',
            'github account' => 'https://github.com/leen-awad',
            'linkedin' => 'https://www.linkedin.com/in/leen-awad/',
            'image' => 'https://avatars.githubusercontent.com/u/71584197?s=460&u=acdb0910edcf720810881c66bea899d5ba4a0a59&v=4',
            'projects' => array(
                            array(
                                    'project_name' => 'Portfolio',
                                    'is_compleated' => 'yes'
                                ),
                            array(
                                    'project_name' => 'Wordpress',
                                    'is_compleated' => 'no'
                                )
                        ),
            'attendance' => array( 
                                    array(
                                        'check_in' =>'15 dec 2020 09:00',
                                         'check_out' => '15 dec 2020 16:00'
                                        ),
                                    array(
                                        'check_in' => '14 dec 2020 08:00',
                                         'check_out' => '14 dec 2020 14:00'
                                        )
                            )
        )
    );
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
                    echo "<br>";
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
            echo "<br>";
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
                    echo "<div class='bg-c-blue counter-block m-t-10 p-20'>
                        <div class='row'>
                            <div class='col-4'>
                                <i class='fa fa-comment'></i>
                                <p>1256</p>
                            </div>
                            <div class='col-4'>
                                <i class='fa fa-user'></i>
                                <p>8562</p>
                            </div>
                            <div class='col-4'>
                                <i class='fa fa-suitcase'></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>";
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