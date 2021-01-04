<?php
class OSBlocks {
  public static function onUserCan( $title, $user, $action, &$result ) {
    return !($title->isSpecial('BlockList') && !$user->isAllowed('block'));
  }
}
