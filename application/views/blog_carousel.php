        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php foreach ($artikel_carousel as $i => $value) { ?>
                    <button type="button" data-bs-target="#myCarousel" <?php echo $i == 0 ? "class=active" : ""?> data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i; ?>"></button>
                <?php } ?>
            </div>

        <?php
        ?>

        <div class="carousel-inner" data-bs-theme="light">    
            <?php 
            $chunk = array_chunk($artikel_carousel, count($artikel_carousel));
            foreach ($chunk as $key => $value): ?>
                <?php foreach ($value as $key => $value): ?>
                    <div <?php echo $key == 0 ? 'class="carousel-item active"' : 'class="carousel-item"'; ?>" data-bs-theme="light">
                    <img src="<?= base_url().$value['blog_img']?>" class="img-fluid"  alt="<?php echo $value['blog_title']?>" width="100%" height="100%" style="filter:brightness(70%);"  focusable="false">
                    <div class="container" data-bs-theme="light">
                        <div class="carousel-caption text-start" data-bs-theme="light">
                            <h1 style="text-shadow: 2px 2px 4px grey;" data-bs-theme="light"><?php echo $value['blog_title']?></h1>
                            <p><a class="btn btn-lg btn-primary" href="<?= base_url().'home/blog_detail/'.$value['blog_id']?>">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>