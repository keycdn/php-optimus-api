<?php
/**
 * PHP Test Client for the Optimus API
 *
 * optimus.io - Lossless compression and optimization of your images
 *
 * @author KeyCDN
 * @version 0.1
 */

 // load optimus lib
require '../vendor/autoload.php';

// create object and pass API license key
$optimus = new KeyCDN\Optimus\Optimus('<your_license_key>');

// optimize image
$result = $optimus->optimize('img/102kb.jpg');

// save optimized image
file_put_contents('opt/102kb.jpg', $result);

// optimize image and convert to webp
$result = $optimus->optimize('img/102kb.jpg', 'webp');

// save optimized image with webp extension
file_put_contents('opt/102kb.webp', $result);
