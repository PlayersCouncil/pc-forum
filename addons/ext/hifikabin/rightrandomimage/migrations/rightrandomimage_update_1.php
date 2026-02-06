<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\migrations;

class rightrandomimage_update_1 extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array(
            '\hifikabin\rightrandomimage\migrations\rightrandomimage_schema'
        );
    }

    public function update_data()
    {
        return array(
        // Add Configs
        array('config.add', array('rightrandomimage_open', '')),

        // Remove Version
        array('config.remove', array('rightrandomimage_version')),
        );
    }
}
