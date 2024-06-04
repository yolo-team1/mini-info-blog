<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
      <h2 class="py-3">Lihat Artikel</h2>
      <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info">
        <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
        </div>
      <?php endif; ?> 
      <div class="table-responsive small">
        <table class="table table-striped table-sm ">
          <thead class="table-primary">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center">Status</th>
              <th scope="col" class="text-center">Penulis</th>
              <th scope="col" class="text-center">Dibuat</th>
              <th scope="col" class="text-center">Diupdate</th>
              <th scope="col" class="text-center">Judul</th>
              <th scope="col" class="text-center">Gambar</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                        if ($blog_result) {
                          $n = 1;
                         
                          foreach ($blog_result as $key => $value) {
                          $date_created = date_create($value['created_on']);
                          $date_updated = date_create($value['updated_on']);
                          echo"<tr class='text-center align-center'>
                          <td>".$n."</td>
                          <td>".($value['status'] == 1 ? '<p class="badge rounded-pill text-bg-primary text-center w-100">Published</p>' : '<p class="badge rounded-pill text-bg-warning text-center w-100">Unpublished</p>').'<br>'.($value['headline'] == 1 ? '<p class="badge rounded-pill text-bg-primary text-center w-100">Headline</p>' : '<p class="badge rounded-pill text-bg-warning text-center w-100">Not Headline</p>' )."</td>
                          <td>".$value['penulis']."</td>
                          <td>".date_format($date_created,"d-M-Y H:i")."</td>
                          <td>".date_format($date_updated,"d-M-Y H:i")."</td>
                          <td>".$value['blog_title']."</td>
                          <td><img src='".base_url().$value['blog_img']."' class='img-fluid img-thumbnail' width='100'></td>
                          <td>
                          <a class=\"btn btn-info btn-sm m-2 w-75\" href='".base_url().'admin/blog/editblog/'.$value['blog_id']."'>Edit</a><br>
                          <button class='btn btn-danger deleteButton' data-bs-toggle='modal' data-bs-target='#modalHapus' href='#' data-id='".$value['blog_id']."'>Hapus</button>
                          </td>
                        </tr>";

                        $n++;
                          }
                        } else {
                          echo "<tr><td colspan='8'>Data tidak ditemukan</td></tr>";
                        }
                        ?>
            
          </tbody>
        </table>
      </div>
      <!-- Modal -->
      <div class="modal fade " id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Apa kamu yakin mau hapus?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Data yang akan dihapus tidak bisa dikembalikan lagi.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Modal -->
    </main>
  </div>
</div>
<?php $this->load->view('admin_panel/footer.php') ?>

<script src="<?php echo base_url() ?>/assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
  setTimeout(function(){
  $('.alert').slideUp('slow'); }, 3000);

  document.addEventListener('DOMContentLoaded', function () {
    let deletePostId = null;

    document.querySelectorAll('.deleteButton').forEach(button => {
      button.addEventListener('click', function () {
        deletePostId = this.getAttribute('data-id');
      });
    });

    document.getElementById('confirmDelete').addEventListener('click', function () {
      if (deletePostId) {
        window.location.href = '<?= base_url().'admin/blog/deleteblog/' ?>' + deletePostId;
      } else {
        alert('Tidak ada data yang akan dihapus');
      }
    });
  });
</script>