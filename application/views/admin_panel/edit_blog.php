<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <h2>Edit Artikel Blog</h2>

      <form action="<?= base_url().'admin/blog/editblog_post'?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Judul</span>
          <input type="text" value="<?= $blog_result[0]['blog_title'] ?>" class="form-control" id="judul" name="judul" aria-label="judul" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <label class="input-group-text" for="Kategori">Kategori</label>
          <select class="form-select" id="kategori" name="kategori">
            <option value="Umum" <?= ($blog_result[0]['kategori'] == "Umum" ? "selected" : "") ?>>Umum</option>
            <option value="Pengumuman" <?= ($blog_result[0]['kategori'] == "Pengumuman" ? "selected" : "") ?>>Pengumuman</option>
            <option value="Administrasi" <?= ($blog_result[0]['kategori'] == "Administrasi" ? "selected" : "") ?>>Administrasi</option>
          </select>
        </div>

        <div class="mb-3 input-group">
          <label for="penulis" class="input-group-text" id="basic-addon1">Penulis</label>
          <input type="text" class="form-control" id="penulis" name="penulis" aria-label="judul" aria-describedby="basic-addon1" value="<?php echo $_SESSION['username'] ?>" required readonly>
        </div>
        <div class="mb-3 input-group">
          <span class="input-group-text" id="basic-addon1">Opsi Publish</span>
          <select class="form-select" id="publish_unpublish" name="publish_unpublish" required>
            <option value="1" <?= ($blog_result[0]['status'] == 1 ? "selected" : "") ?>>Publish</option>
            <option value="0" <?= ($blog_result[0]['status'] == 0 ? "selected" : "") ?>>Unpublish</option>
          </select>
          <span class="input-group-text" id="basic-addon1">Opsi Headline</span>
          <select class="form-select" id="headline" name="headline" required>
            <option value="1" <?= ($blog_result[0]['headline'] == 1 ? "selected" : "") ?>>Ya</option>
            <option value="0" <?= ($blog_result[0]['headline'] == 0 ? "selected" : "") ?>>Tidak</option>
          </select>
        </div>
        <p>Isi Artikel</p>
        <div class="mb-3">
            <textarea class="form-control" id="isi" name="isi" rows="5"><?= $blog_result[0]['blog_desc']; ?></textarea>
        </div>
        <div class="mb-3">
            <img src="<?= base_url().$blog_result[0]['blog_img'] ?>" class="img-fluid img-thumbnail" width="100"><br> 
          <label for="gambar" class="form-label">Gambar</label>
          <p class="text-danger">*Jika ingin mengganti gambar, silahkan pilih gambar baru</p>
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