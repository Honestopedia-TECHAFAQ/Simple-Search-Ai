<?php
function getSerpResults($query) {
    $apiKey = getenv('SERP_API_KEY');
    $endpoint = "https://serpapi.com/search?q=" . urlencode($query) . "&api_key=$apiKey";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    return $data['organic_results'] ?? [];
}
?>
