<?php
class DataController extends Controller {
    public static function show(){
        $stmt= self::query("SELECT * FROM users");
        foreach ($stmt as $row)
        {
            echo '- '.htmlspecialchars($row['name']) . "\n";
            echo htmlspecialchars($row['lastname']) . "\n";
            echo '<br>';
        }
    }
}
