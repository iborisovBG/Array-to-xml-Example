<?php

//Im ready with this file


$new_variable = "good push";

function array_to_xml(array $arr, SimpleXMLElement $xml)
{
    foreach ($arr as $k => $v) {
        is_array($v)
            ? array_to_xml($v, $xml->addChild($k))
            : $xml->addChild($k, $v);
    }
    return $xml;
}


$cnt = 0;

$waybills = array(1,2,3,4,5,6);


foreach($waybills as $kur)
{

$cnt++;
$data['order_name id='.$kur.' '] = array(

'item_id' => $kur,
'catalog_id' => '',
'name' => '2kur',
'count' => '3kur',
'expiration' => 0,
'exp_value' => '',
'price' => '4kur',
'price_with_tax' => 5,
'tax' => 0,
);


}




$test_array = array (
    'bla' => 'blub',
    'foo' => 'bar',
    'another_array' => array (
        'items' => $data,
    ),
);

echo array_to_xml($test_array, new SimpleXMLElement('<root/>'))->asXML();


?>
