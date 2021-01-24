<!-- <div class="col-md-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
                    <p class="text-muted">Active | Male | Born 23.05.1992</p>
                    <hr>
                    <p class="text-muted m-t-15">Activity Level: 87%</p>
                    <ul class="list-unstyled activity-leval">
                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="bg-c-green counter-block m-t-10 p-20">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-comment"></i>
                                <p>1256</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-user"></i>
                                <p>8562</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-suitcase"></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr>
                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                    </div>
                </div>
            </div>
        </div>    
         
        <div class="col-md-4">            
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
                    <p class="text-muted">Active | Male | Born 23.05.1992</p>
                    <hr>
                    <p class="text-muted m-t-15">Activity Level: 87%</p>
                    <ul class="list-unstyled activity-leval">
                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="bg-c-yellow counter-block m-t-10 p-20">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-comment"></i>
                                <p>1256</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-user"></i>
                                <p>8562</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-suitcase"></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr>
                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                    </div>
                </div>
            </div>
        </div> -->

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
                            array('project_name' => 'Profile', 'is_compleated' => 'yes'),
                            array('project_name' => 'Wordpress', 'is_compleated' => 'no')
                        ),
            'attendance' => array( array('check_in' =>'15 dec 2020 09:00', 'check_ out' => '15 dec 2020 16:00'),
                                array('check_in' => '14 dec 2020 08:00', 'check_ out' => '14 dec 2020 14:00')
                            )
        ),
        // array(
        //     'id' => '1',
        //     'name' => 'Angham',
        //     'birthday' => '13 November',
        //     'github account' => 'https://github.com/Angham-Baniyounes?tab=repositories',
        //     'linkedin' => 'https://www.linkedin.com/in/angham-baniYounes/',
        //     'image' => 'https://avatars.githubusercontent.com/u/71583926?s=460&u=290e3c7e943e0eea053b4bb1c89607207d67163a&v=4',
        //     'projects' => array(
        //                     array('project_name' => 'Protfolio', 'is_compleated' => 'yes'),
        //                     array('project_name' => 'Wordpress', 'is_compleated' => 'no')
        //                 ),
        //     'attendance' => array( array('check_in' =>'15 dec 2020 09:00', 'check_ out' => '15 dec 2020 16:00'),
        //                         array('check_in' => '14 dec 2020 08:00', 'check_ out' => '14 dec 2020 14:00')
        //                     )
        // )
    );
    echo " <div class='col-md-4'><div class='card user-card'>";
    foreach($dataStudent as $stds => $stds_value) {
        foreach($stds_value as $std => $std_value) {
            if(is_array($std_value)) {
                foreach($std_value as $st => $st_value) {
                    // echo $st_value . " ";
                    foreach($st_value as $s => $s_value) {
                        echo $s_value . " ";
                    }
                    echo "<br>";
                }
            } else {
                if($std == 'name') {
                    $name = $std_value;
                    echo "<div class='card-header'>";
                            echo"<h5>$std_value</h5>";
                    echo "</div>";
                }elseif($std == 'image') {
                    $img = $std_value;
                    echo "<div class='card-block'>";
                        echo "<div class='user-image'>";
                            echo "<img src=".$std_value." class='img-radius' alt='User-Profile-Image'>";
                        echo "</div>";
                } 
                
                
                else {

                    echo $std_value . " ";
                }
            }
            echo "<br>";
        }
        echo "<br>"; 
    }
    echo" </div>
    </div> " ;



?>   