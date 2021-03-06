<?php
/**
 * SEOstats Example - Get Google Serps
 *
 * @package    SEOstats
 * @author     Stephan Schmitz <eyecatchup@gmail.com>
 * @copyright  Copyright (c) 2010 - present Stephan Schmitz
 * @license    http://eyecatchup.mit-license.org/  MIT License
 * @updated    2013/12/04
 */

// NOTE: The given path to the autoload.php assumes that you installed SEOstats via composer 
// and copied this example file from ./vendor/seostats/seostats/example/example.php to ./example.php
//
// If you did NOT installed SEOstats via composer but instead downloaded the zip file from github.com, 
// you need to follow this steps:
//
// 1. Download this file: https://raw.github.com/eyecatchup/SEOstats/dev-253/SEOstats/Common/AutoLoader.php
// 2. Place it in ./SEOstats/Common/AutoLoader.php
// 3. Comment-in line 25 (remove hash char "#") and comment-out line 26 (prepend hash char "#")
//
// For further reference see: https://github.com/eyecatchup/SEOstats/issues/49

// Bootstrap the library / register autoloader
#require_once __DIR__ . DIRECTORY_SEPARATOR . 'SEOstats' . DIRECTORY_SEPARATOR . 'bootstrap.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \SEOstats\Services\Google as Google;

try {
    /**
     *  Get an array containing URL and title for the first
     *  100 results for a Google web search for 'keyword'.
     */
    $serps = Google::getSerps('keyword');
    print_r($serps);

    /**
     *  Get an array containing URL and title for the first
     *  200 results for a Google web search for 'keyword'.
     */
    //$serps = Google::getSerps('keyword', 200);
    //print_r($serps);

    /**
     *  Get an array containing URL, title and position in Serps
     *  for each occurrence of 'http://www.domain.tld' within the
     *  first 1000 results for a Google web search for 'keyword'.
     */
    //$serps = Google::getSerps('keyword', 1000, 'http://www.domain.tld');
    //print_r($serps);
}
catch (\Exception $e) {
    echo 'Caught SEOstatsException: ' .  $e->getMessage();
}
