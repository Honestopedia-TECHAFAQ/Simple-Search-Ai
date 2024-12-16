<?php
function getGoogleResults($query) {
    $apiKey = getenv('GOOGLE_API_KEY');
    $cx = 'your_custom_search_engine_id';
    $endpoint = "https://www.googleapis.com/customsearch/v1?q=" . urlencode($query) . "&key=$apiKey&cx=$cx";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    return $data['items'] ?? [];
}
?>
