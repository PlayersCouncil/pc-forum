<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\migrations;

class rightrandomimage_update_2 extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
    return array(
        '\hifikabin\rightrandomimage\migrations\rightrandomimage_update_1'
        );
    }

    public function update_data()
    {
        return array(
        // Add configs
        array('config.add', array('rightrandomimage_resize', '200')),
        );
    }
}
