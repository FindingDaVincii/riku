<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>default title</title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <div class="trendingbar">
  <div class="container">
    trending
  </div>
</div>
<div class="networkbar">
  <div class="container">
    networkbar
  </div>
</div>

<div class="container">
  <div class="spacer135">
    ad space
  </div>
  <header>
    <div class="logo">
      logo goes here
    </div>
    <div class="site-stats">
      Members:<span>$stats-members</span>
      Users Online:<span>$stats-online</span>
      Games:<span>$stats-games</span>
    </div>
    <div class="spacer728x90">
      ad space
    </div>
    <div class="slim-banner col-12">
      gameon or ad space
    </div>

    <nav class="col-12">
      navigation bar
    </nav>
  </header>

  <div class="col-9 maincol">
    <div class="featurette col-12">
      <div class="slider">
        slider
      </div>
      <div class="features-list">
        features-list
      </div>
    </div><!-- end of featurette -->
    <div class="col-8 news">
      col-6 content
      <section>
        <header>
          <h3><a href="#">Current</a></h3>
        </header>
        <a class="section-link section-forumactivity" href="#">More...</a>
      </section>

      <section>

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
              <div class="article-posted-by">
                <a href="<?php echo $news[$i]['game-link'];?>"><?php echo $news[$i]['game'];?></a> | Posted <?php echo $news[$i]['post-date'];?> | <?php echo $news[$i]['post-author'];?>
              </div>
          </article>

        <?php endfor; ?>


        <a class="section-newslink" href="#">More Stories</a>
      </section>
    </div>
    <div class="col-4 blogs">
      col-4 content
      <section>
        <header>
          <h3><a href="#">Latests</a></h3>
          <div class="article-title-caption">
            textstuff goes here
          </div>
          loop through videos
          <article class="">
            <div class="">
              <img src="blank.png" alt="" />
            </div>
            <div class="">
              <div class="">
                <a href="#">$video-title</a>
                <span>- $video-date</span>
              </div>
              <div class="text">
                $video-text
              </div>
              <div class="viewcount">
                <img src="blank.png" alt="" />
                <a href="#">$video-views</a>
              </div>
            </div>
          </article>
        </header>
      </section>

      <div class="social-banner">
        twitter facebook gameonline <img src="" alt="" />
      </div>

      <section>
        <header>
          <h3><a href="#">Sweepstakes</a></h3>
          <div class="article-title-caption">
            text goes ehrer
          </div>
        </header>
        loop through sweepstakes links
        <div class="">
          <a href="#">$sweepstake-link</a>
        </div>
      </section>

      <section>
        Top Voted Most Popular Games

      </section>

      <section>
        <header>
          <h3><a href="#">Latest MMORPG Screenshots</a></h3>
          <div class="article-title-caption">
            some text goes here
          </div>
        </header>
      </section>

      <section>
        <header>
          <h3><a href="#">Developer Blogs</a></h3>
          <div class="article-title-caption">
            some text goes here
          </div>
        </header>
        loop through dev blogs
        <article class="">

        </article>
      </section>
    </div><!-- end col-4 inner -->


  </div><!--end of col-9 -->
  <div class="col-3 sidebar">
    col-3 content
    <section>
      <h3><a href="#">MMOGames</a></h3>
      loop through games
      <article class="">
        <img src="" alt="" />
        <div class="">
          <a href="#">$game-link</a>
        </div>
      </article>
      <a class="section-link section-offers"href="#">More...</a>
    </section>
    <section>
      <h3><a href="#">Upcoming Games</a></h3>
      loop through games
      <article class="">
        <img src="" alt="" />
        <div class="">
          <a href="#">$game-link</a>
          <span> - $game-releasedate</span>
        </div>
      </article>
      <a class="section-link section-upcoming"href="#">More...</a>
    </section>
    <section>
      <h3><a href="#">Newly Listed Games</a></h3>
      loop through games
      <article class="">
        <img src="" alt="" />
        <div class="">
          <a href="#">$game-link</a>
        </div>
      </article>
      <a class="section-link section-newlylisted"href="#">More...</a>
    </section>
    <section>
      <h3><a href="#">Random Humor</a></h3>
      <article class="">
        <a href="#"><img src="blank.png" alt="" /></a>
      </article>
      <a class="section-link section-comics"href="#">More...</a>
    </section>
    <section>

  </div><!-- end of col-3 -->
</div><!-- end of wrap -->
<div class="container">
  <footer>
    {elapsed_time}
  </footer>
</div>

<script src="scripts/scripts.js"></script>
</body></html>
