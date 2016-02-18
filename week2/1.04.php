<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 10/02/2016
 * Time: 19:16
 */


$verse = <<<EOT
<pre>
Row Row Row your boat,
Gently down the stream,
Merrily Merrily Merrily Merrily,
Life is but a dream
</pre>
EOT;


echo '<html>';

?>

<!doctype html>
    <html>

    <head><title>row your boat</title></head>

    <body>

    <h3>Verse 1</h3>

    <p> <?= $verse ?> </p>

    <h3>Verse 2</h3>

    <p> <?= $verse ?> </p>

    <h3>Verse 3</h3>

    <p> <?= $verse ?> </p>

    </body>

</html>
