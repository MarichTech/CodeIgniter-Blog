<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>

    <div class="card" style="margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['title']; ?></h5>
        <small class="post-date"> Posted on: <?php echo $post['created_on']; ?></small><br>
        <p class="card-text"><?php echo $post['body']; ?></p>
        <a href="<?php echo site_url('/posts/' . $post['slug']); ?>" class="btn btn-outline-info">Read More</a>
      </div>
    </div>



 
<?php endforeach; ?>