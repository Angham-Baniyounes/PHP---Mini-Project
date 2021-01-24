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
    );
    
    foreach ($dataStudent as $stds => $stds_value) {
        foreach ($stds_value as $std => $std_value) {
            if (is_array($std_value)) {
                // print_r($std_value);
                // echo "<hr>";
                if($std == 'projects') {
                    foreach($std_value as $st => $st_value) {
                        // echo $st."<br>";
                        // print_r($st_value);
                        if ($st == 'projects') {
                            // $projects = $st_value;
                            // print_r($projects);
                            foreach($st_value as $s => $s_value) {
                                // echo $s.$s_value."<br><hr>";
                                if ($s == 'project_name') {
                                    $project_name = $s_value;
                                    // echo $project_name."<br>";
                                } elseif ($s == 'is_compleated') {
                                    if($s_value == 'yes') {
                                        $is_compleated = 'yes';
                                        // echo $is_compleated . " ";
                                    } elseif ($s_value == 'no') {
                                        $is_compleated = 'no';
                                        // echo $is_compleated . " ";
                                    }
                                }
                            }
                        } 
                    }
                
                    // elseif ($st == 'attendance') {
                    //     $attendance = $st_value;
                    //     // print_r($attendance);
                    //     foreach($st_value as $s => $s_value) {
                    //         if ($s == 'check_in') {
                    //             $check_in = $s_value;
                    //             echo $check_in."<br>";
                    //         } elseif ($s == 'check_out') {
                    //            $check_out == $s_value;
                    //            echo $check_out."<br>";
                    //         }
                    //     }
                    // }
                    echo "<br>";
                } elseif ($std == 'attendance') {
                    # code...
                }
            } else {
                if ($std == 'id') {
                    $id = $std_value;
                    echo $id . "<br>";
                } elseif ($std == 'name') {
                    $name = $std_value;
                    echo $name . "<br>";
                } elseif ($std == 'image') {
                    $img = $std_value;
                    echo $img . "<br>";
                } elseif ($std == 'birthday') {
                    $bd = $std_value;
                    echo $bd . "<br>";
                } elseif ($std == 'github account') {
                    $gitAccount = $std_value;
                    echo $gitAccount . "<br>";
                } elseif ($std == 'linkedin') {
                    $linkedin = $std_value;
                    echo $linkedin . "<br>";
                } 
                // else {

                //     echo $std_value . " ";
                // }
            }
            echo "<br>";
        }
        echo "<br>"; 
    }
    echo" </div>
    </div> " ;



?>   