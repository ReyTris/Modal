
<?php
    // $name = $_POST['name'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
 
 
 
    // // формируем URL в переменной $queryUrl
    // $queryUrl = 'https://samsonindustries.bitrix24.ru/rest/1/fy23n63z93rk82tu/crm.lead.add.json';
    // // формируем параметры для создания лида в переменной $queryData
    // $queryData = http_build_query(array(
    //     'fields' => array(
    //         'TITLE' => "Заявка от $name",
    //         'NAME' => $name,
    //         'EMAIL' => Array(
    //             "n0" => Array(
    //                 "VALUE" => "$email",
    //                 "VALUE_TYPE" => "WORK",
    //             ),
    //         ),
    //         'PHONE' => Array(
    //             "n0" => Array(
    //                 "VALUE" => "6734267",
    //                 "VALUE_TYPE" => "WORK",
    //             ),
    //         ),
    //     ),
    //     'params' => array("REGISTER_SONET_EVENT" => "Y")
    // ));
    // print_r($queryData);
    // // обращаемся к Битрикс24 при помощи функции curl_exec
    // $curl = curl_init();
    // curl_setopt_array($curl, array(
    //     CURLOPT_SSL_VERIFYPEER => 0,
    //     CURLOPT_POST => 1,
    //     CURLOPT_HEADER => 0,
    //     CURLOPT_RETURNTRANSFER => 1,
    //     CURLOPT_URL => $queryUrl,
    //     CURLOPT_POSTFIELDS => $queryData,
    // ));
    // $result = curl_exec($curl);
    // curl_close($curl);
    // $result = json_decode($result, 1);
    // if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description'].
    // "<br/>";
?>