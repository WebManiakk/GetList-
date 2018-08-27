<?
//
CModule::IncludeModule("iblock"); //подключение модуля инфоблоки

$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>17);
$res = CIBlockElement::GetList(Array(), $arFilter, $arSelect);

while($arElement = $res->GetNext())
{
    $db_props = CIBlockElement::GetProperty ($arElement['IBLOCK_ID'], $arElement['ID'], "sort", "asc", array ("CODE"=>"EVENT_TYPE")); //получить значения поля EVENT_TYPE
    while ($ar_props=$db_props->Fetch ()){
        $arElement['PROPERTY']['EVENT_TYPE'] = $ar_props;
    }
}

//дістаєм свойства
