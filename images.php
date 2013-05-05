<?php
class imgBubble
{
    static function generateImages($path)
    {
        $images = array();
        $count = 0;
        foreach (glob($path.'/*.jpg') as $filename) {
            $count++;
            $images[] = array(
                "file" => '<img src="' . $filename . '" class="" rel="' . $count . '" />',
            );
        }
        return $images;
    }
}