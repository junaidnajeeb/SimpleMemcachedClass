<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(dirname(__FILE__) . '/MemcachedConnection.php');

$m1 = MemcachedConnection::getInstance();
//var_dump($m1);
$m2 = MemcachedConnection::getInstance();
//var_dump($m2);

$m1->set('string', 'a simple string',10);
$m1->set('int', 99,10);
$m1->set('array', array(11, 12),10);

var_dump($m2->get('string'));
var_dump($m2->get('int'));
var_dump($m2->get('array'));
