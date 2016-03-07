<?php

chdir(__DIR__);

include('LanguageBatchBo.php');
class generate_language_files extends PHPUnit_Framework_TestCase {
	public function test()
	{

$languageBatchBo = new LanguageBatchBo();
$languageBatchBo->generateLanguageFiles();
$languageBatchBo->generateAppletLanguageXmlFiles();
	}
}

