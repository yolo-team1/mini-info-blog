<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex flex-column justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom">
        <h1 id="greeting" class="fw-light alert alert-primary"></h1>
      
      <div class="row" >
        <div class="col-md-4 sliding-card">
          <div class="card border-left-primary shadow h-100 py-2 bg-success">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1 pr-3">Jumlah Terpublish
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707z"/>
                  </svg>
                  </div>
                  <hr>
                  <div class="h1 mb-0 font-weight-bold text-white"><?php echo $jumlah_terpublish ?> Artikel</div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sliding-card">
          <div class="card border-left-success shadow h-100 py-2 bg-danger">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1 pr-2">Jumlah Unpublished
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/>
                  </svg>
                  </div>
                  <hr>
                  <div class="h1 mb-0 font-weight-bold text-white"><?php echo $jumlah_unpublish ?> Artikel</div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('user/kategori'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sliding-card">
          <div class="card border-left-danger shadow h-100 py-2 bg-primary ">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1 pr-3">Jumlah Artikel
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                    </svg>
                  </div>
                  <hr>
                  <div class="h1 mb-0 font-weight-bold text-white"><?php echo $jumlah_artikel ?> Artikel</div>
                </div>
                <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
      </div>
    
    
    <div class="row">
      <div class="col mr-2 justify-content-center align-items-center">
          <hr>
          <div class="text-md font-weight-bold text-uppercase mb-1 text-center "><span class="badge rounded-pill text-bg-primary">Back-End User</span></div>
          <hr>
          <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info">
        <?php echo $this->session->flashdata('message'); ?>
        </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-danger">
          <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?> 
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="table-primary text-center">
            <tr>
              <th>No</th>
              <th>UID</th>
              <th>Nama</th>
              <th>username</th>
              <th>Status</th>
              <th>Waktu Daftar</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            $n = 1;
            if ($user) {
              foreach ($user as $user) {
                $date = date_create($user['created_on']);
                $tanggal = date_format($date, "d-M-Y H:i");
                $status = $user['status'];
                if ($status == 1) {
                  $href = base_url('admin/blog/deactive_backenduser/'.$user['uid']);
                  $class = 'btn btn-secondary btn-sm';
                  $text = 'Deactive';
                  $status = '<p class="badge rounded-pill text-bg-success text-center w-100">Aktif</p>';
                } else {
                  $href = base_url('admin/blog/active_backenduser/'.$user['uid']);
                  $class = 'btn btn-success btn-sm';
                  $text = 'Active';
                  $status = '<p class="badge rounded-pill text-bg-warning text-center w-100">Tidak Aktif</p>';
                }
                echo "<tr>
                  <td>$n</td>
                  <td>$user[uid]</td>
                  <td>$user[name]</td>
                  <td>$user[username]</td>
                  <td>$status</td>
                  <td>$tanggal</td>
                  <td><img src='".base_url().$user['profile_pic']."' class='img-fluid img-thumbnail' width='100' height='100'></td>
                  <td class='w-auto'>
                    <a href='".$href."' class='".$class."'>".$text."</a>
                    <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteUser'>Hapus</a>
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
    <div class="text-end"><button type="button" class="btn btn-primary w-auto" data-bs-toggle="modal" data-bs-target="#addUser" href="#">Tambah User <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg></button></div>
<div class="row">
      <div class="col mr-2">
          <hr>
          <div class="text-md font-weight-bold text-uppercase mb-1 text-center "><span class="badge rounded-pill text-bg-primary">Log Aktifitas</span></div>
          <hr>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Aktifitas</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $n = 1;
            if ($logs) {
              foreach ($logs as $log) {
                $date = date_create($log['created_at']);
                $tanggal = date_format($date, "d-M-Y H:i");
                echo "<tr>
                  <td>$n</td>
                  <td>$log[user]</td>
                  <td>$log[activity]</td>
                  <td>$tanggal</td>
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
    <!-- Modal Nambah user -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUserLabel">Tambah User Baru</h5>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('admin/blog/add_backenduser_post') ?>" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                  <option value="1">Aktif</option>
                  <option value="0">Tidak Aktif</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="profile_pic" class="form-label text-danger">*Foto Profil 1:1 atau Kotak</label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic" required>
              </div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteUserLabel">Hapus User</h5>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                <label for="name" class="form-label">Apakah anda yakin ingin menghapus user ini?</label>
              </div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger deleteButton" id="confirmDelete" data-id="<?php echo $user['uid']?>">Hapus</button>
          </div>
        </div>
      </div>

    
    
    </main>
 
<?php $this->load->view('admin_panel/footer.php') ?>
<script src="<?php echo base_url() ?>/assets/js/jquery-3.7.1.min.js"></script>
<script>
     
      // Fungsi untuk menampilkan ucapan selamat datang
     function getGreeting() {
       var now = new Date();
       var hours = now.getHours();
       var greeting;

       if (hours >= 6 && hours < 10) {
         greeting = "Selamat Pagi, <?php echo ucfirst($_SESSION['username']) ?>";
       } else if (hours >= 10 && hours < 14) {
         greeting = "Selamat Siang, <?php echo ucfirst($_SESSION['username']) ?>";
       } else if (hours >= 14 && hours < 18) {
         greeting = "Selamat Sore, <?php echo ucfirst($_SESSION['username']) ?>";
       } else {
         greeting = "Selamat Malam, <?php echo ucfirst($_SESSION['username']) ?>";
       }

       document.getElementById('greeting').innerText = greeting; 
     }
     // Panggil fungsi untuk menampilkan ucapan selamat datang
     getGreeting();

      // Fungsi untuk menutup alert setelah 3 detik
      setTimeout(function() {
        $('.alert').slideUp();
      }, 5000);

      $(document).ready(function() {
        $(".sliding-card").slideDown(2000,'swing');
      });

      document.addEventListener('DOMContentLoaded', function () {
      let deleteUserId = null;

      document.querySelectorAll('.deleteButton').forEach(button => {
        button.addEventListener('click', function () {
          deleteUserId = this.getAttribute('data-id');
        });
      });

    document.getElementById('confirmDelete').addEventListener('click', function () {
      if (deleteUserId) {
        window.location.href = '<?= base_url().'admin/blog/delete_backenduser/'?>' + deleteUserId;
      } else {
        alert('Tidak ada data yang akan dihapus');
      }
    });
  });
</script>