<div><?php echo("Todos locos");?></div>
    <BR></BR>
    <div><?php
            for ($i = 0; $i <= 100; $i++) {
                echo $i . " ";
            }
        ?></div>
        <BR></BR>
        <div><?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<li>7 × $i = " . (7 * $i) . "</li>";
            }
        ?></div>
        <BR></BR>
        <DIv><?php
            for ($i = 100; $i >= 0; $i--) {
                if ($i == 0) {
                    echo "<b><i><u>$i</u></i></b> ";
                } elseif ($i % 2 == 0) {
                    echo "<b>$i</b> ";
                } else {
                    echo "<i>$i</i> ";
                }
            }
        ?></DIv>
        <br></br>
        <div><ul>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "Página $i: <a href='https://ca.wikipedia.org/wiki/$i' target='_blank'>$i</a> <br> <br>";
            }
        ?>