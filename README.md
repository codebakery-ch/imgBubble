# imgBubble Jquery Plugin

## Description

* This Plugin creates nav Items based on images in a folder.
* It also takes care of ordering the images the right way.
* The navigation Items can be used to show/hide the images, or you can build your custom functions. Its a starter.

## Usage

* place images in a folder of your choice.
* make sure the path is correct in index.php ($imagesPath)
- images have to be named:
```
01.jpg, 02.jpg etc.
```
* call
```
$('img').imgBubble();
```

## Options

for now, there are two:
* ```imgClass``` for the class of your images
* ```navWrapper``` for the nav Items placeholder.
defaults:
```
    $('img').imgBubble({
        'imgClass': '.imgbubble',
        'navWrapper': '#imgBubble_nav'
    });
```
