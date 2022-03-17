<?php
class OSBlocks {
  private const disallowedSpecialPages = ['BlockList', 'AutoblockList'];
	
  public static function onUserCan( $title, $user, $action, &$result ) {
    return !(!empty(array_filter(self::disallowedSpecialPages, function ($disallowedTitle) use($title) { return $title->isSpecial($disallowedTitle); })) && !$user->isAllowed('block'));
  }
}
