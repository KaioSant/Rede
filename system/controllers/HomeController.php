<?php
namespace DEV\Controllers;

use Rain\Tpl;

class HomeController
{
	private $tpl;

	function __construct()
	{
		$config = array(
			'base_url' => __DIR_PRINCIPAL__,
			'tpl_dir' => $_SERVER['DOCUMENT_ROOT'].__DIR_PRINCIPAL__."/system/views/",
			'cache_dir' => $_SERVER['DOCUMENT_ROOT'].__DIR_PRINCIPAL__.'/cache/',
			'tpl_ext' => 'php'
		);

		Tpl::configure($config);

		$this->tpl = new Tpl;

		$this->setTpl("header");
		$this->tpl->draw("header", false);
	}

	function __destruct()
	{
		$this->tpl->draw("footer", false);
		$this->setTpl("footer");
	}

	 public function setTpl($template, $data=array(), $returnHtml = false)
	 {
	 	$this->setData($data);

	 	return $this->tpl->draw($template, $returnHtml);
	 }

	 public function setData($data= array())
	 {
	 	foreach ($data as $key => $value) {
	 		$this->tpl->assign($key, $value);
	 	}
	 }

	public function login()
	{
		$this->tpl->draw("login", false);
		$this->setTpl("login");
	}

	public function feed()
	{
		$this->tpl->draw("feed", false);
	}
}
?>