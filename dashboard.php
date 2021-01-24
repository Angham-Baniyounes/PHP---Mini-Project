<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Gallery</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <?php include 'navbar.php'; ?>
            </ul>
        </nav>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nmae</th>     
                    <th scope="col">is-compleated</th>
                </tr>
            </thead>
            <tbody>
                <?php include "data.php"?>
                <?php
                foreach($dataTrainee as $key => $value){
                    echo "<tr><td>".$value['id']."</td>
                         <td >".$value['name']."</td>";
                    $count = 0;
                    for($i = 0; $i < count($value['projects']); $i++) {
                        if($value['projects'][$i]['is_compleated'] == 'yes') {
                            $count++;
                        }
                    }
                        echo "<td>".$count."</td>";
                    }
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </body>
</html>