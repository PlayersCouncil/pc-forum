<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightrandomimage\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            'core.page_header'   => 'add_page_header_link',
        );
    }

    protected $helper;

    protected $template;

    public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
    {
        $this->helper = $helper;
        $this->template = $template;
        $this->config = $config;
    }
   
    public function add_page_header_link($event)
    {
        $this->template->assign_vars(array(
        'RIGHTRANDOMIMAGE_ENABLE'       => $this->config['rightrandomimage_enable'] ? true : false,
        'RIGHTRANDOMIMAGE_SEARCH'       => $this->config['rightrandomimage_search'] ? true : false,
        'RIGHTRANDOMIMAGE_OPEN'         => (isset($this->config['rightrandomimage_open'])) ? $this->config['rightrandomimage_open'] : '',
        'RIGHTRANDOMIMAGE_NUMBER'       => (isset($this->config['rightrandomimage_number'])) ? addslashes($this->config['rightrandomimage_number']) : '',
        'RIGHTRANDOMIMAGE_RESIZE'       => (isset($this->config['rightrandomimage_resize'])) ? addslashes($this->config['rightrandomimage_resize']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_1'  => (isset($this->config['rightrandomimage_image_url_1'])) ? addslashes($this->config['rightrandomimage_image_url_1']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_1' => (isset($this->config['rightrandomimage_image_link_1'])) ? addslashes($this->config['rightrandomimage_image_link_1']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_2'	=> (isset($this->config['rightrandomimage_image_url_2'])) ? addslashes($this->config['rightrandomimage_image_url_2']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_2' => (isset($this->config['rightrandomimage_image_link_2'])) ? addslashes($this->config['rightrandomimage_image_link_2']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_3'	=> (isset($this->config['rightrandomimage_image_url_3'])) ? addslashes($this->config['rightrandomimage_image_url_3']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_3'	=> (isset($this->config['rightrandomimage_image_link_3'])) ? addslashes($this->config['rightrandomimage_image_link_3']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_4'	=> (isset($this->config['rightrandomimage_image_url_4'])) ? addslashes($this->config['rightrandomimage_image_url_4']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_4'	=> (isset($this->config['rightrandomimage_image_link_4'])) ? addslashes($this->config['rightrandomimage_image_link_4']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_5'	=> (isset($this->config['rightrandomimage_image_url_5'])) ? addslashes($this->config['rightrandomimage_image_url_5']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_5'	=> (isset($this->config['rightrandomimage_image_link_5'])) ? addslashes($this->config['rightrandomimage_image_link_5']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_URL_6'	=> (isset($this->config['rightrandomimage_image_url_6'])) ? addslashes($this->config['rightrandomimage_image_url_6']) : '',
        'RIGHTRANDOMIMAGE_IMAGE_LINK_6'	=> (isset($this->config['rightrandomimage_image_link_6'])) ? addslashes($this->config['rightrandomimage_image_link_6']) : '',
        ));
    }
}
