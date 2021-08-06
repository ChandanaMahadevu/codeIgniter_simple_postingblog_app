<div class="container">
  <h1> Create new Post </h1>
  <?php if ($_POST): ?>
  <?= \Config\Services::validation()->listErrors() ?>
  <?php endif; ?>
  <form action="" method="post">
    <div class="form-group pb-2">
      <label for="title"> <strong> Title: </strong> </label>
      <input type="text" class="form-control" name="title" id="title" value=""/>
    </div>

    <div class="form-group pb-2">
      <label for="body"> Body: </label>
      <textarea class="form-control" name="body" id="body"> </textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type="submit"> Create </button>
    </div>
  </form>
</div>