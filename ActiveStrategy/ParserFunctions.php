<?php

class ActiveStrategyPF {
	static function activityTag( $str, $args, Parser $parser ) {
		$parser->getOutput()->updateCacheExpiry( 900 );
		return ActiveStrategy::getOutput( $args );
	}
	
	static function setup( Parser $parser ) {
		$parser->setHook( 'activity', array( 'ActiveStrategyPF', 'activityTag' ) );
		
		return true;
	}
}
