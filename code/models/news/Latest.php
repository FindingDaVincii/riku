<?php
class Latest extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function get_news(){
    $news = [];
    $statement = "SELECT * FROM news ORDER BY post_date DESC LIMIT 10";
    $query = $this->db->query($statement);

    foreach($query->result_array() as $row){
      $data = [
        'img' => $row['news_img'],
        'title' => $row['news_title'],
        'text' => $row['news_text'],
        'link' => $row['news_link'],
        'game' => $row['news_game'],
        'game-link' => $row['news_game_link'],
        'post-date' => $row['post_date'],
        'post-author' => $row['post_author']
      ];

      array_push($news,$data);
    }
    return $news;
  }

}


?>
