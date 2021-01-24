<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Gallery</title>
    <style>
.row {
    margin: 1rem 1rem;
}
.m-card{
    margin-bottom: 1.5rem;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <?php include 'navbar.php'; ?>
        </ul>
    </nav>
    <div class="row">
        <?php 
            $img = array(
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dM0bXBfEzWoXPibo2cvXGFC9B4K2zxHXNQ&usqp=CAU",
                "https://www.psut.edu.jo/sites/default/files/IMG_0063_1.JPG",
                "https://pbs.twimg.com/media/ERJVeIWWsAEGlpp.jpg",
                "https://www.anbaalwatan.com/uploads/cc52b2dded1658fa0e0fb53675b6b84b.JPG",
                "https://khaberni.b-cdn.net/uploads/news_model/2019/07/main_image5d21eb5b38033.jpg",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwEgLmE_YAsUmRp3SMi83I1S7_sdA9sLhlrQ&usqp=CAU",
                "https://pbs.twimg.com/media/D0LZMVxWoAclj1k.jpg",
                "https://www.akhbarna.net/assets/2019-11-30/large/48084_1_1575121240.jpg",
                "https://pbs.twimg.com/media/EGXgfBSXUAA0i8a.jpg",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dM0bXBfEzWoXPibo2cvXGFC9B4K2zxHXNQ&usqp=CAU",
                "https://pbs.twimg.com/media/D-DSAuNWkAAStbu.jpg",
                "https://www.psut.edu.jo/sites/default/files/IMG_0063_1.JPG"
            );
            function gallery($img) {
                echo " <div class='col-md-3 m-card'>
                <div style='width: 20rem;'>
                <img src=". $img ." class='card-img-top' alt='OCA'>";
                echo "
                </div>
                </div>";
                }
            array_map("gallery", $img)
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>