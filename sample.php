<?php
require_once "functions.php";

$result = "無し";

if (array_key_exists("act", $_POST)) {
    $result = omikuji();
}

function omikuiji() {
    $fortune = ["大吉", "中吉", "小吉", "吉", "末吉", "凶"];
    $rand_index = random_int(0, count($fortune)-1);
    return $fortune[$rand_index];
}
 
?>

<!DOCTYPE html>
<html lang="ja">
    <haed>
        <meta charset="utf-8">
        <title>おみくじ</title>
    </haed>
    
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果：<?php print h($result); ?></p>
        
        <form action="sample.php" method="POST">
            <button type="submit" name="act" value="draw">おみくじを引く！</button>
        </form>
    </body>
    
</html>