# Bump Topic Limit

This extension modifies the default phpBB bump behavior by removing the restriction that prevents users from bumping a topic more than once without a new reply.

By default, phpBB checks whether a topic has already been bumped and blocks further bumps until a new reply is made. This extension removes that condition, allowing users to bump their topics solely based on the time interval set in:
ACP > General > Board Configuration > Post Settings > Bump interval.

Original phpBB check in includes/functions_content.php:

// Check permission and make sure the last post was not already bumped
if (!$auth->acl_get('f_bump', $forum_id) || $topic_bumped)
{
    return false;
}

This extension removes the || $topic_bumped condition, so users can bump topics repeatedly as long as the bump interval has passed, without needing an additional reply.

## Installation

Copy the extension to phpBB/ext/deiuwhite/bumptopic

Go to "ACP" > "Customise" > "Extensions" and enable the "Bump Topic Limit" extension.

## License

[GNU General Public License v2](license.txt)
