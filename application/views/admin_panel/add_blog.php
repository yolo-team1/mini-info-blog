<?php $this->load->view('admin_panel/header.php') ?>

    <main class="py-4 col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info">
        <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
        </div>
      <?php endif; ?> 
      <h2 class="py-2">Tambah Artikel Blog</h2>
      <form action="<?= base_url().'admin/blog/addblog_post'?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
      <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Judul</span>
          <input type="text" class="form-control" id="judul" name="judul" aria-label="judul" aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
          <label class="input-group-text" for="Kategori">Kategori</label>
          <select class="form-select" id="kategori" name="kategori" required>
            <option selected disabled>Pilih Kategori</option>
            <option value="Umum">Umum</option>
            <option value="Pengumuman">Pengumuman</option>
            <option value="Administrasi">Administrasi</option>
          </select>
        </div>

        <div class="mb-3 input-group">
          <label for="penulis" class="input-group-text" id="basic-addon1">Penulis</label>
          <input type="text" class="form-control" id="penulis" name="penulis" aria-label="judul" aria-describedby="basic-addon1" value="<?php echo $_SESSION['username'] ?>" required readonly>
        </div>

        <div class="mb-3 input-group">
          <span class="input-group-text" id="basic-addon1">Opsi Publish</span>
          <select class="form-select" id="publish_unpublish" name="publish_unpublish" required>
            <option selected disabled>Pilih Opsi</option>
            <option value="1">Publish</option>
            <option value="0">Unpublish (Draft)</option>
          </select>
          <span class="input-group-text" id="basic-addon1">Opsi Headline</span>
          <select class="form-select" id="headline" name="headline" required>
            <option selected disabled>Pilih Opsi</option>
            <option value="1">Ya</option>
            <option value="0" selected>Tidak</option>
          </select>
        </div>
        <div>
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

<script src="<?php echo base_url() ?>/assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
  setTimeout(function() {
    $('.alert').slideUp();
  }, 3000);
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