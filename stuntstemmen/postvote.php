<?php
    if($_POST["vote"]){
        $vote = $_POST["vote"];
        $product = $_POST["product"];
        $url = '../json/stemmen.json';
        $jsonString = file_get_contents($url);
        $data = json_decode($jsonString, true);
        $data["voteProducts"][$product]["numberVotes"] = $data["voteProducts"][$product]["numberVotes"] + $vote;
        $newJsonString = json_encode($data);
        file_put_contents($url, $newJsonString);
    }
?>