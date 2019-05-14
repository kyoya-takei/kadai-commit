<?php
require_once "functions.php";

$result = "無し";

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