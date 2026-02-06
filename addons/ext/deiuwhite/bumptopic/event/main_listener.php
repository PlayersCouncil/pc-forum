<?php
/**
 *
 * Bump Topic Limit. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, Deiu White, https://metin2.forum
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace deiuwhite\bumptopic\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'core.bump_topic_allowed_before' => 'modify_bump_condition',
        ];
    }

    /**
     * Modify the topic_bumped condition to always allow bumping if permissions are met
     *
     * @param \phpbb\event\data $event The event object
     */
    public function modify_bump_condition($event)
    {
        // Set topic_bumped to 0 to bypass the check
        $event['topic_bumped'] = 0;
    }
}