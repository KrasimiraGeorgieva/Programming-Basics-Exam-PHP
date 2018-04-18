<?php

  $examHours = intval(readline());
  $examMinutes = intval(readline());
  $arrivHours = intval(readline());
  $arrivMinutes = intval(readline());

  $examTime = $examHours * 60 + $examMinutes;
  $arrivTime = $arrivHours * 60 + $arrivMinutes;
  $diffMinutes = abs($examTime - $arrivTime);

  if ($arrivTime > $examTime) {
    echo "Late" . "\n";
    if ($diffMinutes < 60) {
        echo $diffMinutes . " minutes after the start";
    } else {
        $diffHours = floor($diffMinutes / 60);
        $diffMinutes = $diffMinutes - 60;
        $diffminutes = $diffMinutes % 60;
        if ($diffMinutes < 10) {
            echo $diffHours . ":0" . $diffMinutes . " hours after the start";
        } else {
            echo $diffHours . ":" . $diffMinutes . " hours after the start";
        }
    }
} else {
    if ($diffMinutes <= 30) {
        echo "On time";
        echo "\n";
        echo $diffMinutes . " minutes before the start";
    } else {
        echo "Early";
        echo "\n";
        if ($diffMinutes < 60) {
            echo $diffMinutes . " minutes before the start";
        } else {
            $diffHours = floor($diffMinutes / 60);
            $diffMinutes = $diffMinutes - 60;
            $diffMinutes = $diffMinutes % 60;
            if ($diffMinutes < 10) {
                echo $diffHours . ":0" . $diffMinutes . " hours before the start";
            } else {
                echo $diffHours . ":" . $diffMinutes . " hours before the start";
            }
        }
    }
}
