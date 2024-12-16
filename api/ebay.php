<?php
function getEbayResults($query) {
    $apiKey = getenv('EBAY_API_KEY');
    $endpoint = "https://api.ebay.com/buy/browse/v1/item_summary/search?q=" . urlencode($query);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $apiKey"]);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    return $data['itemSummaries'] ?? [];
}
?>
