<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\migrations;

class rightrandomimage_module extends \phpbb\db\migration\migration
{
   
    public function update_data()
    {
        return array(
            array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_RIGHTRANDOMIMAGE')),
            array('module.add', array(
            'acp', 'ACP_RIGHTRANDOMIMAGE', array(
            'module_basename' => '\hifikabin\rightrandomimage\acp\rightrandomimage_module', 'modes'   => array('config'),
                ),
            )),
        );
    }
}
