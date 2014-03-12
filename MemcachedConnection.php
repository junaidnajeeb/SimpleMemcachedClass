<?php

require_once(dirname(__FILE__) . '/config.php');

abstract Class MemcachedConnection {

	private static $instance;

	private function __construct() {
		return true;
	}

	public static function getInstance() {
		if (self::$instance == null) {
			$m = new Memcached();
			$servers = getServers();
			$m->addServers($servers);
			self::$instance = $m;
			return $m;
		} else {
			return self::$instance;
		}
	}
}
