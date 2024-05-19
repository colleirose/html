CREATE TABLE /*_*/discussions_posts (
  post_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  poster_id INT NOT NULL,
  post_content TEXT NOT NULL
) /*$wgDBTableOptions*/;