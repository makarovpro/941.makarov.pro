<?
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class makarovpro_shop941pro extends CModule
{
	var $MODULE_ID = "makarovpro.shop941pro";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function makarovpro_shop941pro()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("SCOM_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("SCOM_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("PARTNER_URI");
	}


	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("makarovpro.shop941pro");
		RegisterModuleDependences("main", "OnBeforeProlog", "makarovpro.shop941pro", "CShop941pro", "ShowPanel");
		RegisterModuleDependences("sale", "OnBasketAdd", "makarovpro.shop941pro", "CShop941pro", "OnBasketChange");
		RegisterModuleDependences("sale", "OnBasketDelete", "makarovpro.shop941pro", "CShop941pro", "OnBasketChange");

		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModule("makarovpro.shop941pro");
		UnRegisterModuleDependences("main", "OnBeforeProlog", "makarovpro.shop941pro", "CShop941pro", "ShowPanel");
		UnRegisterModuleDependences("sale", "OnBasketAdd", "makarovpro.shop941pro", "CShop941pro", "OnBasketChange");
		UnRegisterModuleDependences("sale", "OnBasketDelete", "makarovpro.shop941pro", "CShop941pro", "OnBasketChange");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/makarovpro.shop941pro/install/components", $_SERVER["DOCUMENT_ROOT"]."/makarovpro/components", true, true);
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/makarovpro.shop941pro/install/wizards/bitrix/store.catalog", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards/bitrix/store.catalog", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/makarovpro.shop941pro/install/wizards/bitrix/eshop.mobile", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards/bitrix/eshop.mobile", true, true);
	
		return true;
	}

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();
		return true;
	}

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		return true;
	}
}
?>