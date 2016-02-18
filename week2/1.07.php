<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 10/02/2016
 * Time: 20:13
 */

function printVerse($verse_num)
{

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

<?= printVerse('Verse 1'); ?>

<!--<h3>Verse 2</h3>-->

<?= printVerse('Verse 2'); ?>

<!--<h3>Verse 3</h3>-->

<?= printVerse('Verse 3'); ?>

</body>

</html>