<?php
class OSBlocks {
	private const disallowedSpecialPages = ['BlockList', 'AutoblockList'];
	
	public static function onGetUserPermissionsErrors( $title, $user, $action, &$out_result ) {
		if (self::isDisallowedSpecialPage($title) && !$user->isAllowed('block')) {
			$out_result = [
				'badaccess'
			];
			
			return false;
		}
		
		return true;
	}
	
	private static function isDisallowedSpecialPage($title) {
		return !empty(
		array_filter(
			self::disallowedSpecialPages, 
			function ($disallowedTitle) use($title) {
				return $title->isSpecial($disallowedTitle); 
			}
		)
	);
	}
}
