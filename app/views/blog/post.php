<!-- This is for print whole database entry -->
<?php
//echo '<pre>';
//print_r($post);
//echo '</pre>';
?> 

<section>
<div class="container">
<article class="blog-post">
<h1> <?php echo $post['title'] ?> </h1>
<div class="details"> Posted on: <?= date('M d y', strtotime($post['created_at'])) ?> by <a href="https://www.linkedin.com/in/chandana-gowda-b34252ba/"> Chandana </a> </div>
<?php echo $post['body'] ?>
</article>
</div>
</section>