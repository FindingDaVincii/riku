<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>default title</title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php for ($i=0,$k=count($news);$i<$k;$i++): ?>
  <article>
    <header>
      <h3><a href="<?php echo $news[$i]['link'];?>"><?php echo $news[$i]['title'];?></a></h3>
    </header>
      <div>
        <a href="<?php echo $news[$i]['link'];?>"><img src="<?php echo $news[$i]['img'];?>" alt="" /></a>
      </div>
      <div>
        <?php echo $news[$i]['text'];?>
      </div>
      <div class="game-link">
        <a href="<?php echo $news[$i]['game-link'];?>"><?php echo $news[$i]['game'];?></a>
      </div>
      <div class="article-posted-by">
        Posted <?php echo $news[$i]['post-date'];?> by <?php echo $news[$i]['post-author'];?>
      </div>
  </article>

<?php endfor; ?>

<div class="">
  {elapsed_time}
</div>

<script src="scripts/scripts.js"></script>
</body></html>
