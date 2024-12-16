<?php if ($ebayResults) { ?>
    <?php foreach ($ebayResults as $result) { ?>
        <div class="result-item">
            <h5><?php echo htmlspecialchars($result['title']); ?></h5>
            <p>Price: <?php echo htmlspecialchars($result['price']); ?></p>
            <a href="<?php echo htmlspecialchars($result['link']); ?>" target="_blank">View on eBay</a>
        </div>
    <?php } ?>
<?php } else { ?>
    <p>No results found.</p>
<?php } ?>
