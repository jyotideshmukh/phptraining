<?php

$orig = "I'll \"walk\" the <b>dog</b> now";

echo $orig."<br>";
$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a."<br>"; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b; // I'll "walk" the <b>dog</b> now