<?php
function getAmazonResults($query) {
    $apiKey = getenv('AMAZON_API_KEY');
    $endpoint = "https://api.amazon.com/products?search=" . urlencode($query) . "&key=$apiKey";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    return $data['products'] ?? [];
}
?>
