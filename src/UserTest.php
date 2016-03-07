<?php
/*require_once("User.php");
class UserTest extends PHPUnit_Framework_TestCase {
public function setUp(){}
public function tearDown(){}

public function testUserName(){
// test pour s’assurer que l’objet à un nom valide
$userName = "blognt";
$user = new User($userName);
$this->assertTrue($user->getUserName() !== false);
}
}
*/
require_once("generate_language_files.php");
class LanguageBatchBoTest extends PHPUnit_Framework_TestCase {
public function setUp(){}
public function tearDown(){}

public function testUserName(){
// test pour s’assurer que l’objet à un nom valide
$userName = "blognt";
$user = new User($userName);
$this->assertTrue($user->getUserName() !== false);
}
}
?>