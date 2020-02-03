<?php 
    $title = "Date and Time";
    include 'includes/header.php'; 
?>
    <h1>Date and Time Manipulation</h1>

    <?php
        date_default_timezone_set("America/Mexico_City");  // set id timezone from your city, default setting server timezone (United State)
        $datenow = getdate();
        echo "Today's Date <br/>";
        echo "<p>$datenow[mday]</p>";
        echo "<p>$datenow[mon]</p>";
        echo "<p>$datenow[year]</p>";

        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';

        echo time() . '<br/>';

        print date("d/m/y G.i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
    ?>
<?php require 'includes/footer.php'; ?>