<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            $num = ($i - 1) * 10 + $j;
            $color = ($num % 2 == 0) ? "red" : "black";
            echo "<td style='color:$color;'>$num</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
