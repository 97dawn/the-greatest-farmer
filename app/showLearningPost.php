<?php
    require_once("DBinfo.php");
        
    // Get username and password from Ajax
    header("Content-Type: application/json; charset=UTF-8");
    $postid = intval($_POST["postid"]);

    // Connect to DB
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $sql = "SELECT * FROM POSTS WHERE postid=".$postid.";";
    $result = $conn->query($sql) or die ("Error: " . mysql_error());
    $row = $result->fetch_assoc();
    $json = [];
    $json["authorName"] = $row["authorName"];
    $json["title"] = $row["title"];
    $json["cropName"] = $row["cropName"];
    $json["cropInfo"] = $row["cropInfo"];
    $json["uses"] = $row["uses"];
    $json["diseases"] = $row["diseases"];
    $json["date"] = $row["date"];
    $conn->close();
    echo(json_encode($json));
?>