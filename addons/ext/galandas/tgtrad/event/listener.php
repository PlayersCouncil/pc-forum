<?php
/**
 *
 * Toggle Google Translator Widget. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tgtrad\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Toggle Google Translator Widget Event listener.
 */
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
         'core.page_header_after'  => 'navbar_header_after',
		);
	}
	
	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;
	
	/* @var \phpbb\config\config */
	protected $config;	

	/**
	 * Constructor
	 *
	 * @param \phpbb\controller\helper	$helper		Controller helper object
	 * @param \phpbb\template\template	$template	Template object
	 * @param \phpbb\config\config		$config	 
	 */
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->helper = $helper;
		$this->template = $template;
        $this->config = $config;		
	}
	
	/**
	 * A sample PHP event
	 * Modifies the names of the forums on index
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function navbar_header_after($event)
	{
      $this->template->assign_vars(array(
	  'TGT_TRANSLATOR_ENABLE'		=> (!empty($this->config['tgt_translator_enable'])) ? true : false,	  
      'TGT_TRANSLATOR_MADRE'        => (isset ($this->config['tgt_translator_madre'])) ? $this->config['tgt_translator_madre'] : '',
      'TGT_CODETONGUE'              => (isset ($this->config['tgt_codetongue'])) ? $this->config['tgt_codetongue'] : '',
      'TGT_CODECOLORS'              => (isset ($this->config['tgt_codecolors'])) ? $this->config['tgt_codecolors'] : '',	  
      ));
	}
}
