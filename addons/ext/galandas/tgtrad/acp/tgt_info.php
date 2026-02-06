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
 * Toggle Google Translator Widget ACP module info.
 */
class tgt_info
{
	public function module()
	{
		return array(
			'filename'	=> '\galandas\tgtrad\acp\tgt_module',
			'title'		=> 'ACP_TGT_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_TGT_CONF',
					'auth'	=> 'ext_galandas/tgtrad && acl_a_board',
					'cat'	=> array('ACP_TGT_TITLE')
				),
			),
		);
	}
}
