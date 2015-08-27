#!/usr/bin/php
<?php
/**
* @author David Mezquíriz Osés
*/

    if ($argc < 3) {
        print "Usage: inputparametrstosql.php [where clause] [match clause]\n\n";
        exit;
    }

    $whereclause = $argv[1];
    $matchclause = $argv[2];

    $db = mysqli_connect("localhost", "phpuser", "alm65z", "phpdb");

    $result = mysqli_query($db, "SELECT Name, Age, Job, Pay FROM staff WHERE $whereclause = '$matchclause';");
    $nummatch = mysqli_num_rows($result);

    if (!$nummatch) {
        print "No rows matched!\n\n";
        exit;
    }

    print "Found $nummatch rows:\n\n";

    while ($row = mysqli_fetch_assoc($result)) {
        extract($row);
        $Pay = 'Â£' . number_format($Pay);
        print " Name: $Name\n";
        print " Age: $Age\n";
        print " Job: $Job\n";
        print " Pay: $Pay\n\n";
    }
?>
