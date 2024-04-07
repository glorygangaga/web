<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root123';
const DATABASE = 'blog';

function createDBConnection(): mysqli {
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function closeDBConnection(mysqli $conn): void {
  $conn->close();
}

function getAndPrintPostsFromDB(mysqli $conn) {
  $sql = "SELECT * FROM post";
  $result = $conn->query($sql);
  $finalArr = [];
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $finalArr[] = [
        "id" => $row['id'],
        "title" => $row['title'],
        "subtitle" => $row['subtitle'],
        "main_img" => $row['main_img_url'],
        "img_modifier" => $row['author_url'],
        "author" => $row['author'],
        "date" => $row['publish_date'],
        "button" => FALSE,
        "featured" => $row['featured'],
        'content' => $row['content']
      ];
    }
  }
  return $finalArr;
}

$posts = [];
$postRecent = [];

$conn = createDBConnection();
$exitpost = getAndPrintPostsFromDB($conn);

foreach ($exitpost as $post) {
  if ($post['featured'] == 1) $posts[] = $post;
  else $postRecent[] = $post;
}

closeDBConnection($conn);

?>