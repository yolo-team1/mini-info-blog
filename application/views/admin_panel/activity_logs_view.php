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
      <h2 class="py-2">Log Aktifitas</h2>

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
        <nav aria-label="Page navigation example">
            <ul class="pagination icon-link-hover">
                <?php echo $links; ?>
            </ul>
    </main>
  </div>





<?php $this->load->view('admin_panel/footer.php') ?>