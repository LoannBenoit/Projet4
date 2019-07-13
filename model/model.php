<?php
class Chapters  
{
  public function getChapters()
  {
    $db = $this->dbConnect();
    $chapters = $db->prepare('SELECT * DATE_FORMAT(published, \'%d/%m/%Y\') AS published FROM chapters ORDER BY id DESC');
    $chapters->execute(array($postId));

    return $comments;
  }

  private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
        return $db;
    }
}
