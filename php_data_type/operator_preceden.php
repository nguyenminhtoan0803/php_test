<?php
    // Example usage for: Null Coalesce Operator
    $action = $_POST['action'] ?? 'default';

    // The above is identical to this if/else statement
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else {
        $action = 'default';
    }

    $a = 5;
    echo "Should be 5: " . $a++ . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";

    echo "<h3>Preincrement</h3>";
    $a = 5;
    echo "Should be 6: " . ++$a . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";

    echo "<h3>Postdecrement</h3>";
    $a = 5;
    echo "Should be 5: " . $a-- . "<br />\n";
    echo "Should be 4: " . $a . "<br />\n";

    echo "<h3>Predecrement</h3>";
    $a = 5;
    echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
echo '== Alphabets ==';
?> 