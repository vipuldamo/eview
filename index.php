<?php

	$data = file_get_contents('test.json', 'r');
	$aData = json_decode($data,true);
	// if ($fh = fopen('mytext.txt', 'r')) {
 //    while (!feof($fh)) {
 //        $line = fgets($fh);
 //        echo $line;
 //    }
 //    fclose($fh);
//}
function doOutputList($TreeArray)
{
    echo '<ul>';
    foreach($TreeArray as $arr)
    {
        echo '<li>';
        if(is_array($arr)) 
        {
                doOutputList($arr);
        }
        else
        {
                echo '<div>'.$TreeArray['name'].'</div>';
        }
        echo '</li>';
    }
    echo '</ul>';
}

doOutputList($aData);
?>

<style>
	ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}
li {
  list-style-type: none;
  border-left: 2px solid #000;
  margin-left: 1em;
}
li div {
  padding-left: 1em;
  position: relative;
}
li div::before {
  content:'';
  position: absolute;
  top: 0;
  left: -2px;
  bottom: 50%;
  width: 0.75em;
  border: 2px solid #000;
  border-top: 0 none transparent;
  border-right: 0 none transparent;
}
ul > li:last-child {
  border-left: 2px solid transparent;
}
<ul>
</style>