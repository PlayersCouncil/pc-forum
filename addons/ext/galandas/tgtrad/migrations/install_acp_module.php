<?php
/**
 *
 * Toggle Google Translator Widget. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tgtrad\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['tgt_translator_enable']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('tgt_translator_enable', 1)),
			array('config.add', array('tgt_translator_version', '1.0.1')),
            array('config.add', array('tgt_translator_madre', 'Translation')),
            array('config.add', array('tgt_codetongue', 'Google-Translate-icon_4.png')),			
            array('config.add', array('tgt_codecolors', 'BF0000')),
			
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TGT_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_TGT_TITLE',
				array(
					'module_basename'	=> '\galandas\tgtrad\acp\tgt_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
