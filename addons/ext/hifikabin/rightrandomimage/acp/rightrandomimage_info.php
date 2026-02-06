<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\acp;

class rightrandomimage_info
 {
    function module()
    {
         return array(
         'filename'  => '\hifikabin\rightrandomimage\acp\rightrandomimage_module',
         'title'     => 'ACP_RIGHTRANDOMIMAGE',
         'modes'     => array(
         'config' => array('title' => 'ACP_RIGHTRANDOMIMAGE_CONFIG', 'auth' => 'ext_hifikabin/rightrandomimage && acl_a_board', 'cat' => array('ACP_RIGHTRANDOMIMAGE')),
         ),
      );
   }
}
