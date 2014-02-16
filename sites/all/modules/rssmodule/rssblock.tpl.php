<?php
echo '<h3>Latest news:</h3>';
foreach ($item as $items) {
    echo "<h4><a href='". $items['link']. "'>". $items['title']. "</a></h4>";
    echo "<p>". $items['description']. "</p>";
}
?>
