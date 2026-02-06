<?php
/**
 *
 * Toggle Google Translator Widget. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tgtrad\acp;

/**
 * Toggle Google Translator Widget ACP module.
 */
class tgt_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('galandas/tgtrad', 'common');
		$this->tpl_name = 'acp_tgt_body';
		$this->page_title = $user->lang('ACP_TGT_TITLE');
		add_form_key('acp_tgt_body');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_tgt_body'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('tgt_translator_enable', $request->variable('tgt_translator_enable', 1));
			$config->set('tgt_translator_madre', $request->variable('tgt_translator_madre', '', true));			
			$config->set('tgt_codetongue', $request->variable('tgt_codetongue', '', true));
			$config->set('tgt_codecolors', $request->variable('tgt_codecolors', '', true));			
			
			trigger_error($user->lang('ACP_TGT_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
		    'TGT_TRANSLATOR_ENABLE'		=> (!empty($config['tgt_translator_enable'])) ? true : false,			
		    'TGT_TRANSLATOR_VERSION'	=> (isset($config['tgt_translator_version'])) ? $config['tgt_translator_version'] : '',
            'TGT_TRANSLATOR_MADRE'      => (isset($config['tgt_translator_madre'])) ? $config['tgt_translator_madre'] : '',            'TGT_CODETONGUE'            => (isset($config['tgt_codetongue'])) ? $config['tgt_codetongue'] : '',
            'TGT_CODECOLORS'            => (isset($config['tgt_codecolors'])) ? $config['tgt_codecolors'] : '',			
		));
	}
}
