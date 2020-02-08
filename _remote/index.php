<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("#941 Универсальный интернет-магазин — Готовое решение на платформе 1С-Битрикс");
?><?$APPLICATION->IncludeComponent(
	"makarovpro:eshop.catalog.top",
	"new",
	Array(
		"ACTION_VARIABLE" => "action",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_IMG_HEIGHT" => "130",
		"DISPLAY_IMG_WIDTH" => "130",
		"ELEMENT_COUNT" => "8",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilterTopNEWPRODUCT",
		"FLAG_PROPERTY_CODE" => "NEWPRODUCT",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE_ID" => "catalog",
		"OFFERS_LIMIT" => "8",
		"PRICE_CODE" => array("BASE"),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id_top",
		"PRODUCT_PROPERTIES" => array("NEWPRODUCT"),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SHARPEN" => "30",
		"SHOW_PRICE_COUNT" => "1",
		"USE_PRICE_COUNT" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"makarovpro:eshop.catalog.top",
	"leader",
	Array(
		"ACTION_VARIABLE" => "action",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_IMG_HEIGHT" => "130",
		"DISPLAY_IMG_WIDTH" => "130",
		"ELEMENT_COUNT" => "8",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilterTopSPECIALOFFER",
		"FLAG_PROPERTY_CODE" => "SALELEADER",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE_ID" => "catalog",
		"OFFERS_LIMIT" => "8",
		"PRICE_CODE" => array("BASE"),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id_top",
		"PRODUCT_PROPERTIES" => array("SALELEADER"),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SHARPEN" => "30",
		"SHOW_PRICE_COUNT" => "1",
		"USE_PRICE_COUNT" => "N"
	)
);?>
<div class="index-content">
	 <?$APPLICATION->IncludeFile(
        SITE_DIR."include/index.php",
        Array(),
        Array("MODE"=>"html")
        );?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>