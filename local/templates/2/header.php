<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : PlainLeaf 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <? $APPLICATION->ShowHead()?>
    <title><? $APPLICATION->ShowTitle() ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=SITE_TEMPLATE_PATH?>fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body>
<? $APPLICATION->ShowPanel()?>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="/">PlainLeaf</a></h1>
	</div>
	<div id="menu">
        <nav>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
        </nav>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "main",
        "EDIT_TEMPLATE" => ""
    )
);?>
