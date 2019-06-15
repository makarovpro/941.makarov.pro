<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("»нтернет магазин строительных материалов 941 PRO");
?><?
GLOBAL $arrFilterTop;
$elementID = 2;
$arrFilterTopNEWPRODUCT = array(
'PROPERTY_3' => $elementID,
);
?>

<?
GLOBAL $arrFilterTop;
$elementID = 3;
$arrFilterTopSPECIALOFFER = array(
'PROPERTY_5' => $elementID,
);
?> 

 <?$APPLICATION->IncludeComponent(
	"makarovpro:eshop.catalog.top",
	"new",
	Array(
		"DISPLAY_IMG_WIDTH" => "130",
		"DISPLAY_IMG_HEIGHT" => "130",
		"SHARPEN" => "30",
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_top",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "8",
		"FLAG_PROPERTY_CODE" => "",
		"OFFERS_LIMIT" => "8",
		"PRICE_CODE" => array("BASE"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array("NEWPRODUCT"),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"FILTER_NAME" => "arrFilterTopNEWPRODUCT"
	)
);?>



<?$APPLICATION->IncludeComponent(
	"makarovpro:eshop.catalog.top",
	"leader",
	Array(
		"DISPLAY_IMG_WIDTH" => "130",
		"DISPLAY_IMG_HEIGHT" => "130",
		"SHARPEN" => "30",
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_top",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "8",
		"FLAG_PROPERTY_CODE" => "",
		"OFFERS_LIMIT" => "8",
		"PRICE_CODE" => array("BASE"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array("SPECIALOFFER"),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"FILTER_NAME" => "arrFilterTopSPECIALOFFER"
	)
);?>


<div class="index-content">
	 <?$APPLICATION->IncludeFile(
        SITE_DIR."include/index.php",
        Array(),
        Array("MODE"=>"html")
        );?>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
 
 
 
 