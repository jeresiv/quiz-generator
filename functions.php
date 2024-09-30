<?php 

function randomize($questions) {
  shuffle($questions);

  for ($i = 0; $i < count($questions); $i++) {
    $answers = array_merge([], $questions[$i]["answers"]);
    shuffle($answers);
    $questions[$i]["answers"] = array_merge([], $answers); 
  }

  return $questions;
}