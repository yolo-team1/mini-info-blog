<?php $this->load->view('admin_panel/header.php') ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 alert alert-primary">Selamat datang!</h1>
        <div id="datetime" class=""></div>
      </div>
    </main>
<?php $this->load->view('admin_panel/footer.php') ?>
<script>
     function updateDateTime() {
            var now = new Date();
            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var day = days[now.getDay()];

            var date = now.getDate();
            var month = now.getMonth() + 1; // Januari adalah 0
            var year = now.getFullYear();

            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Menambahkan nol di depan angka satu digit
            if (minutes < 10) minutes = '0' + minutes;
            if (seconds < 10) seconds = '0' + seconds;

            var datetimeString = day + ', ' + date + '/' + month + '/' + year + ' - ' + hours + ':' + minutes + ':' + seconds;
            document.getElementById('datetime').innerText = datetimeString;
        }

        // Perbarui waktu setiap detik
        setInterval(updateDateTime, 1000);

        // Panggil fungsi untuk pertama kali saat halaman dimuat
        updateDateTime();
</script>