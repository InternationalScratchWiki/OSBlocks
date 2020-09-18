<?php
class OSBlocks {
  public static function onuserCan( $title, $user, $action, &$result ) {
    if ($title == "Special:BlockList" && !$user->isAllowed('block')) {
      return false;
    }
    return true;
  }
}
