<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attendanceStyle.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Attendance Report</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <?php include 'navbar.php'; ?>
        </ul>
    </nav>
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Attendance Report</h4>
                </div>
                <div class="card-body">
                    <div class="media-list position-relative">
                        <div class="table-responsive" id="project-team-scroll" tabindex="1" overflow: hidden; outline: none;">
                        <table class="table table-hover table-xl mb-0">
                            <thead>
                            <tr>
                                <th>Trainee Name</th>
                                <th>Check_In</th>
                                <th>Check_Out</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php include 'data.php'; ?>
                                <?php 
                                    foreach($dataTrainee as $stds => $stds_value) {
                                        foreach($stds_value as $std => $std_value) { 
                                            if(is_array($std_value) && $std == 'attendance') {
                                                foreach($std_value as $st => $st_value) {
                                                        if($st == 0) {
                                                            foreach($st_value as $s => $s_value) {
                                                                if ($s == 'check_in') {
                                                                    $check_in = $s_value;
                                                                    $check_in_Time = explode(' ',  $check_in);
                                                                    $i = count($check_in_Time) - 1;
                                                                    $timeIn = $check_in_Time[$i];
                                                                    $tIn = explode(':', $timeIn);
                                                                    for($i = 0; $i < count($tIn); $i++) {
                                                                        if($i == 0) {
                                                                            $hourIn = $tIn[$i];
                                                                        }else {
                                                                            $minIn = $tIn[$i];
                                                                        }
                                                                    }
                                                                } elseif ($s == 'check_out') {
                                                                    $check_out = $s_value;
                                                                    $check_out_Time = explode(' ',  $check_out);
                                                                    $i = count($check_out_Time) - 1;
                                                                    $timeOut = $check_out_Time[$i];
                                                                    $tOut = explode(':', $timeOut);
                                                                    for($i = 0; $i < count($tOut); $i++) {
                                                                        if($i == 0) {
                                                                            $hourOut = $tOut[$i];
                                                                        }else {
                                                                            $minOut = $tOut[$i];
                                                                        }
                                                                    }
                                                                    if(($hourOut - $hourIn) < 8) {
                                                                        $styleRow = 'table-danger';
                                                                    }else {
                                                                        $styleRow = 'table-success';
                                                                    }
                                                                }
                                                            }
                                                    }
                                                }
                                            }else {
                                                if ($std == 'id') {
                                                    $id = $std_value;
                                                } elseif ($std == 'name') {
                                                    $name = $std_value;
                                                } elseif ($std == 'image') {
                                                    $img = $std_value;
                                                } 
                                            }
                                        }
                                        
                                        echo "<tr class=".$styleRow.">";
                                        echo "<td class='text-truncate'>
                                                <ul class='list-unstyled order-list m-b-0'>
                                                    <li class='team-member team-member-sm'>
                                                        <span>$id </span>
                                                        <img class='rounded-circle' src=".$img." alt='user' data-toggle='tooltip' title='' data-original-title='Wildan Ahdian'>
                                                        <span> $name</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class='text-truncate'>$timeIn</td>
                                            <td class='text-truncate'>$timeOut</td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
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