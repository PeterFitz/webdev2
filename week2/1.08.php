<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 10/02/2016
 * Time: 21:57
 */

$verse = <<<EOT
<p>
<pre>
Row Row Row your boat,
Gently down the stream,
Merrily Merrily Merrily Merrily,
Life is but a dream
</pre>
</p>
EOT;

function printVerse($verse,$verse_num)
{

    echo "<h3>$verse_num</h3>";
    echo $verse;

}

echo '<html>';

?>

<!doctype html>
<html>

<head><title>row your boat</title></head>

<body>

<!--<h3>Verse 1</h3>-->

<?= printVerse($verse,'Verse 1'); ?>

<!--<h3>Verse 2</h3>-->

<?= printVerse($verse,'Verse 2'); ?>

<!--<h3>Verse 3</h3>-->

<?= printVerse($verse,'Verse 3'); ?>

</body>

</html>