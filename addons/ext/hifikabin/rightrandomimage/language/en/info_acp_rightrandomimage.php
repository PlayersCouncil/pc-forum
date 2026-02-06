<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_RIGHTRANDOMIMAGE'                       => 'Right Random Image',
    'RIGHTRANDOMIMAGE_CONFIG'                    => 'Right Random Image Settings',

    'ACP_RIGHTRANDOMIMAGE_CONFIG'                => 'Right Random Image',
    'ACP_RIGHTRANDOMIMAGE_CONFIG_EXPLAIN'        => 'This is configuration page for the Right Random Image extension. The header bar of your forum will size automatically to accommodate the image size.',

    'ACP_RIGHTRANDOMIMAGE_CONFIG_SET'            => 'Configuration',
    'RIGHTRANDOMIMAGE_CONFIG_SAVED'              => 'Right Random Image settings saved',

    'RIGHTRANDOMIMAGE_ENABLE'                    => 'Enable Right Random Image',
    'RIGHTRANDOMIMAGE_ENABLE_EXPLAIN'            => 'Do you want to enable the Right Random Image EXT?',

    'RIGHTRANDOMIMAGE_SEARCH'                    => 'Search',
    'RIGHTRANDOMIMAGE_SEARCH_EXPLAIN'            => 'Do you want to show the Search in the NavBar when Right Random Image is enabled?',

    'RIGHTRANDOMIMAGE_NUMBER_EXPLAIN'            => 'How many images are you using?',

    'RIGHTRANDOMIMAGE_NUMBER_ONE'                => '1',
    'RIGHTRANDOMIMAGE_NUMBER_TWO'                => '2',
    'RIGHTRANDOMIMAGE_NUMBER_THREE'              => '3',
    'RIGHTRANDOMIMAGE_NUMBER_FOUR'               => '4',
    'RIGHTRANDOMIMAGE_NUMBER_FIVE'               => '5',
    'RIGHTRANDOMIMAGE_NUMBER_SIX'                => '6',

    'RIGHTRANDOMIMAGE_RESIZE'                   => 'Image Size',
    'RIGHTRANDOMIMAGE_RESIZE_EXPLAIN'           => 'You can change the maxium size of the image here but be aware that larger images may upset the layout within the header. Default is 200' ,


    'RIGHTRANDOMIMAGE_IMAGE_URL_1'               => 'First Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_1'       => 'Enter the URL of the first image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_1'   => 'http://image1.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_2'               => 'Second Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_2'       => 'Enter the URL of the second image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_2'   => 'http://image2.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_3'               => 'Third Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_3'       => 'Enter the URL of the third image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_3'   => 'http://image3.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_4'               => 'Fourth Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_4'       => 'Enter the URL of the fourth image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_4'   => 'http://image4.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_5'               => 'Fifth Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_5'       => 'Enter the URL of the fifth image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_5'   => 'http://image5.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_6'               => 'Sixth Image URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_6'       => 'Enter the URL of the sixth image including its extension. Remote images require the full URL, local images require the local path eg images/right_random_images/image.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_6'   => 'http://image6.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_1'              => 'First Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_1'      => 'Enter the full URL of the page you wish to link the first image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_1'  => 'http://link1.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_2'              => 'Second Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_2'      => 'Enter the full URL of the page you wish to link the second image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_2'  => 'http://link2.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_3'              => 'Third Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_3'      => 'Enter the full URL of the page you wish to link the third image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_3'  => 'http://link3.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_4'              => 'Fourth Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_4'      => 'Enter the full URL of the page you wish to link the fourth image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_4'  => 'http://link4.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_5'              => 'Fifth Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_5'      => 'Enter the full URL of the page you wish to link the fifth image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_5'  => 'http://link5.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_6'              => 'Sixth Image Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_6'      => 'Enter the full URL of the page you wish to link the sixth image to INCLUDING http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_6'  => 'http://link6.com',

    'RIGHTRANDOMIMAGE_OPEN'                      => 'Link Opening Settings' ,
    'RIGHTRANDOMIMAGE_OPEN_EXPLAIN'              => 'What do you want to happen when the image is clicked?' ,
    'RIGHTRANDOMIMAGE_URL_NOTHING'               => 'Nothing' ,
    'RIGHTRANDOMIMAGE_URL_SAME'                  => 'Open link in the same tab' ,
    'RIGHTRANDOMIMAGE_URL_NEW'                   => 'Open link in a new tab' ,

    'RIGHTRSANDOMIMAGE_REQUIRE_3.1.4'            => 'This Extension needs at least phpBB 3.1.4 and will not work with phpBB 3.2.0',
    'RIGHTRSANDOMIMAGE_REQUIRE_3.2.0'            => 'This Extension is for phpBB 3.2.0 and later. It will not work with phpBB 3.1.0',
));

