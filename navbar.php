<?php
    $pages = array('index.php' => 'Home', 'attendanceReport.php' => 'Attendance Report', 'dashboard.php' => 'Dashboard', 'GalleryPic.php' => 'Gallery');
    foreach($pages as $p => $p_value) {
        echo "<li class='nav-item active'>
            <a class='nav-link' href=".$p.">".$p_value."</a>
        </li>";
    }
?>