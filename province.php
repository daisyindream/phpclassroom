<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

var_dump($data);

  foreach($data as $key=>$val){
      echo $val->province.";".$val->new_case."<br>";
  }

?>
