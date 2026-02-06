<?php
/**
*
* @package phpBB Extension - Right random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\migrations;

class rightrandomimage_schema extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array('\phpbb\db\migration\data\v31x\v314');
    }
   
    public function update_data()
    {
        return array(
            // Add configs
            array('config.add', array('rightrandomimage_enable', '')),
            array('config.add', array('rightrandomimage_search', 0)),
            array('config.add', array('rightrandomimage_number', '')),
            array('config.add', array('rightrandomimage_image_url_1', '')),
            array('config.add', array('rightrandomimage_image_url_2', '')),
            array('config.add', array('rightrandomimage_image_url_3', '')),
            array('config.add', array('rightrandomimage_image_url_4', '')),
            array('config.add', array('rightrandomimage_image_url_5', '')),
            array('config.add', array('rightrandomimage_image_url_6', '')),
            array('config.add', array('rightrandomimage_image_link_1', '')),
            array('config.add', array('rightrandomimage_image_link_2', '')),
            array('config.add', array('rightrandomimage_image_link_3', '')),
            array('config.add', array('rightrandomimage_image_link_4', '')),
            array('config.add', array('rightrandomimage_image_link_5', '')),
            array('config.add', array('rightrandomimage_image_link_6', '')),
            array('config.add', array('rightrandomimage_version', '1.0.0')),
            );
        }
}
