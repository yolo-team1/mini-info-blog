<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
      <h2 class="py-2">Tambah Artikel Blog</h2>

      <form action="<?= base_url().'admin/blog/addblog_post'?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label">Isi Artikel</label>
          <textarea class="form-control" id="isi" name="isi" rows="5"></textarea>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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