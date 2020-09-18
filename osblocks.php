<?php
class OSBlocks {
  public static function onUserCan( $title, $user, $action, &$result ) {
    return !($title == "Special:BlockList" && !$user->isAllowed('block'));
  }
}
