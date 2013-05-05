<?php
require('images.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    <style>
        .imgbubble {
            display: none;
        }
    </style>
</head>
<body>
<?php
    //include path here
    $imagesPath = 'images';
    $imagesArray = imgBubble::generateImages($imagesPath);
    foreach ($imagesArray as $image) {
        echo $image['file'];
    }
?>
<div id="img_nav"></div>
</body>
</html>