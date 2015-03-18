<?php
require 'setup.php';

$user = new User();
$user->setName('david');

$group = new Grp();
$group->setName('Anonymous');
$user->addGrp($group);

$user->save();


$users = $group->getUsers();
echo $group->countUsers();


$user = UserQuery::create()->findPK(21);
$user->addGrp($group);
$user->addGrp($group);
$user->addGrp($group);
$user->save();

echo $user->countGrps();

var_dump($user->getGrps());