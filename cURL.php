<?php
$url = "https://coderbyte.com/api/challenges/json-cleaning";


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);


if ($response) {
    
    $data = json_decode($response, true);

    if ($data) {
        $cleanedData = cleanData($data);

        echo json_encode($cleanedData);
    } else {
        echo "فشل تحويل JSON";
    }
} else {
    echo "فشل في الحصول على البيانات";
}

function cleanData($data) {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = cleanData($value);
            $data[$key] = array_filter($data[$key], function ($item) {
                return $item !== "N/A" && $item !== "-";
            });
        } else {
            if ($value === "N/A" || $value === "-") {
                unset($data[$key]);
            }
        }
    }
    return $data;
}
?>