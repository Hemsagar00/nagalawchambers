<?php
// This is a simple example to fetch RSS feeds from legal sources
// Note: India Code does not have a clean JSON API, so we often use RSS or scraping libraries.

$url = "https://www.livelaw.in/rss/all-news.xml"; // Example legal feed (IndiaCode lacks RSS)
$xml = simplexml_load_file($url);
$json_data = json_decode(file_get_contents('judgments_data.json'), true);

if ($xml) {
    foreach ($xml->channel->item as $item) {
        // Create a new entry compatible with your JSON format
        $new_entry = [
            "id" => uniqid(),
            "title" => (string)$item->title,
            "court" => "Legal News",
            "date" => date("Y-m-d", strtotime($item->pubDate)),
            "citation" => "Live Update",
            "summary" => strip_tags((string)$item->description),
            "tags" => ["Update", "News"]
        ];
        
        // Add to top of list
        array_unshift($json_data, $new_entry);
    }
    
    // Keep only last 50 items to keep file small
    $json_data = array_slice($json_data, 0, 50);
    
    // Save back to file
    file_put_contents('judgments_data.json', json_encode($json_data, JSON_PRETTY_PRINT));
    echo "Updated Successfully";
} else {
    echo "Failed to fetch";
}
?>
