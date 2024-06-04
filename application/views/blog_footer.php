<footer class="text-body-secondary py-5 border-warning border-top opacity-100  bg-secondary-subtle">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Ke Atas</a>
    </p>
    <p class="mb-1"><div id="datetime"></div></p>
    <p class="mb-0">Copyright &copy; <span id="currentYear"></span> Kelompok 1. All Right Reserved</p>
  </div>
</footer>
<script src="<?php echo base_url() ?>assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>
<script>
    function updateCopyrightYear() {
            var currentYear = new Date().getFullYear();
            document.getElementById('currentYear').innerText = currentYear;
        }

        // Panggil fungsi untuk memperbarui tahun hak cipta saat halaman dimuat
        updateCopyrightYear();

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
    </body>
</html>