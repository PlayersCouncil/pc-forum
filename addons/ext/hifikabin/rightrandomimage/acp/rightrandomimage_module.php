<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\acp;

class rightrandomimage_module
{
var $u_action;

   function main($id, $mode)
   {
        global $user, $template, $request;
        global $config;

        $this->tpl_name = 'acp_rightrandomimage_config';
        $this->page_title = $user->lang('RIGHTRANDOMIMAGE_CONFIG');
        $form_name = 'acp_rightrandomimage_config';
		add_form_key($form_name);
      
      $submit = $request->is_set_post('submit');
      if ($submit)
      {
         if (!check_form_key('acp_rightrandomimage_config'))
         {
            trigger_error('FORM_INVALID');
         }
         $config->set('rightrandomimage_enable', $request->variable('rightrandomimage_enable', 0));
         $config->set('rightrandomimage_search', $request->variable('rightrandomimage_search', 0));
         $config->set('rightrandomimage_open', $request->variable('rightrandomimage_open', ''));
         $config->set('rightrandomimage_number', $request->variable('rightrandomimage_number', ''));
         $config->set('rightrandomimage_resize', $request->variable('rightrandomimage_resize', ''));
         $config->set('rightrandomimage_image_url_1', $request->variable('rightrandomimage_image_url_1', ''));
         $config->set('rightrandomimage_image_link_1', $request->variable('rightrandomimage_image_link_1', ''));
         $config->set('rightrandomimage_image_url_2', $request->variable('rightrandomimage_image_url_2', ''));
         $config->set('rightrandomimage_image_link_2', $request->variable('rightrandomimage_image_link_2', ''));
         $config->set('rightrandomimage_image_url_3', $request->variable('rightrandomimage_image_url_3', ''));
         $config->set('rightrandomimage_image_link_3', $request->variable('rightrandomimage_image_link_3', ''));
         $config->set('rightrandomimage_image_url_4', $request->variable('rightrandomimage_image_url_4', ''));
         $config->set('rightrandomimage_image_link_4', $request->variable('rightrandomimage_image_link_4', ''));
         $config->set('rightrandomimage_image_url_5', $request->variable('rightrandomimage_image_url_5', ''));
         $config->set('rightrandomimage_image_link_5', $request->variable('rightrandomimage_image_link_5', ''));
         $config->set('rightrandomimage_image_url_6', $request->variable('rightrandomimage_image_url_6', ''));
         $config->set('rightrandomimage_image_link_6', $request->variable('rightrandomimage_image_link_6', ''));

         trigger_error($user->lang('RIGHTRANDOMIMAGE_CONFIG_SAVED') . adm_back_link($this->u_action));
      }
      $template->assign_vars(array(
         'RIGHTRANDOMIMAGE_ENABLE'              => (!empty($config['rightrandomimage_enable'])) ? true : false,
         'RIGHTRANDOMIMAGE_SEARCH'              => (!empty($config['rightrandomimage_search'])) ? true : false,
         'RIGHTRANDOMIMAGE_OPEN'                => (isset($config['rightrandomimage_open'])) ? $config['rightrandomimage_open'] : '',
         'RIGHTRANDOMIMAGE_NUMBER'              => (isset($config['rightrandomimage_number'])) ? $config['rightrandomimage_number'] : '',
         'RIGHTRANDOMIMAGE_RESIZE'              => (isset($config['rightrandomimage_resize'])) ? $config['rightrandomimage_resize'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_1'         => (isset($config['rightrandomimage_image_url_1'])) ? $config['rightrandomimage_image_url_1'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_1'    	=> (isset($config['rightrandomimage_image_link_1'])) ? $config['rightrandomimage_image_link_1'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_2'     	=> (isset($config['rightrandomimage_image_url_2'])) ? $config['rightrandomimage_image_url_2'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_2'    	=> (isset($config['rightrandomimage_image_link_2'])) ? $config['rightrandomimage_image_link_2'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_3'        	=> (isset($config['rightrandomimage_image_url_3'])) ? $config['rightrandomimage_image_url_3'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_3'    	=> (isset($config['rightrandomimage_image_link_3'])) ? $config['rightrandomimage_image_link_3'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_4'        	=> (isset($config['rightrandomimage_image_url_4'])) ? $config['rightrandomimage_image_url_4'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_4'    	=> (isset($config['rightrandomimage_image_link_4'])) ? $config['rightrandomimage_image_link_4'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_5'        	=> (isset($config['rightrandomimage_image_url_5'])) ? $config['rightrandomimage_image_url_5'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_5'    	=> (isset($config['rightrandomimage_image_link_5'])) ? $config['rightrandomimage_image_link_5'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_URL_6'        	=> (isset($config['rightrandomimage_image_url_6'])) ? $config['rightrandomimage_image_url_6'] : '',
         'RIGHTRANDOMIMAGE_IMAGE_LINK_6'    	=> (isset($config['rightrandomimage_image_link_6'])) ? $config['rightrandomimage_image_link_6'] : '',
         'U_ACTION'                             => $this->u_action,
      ));
   }
}
