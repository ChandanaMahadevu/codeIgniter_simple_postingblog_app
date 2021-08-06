<section style="background-color:#6c757d26;"  class="pb-3">
<!-- to access session -->
<?php $session = \Config\Services::session(); ?>
<?php if (isset($session->success)): ?>
<div class="alert alert-success text-center alert-dismissable show fade mb-0" role="0">
  <?= $session->success ?>
</div>
<?php endif; ?>
<div class="jumbotron">
<div class="container">
  <h1 class="display-4">CodeIgniter</h1>This is
  <p class="lead"> CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications</p>
  <hr class="my-4">
  <p>CodeIgniter is an application development framework, which can be used to develop websites, using PHP.
       It is an Open Source framework.
       It has a very rich set of functionality, which will increase the speed of website development work.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
  </div>
</div>
</section>

<section class="blog-section pt-3" >
  <div class="container">
    <?php if ($news): ?>
       <?php foreach ($news as $item): ?>
         <h3> <a href="/blog/<?= $item['slug'] ?>"> <?= $item['title'] ?> </a> </h3>
       <?php endforeach; ?>
       <?php else: ?>
       <p class="text-center"> There are no posts </p>
       <?php endif; ?>
  </div>
</section>
