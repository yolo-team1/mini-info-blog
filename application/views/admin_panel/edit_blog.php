<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
      <h2>Edit Artikel Blog</h2>

      <form action="<?= base_url().'admin/blog/editblog_post'?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <select class="custom-select" name="publish_unpublish">
            <option value="1" <?= ( $blog_result[0]['status'] == "1" ? "selected" : "" ); ?>>Publish</option>
            <option value="0" <?= ( $blog_result[0]['status'] == "0" ? "selected" : "" ); ?>>Unpublish</option>
        </select>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Artikel</label>
          <input type="text" value="<?= $blog_result[0]['blog_title'] ?>" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea class="form-control" id="isi" name="isi" rows="5"><?= $blog_result[0]['blog_desc']; ?></textarea>
        </div>
        <div class="mb-3">
            <img src="<?= base_url().$blog_result[0]['blog_img'] ?>" class="img-fluid img-thumbnail" width="100"> 
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?= base_url().'admin/blog' ?>" class="btn btn-danger">Kembali</a>
    </form>

    </main>
  </div>
</div>
<?php $this->load->view('admin_panel/footer.php') ?>

<script type="text/javascript">
  <?php 
  if (isset($_SESSION['success'])) {
    echo "alert('".$_SESSION['success']."')";
    unset($_SESSION['success']);
  }
  ?>
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#isi' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );
</script>