<?php
	$nfl = simplexml_load_file('http://www.nfl.com/liveupdate/scorestrip/ss.xml');

	// print '<pre>';
	// foreach ($nfl->gms->g as $game) {
	//     foreach($game->attributes() as $a => $b) {
	//     	echo $a,"\"\n";
	//          //echo $a,'="',$b,"\"\n";
	//     }
	//     echo "\n------------------------------------------\n";
	// }
	// print '</pre>';
	$item = array();
	foreach ($nfl->gms as $gameday) {
		$rows = array();
		foreach ($gameday->attributes() as $a => $b) {
			$rows[$a] = (string) $b;
		}
		$item[] = $rows;
	}
	$items = array();
	foreach ($nfl->gms->g as $game) {
	    $row = array();
	    foreach ($game->attributes() as $a => $b) {
	        $row[$a] = (string) $b;
	    }
	    $items[] = $row;
	}
	//echo json_encode($item);
	echo json_encode($items);
?>