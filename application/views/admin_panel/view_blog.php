<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
      <h2 class="py-3">Lihat Artikel</h2> 
      <div class="table-responsive small">
        <table class="table table-striped table-sm ">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Status</th>
              <th scope="col">Dibuat</th>
              <th scope="col">Diupdate</th>
              <th scope="col">Judul</th>
              <th scope="col">Gambar</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($blog_result) {
              $n = 1;
              foreach ($blog_result as $key => $value) {
              echo"<tr>
              <td>".$n."</td>
              <td>".($value['status'] == 1 ? '<p class="alert alert-primary text-center">Published</p>' : '<p class="alert alert-warning text-center">Unpublished</p>')."</td>
              <td>".$value['created_on']."</td>
              <td>".$value['updated_on']."</td>
              <td>".$value['blog_title']."</td>
              <td><img src='".base_url().$value['blog_img']."' class='img-fluid img-thumbnail' width='100'></td>
              <td><a class=\"btn btn-info\" href='".base_url().'admin/blog/editblog/'.$value['blog_id']."'>Edit</a></td>
              <td><a class=\"btn btn-danger delete\" href='#' data-id='".$value['blog_id']."'>Hapus</a></td>
            </tr>";

            $n++;
              }
            } else {
              echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
            }
            ?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php $this->load->view('admin_panel/footer.php') ?>

<script src="<?php echo base_url() ?>/assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
  $(".delete").click(function(){
    var delete_id = $(this).attr('data-id');
    var conf = confirm('Apakah anda yakin akan menghapus data ini?');
    if (conf) {
      $.ajax({
        url: '<?= base_url().'admin/blog/deleteblog/' ?>',
        type: 'POST',
        data:{'delete_id':delete_id},
        success: function(data){
          console.log(data);
          if (data == 1) {
            alert('Data berhasil dihapus');
            location.reload();
          } else {
            alert('Data gagal dihapus');
          }
        }
      })
    } else {
      
    }
  })
</script>

<?php
if (isset($_SESSION['updated'])) {
  if ($_SESSION['updated'] == 'yes') {
    echo "<script>alert('Data berhasil diupdate')</script>";
  } else if ($_SESSION['updated'] == 'no'){
    echo "<script>alert('Data gagal diupdate')</script>";
  }
}
?>