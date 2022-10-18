<?php

namespace App\CoreFunction;


use Illuminate\Database\Eloquent\Model;
use App;
use App\Models\Branch;
use DB;
use DOMDocument;
use Log;




class Cutstr extends Model
{

    public static function findimgInhtml($urlPage)
    {

  //Send a GET request to the URL of the web page using file_get_contents.
    //This will return the HTML source of the page as a string.
    // $htmlString = file_get_contents('https://en.wikipedia.org/wiki/Main_Page');

    $htmlString = file_get_contents($urlPage);
    //Create a new DOMDocument object.
    $htmlDom = new DOMDocument();

    //Load the HTML string into our DOMDocument object.
    @$htmlDom->loadHTML($htmlString);

    //Extract all img elements / tags from the HTML.
    $imageTags = $htmlDom->getElementsByTagName('img');

    //Create an array to add extracted images to.
    $extractedImages = array();



    //Loop through the image tags that DOMDocument found.
    foreach ($imageTags as $imageTag) {

        //Get the src attribute of the image.
        $imgSrc = $imageTag->getAttribute('src');

        //Get the alt text of the image.
        $altText = $imageTag->getAttribute('alt');

        //Get the title text of the image, if it exists.
        $titleText = $imageTag->getAttribute('title');

        //Add the image details to our $extractedImages array.
        $extractedImages[] = array(
            'src' => $imgSrc,
            'alt' => $altText,
            'title' => $titleText
        );
    }

    ///Exit img=null
    if (count($extractedImages) <= 0) {
        return false;
        exit;
    }
    //var_dump our array of images.
    // var_dump($extractedImages);
    $first_img = $extractedImages[0]["src"];
    if ($first_img != NULL) {
        return $first_img;
    } else {
        return false;
    }
    //return  $extractedImages[0]["src"];
    // return  print_r($extractedImages);


    }



    public static function random_password($max_length = 20)
    {
        $text = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $text_length = mb_strlen($text, 'UTF-8');
        $pass = '';
        for ($i = 0; $i < $max_length; $i++) {
            $pass .= @$text[rand(0, $text_length)];
        }
        return $pass;
    }




}
