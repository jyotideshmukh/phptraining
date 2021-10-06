<?php
$taxonomies = explode(',',' work, family , Personal ');
echo "<pre>", var_dump($taxonomies);
$taxonomies = array_map(function($taxonomies){
        return ucfirst(trim($taxonomies));
},$taxonomies);

echo "<pre>", var_dump($taxonomies);