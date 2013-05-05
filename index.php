<?php
require('images.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>imgBubble Jquery Plugin</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
    <script src="imgBubble.js"></script>
    <script>
        $(document).ready(function () {
            $('img').imgBubble({
                'navWrapper': '#img_nav'
            });
        })
    </script>
    <link rel="stylesheet" href="demostyles.css"/>
</head>
<body>
<div id="img_nav"></div>
<div id="img_wrapper">
    <?php
    //include path here
    $imagesPath = 'images';
    $imagesArray = imgBubble::generateImages($imagesPath);
    foreach ($imagesArray as $image) {
        echo $image['file'];
    }
    ?>
</div>
</body>
</html>