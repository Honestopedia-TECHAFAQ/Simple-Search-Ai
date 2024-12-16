<?php
require_once 'api/ebay.php';
require_once 'api/google.php';
require_once 'api/serp.php';
require_once 'api/amazon.php';

$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

$ebayResults = [];
$googleResults = [];
$serpResults = [];
$amazonResults = [];

if ($searchQuery) {
    $ebayResults = getEbayResults($searchQuery);
    $googleResults = getGoogleResults($searchQuery);
    $serpResults = getSerpResults($searchQuery);
    $amazonResults = getAmazonResults($searchQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Search AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    
    <main>
        <div class="search-container">
            <form method="GET" action="index.php">
                <div class="mb-3">
                    <input type="text" name="query" class="form-control" placeholder="Enter product name..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                </div>
                <button class="btn btn-primary w-100">Search</button>
            </form>
        </div>
        
        <div class="results-container mt-4">
            <div class="result-column" id="ebay-results">
                <h4>eBay</h4>
                <?php include 'templates/search-results.php'; ?>
            </div>
            <div class="result-column" id="google-results">
                <h4>Google</h4>
                <?php include 'templates/search-results.php'; ?>
            </div>
            <div class="result-column" id="serp-results">
                <h4>SERP</h4>
                <?php include 'templates/search-results.php'; ?>
            </div>
            <div class="result-column" id="amazon-results">
                <h4>Amazon</h4>
                <?php include 'templates/search-results.php'; ?>
            </div>
        </div>
    </main>
    
    <?php include 'templates/footer.php'; ?>
    
    <script src="assets/js/scripts.js"></script>
</body>
</html>
