document.addEventListener('DOMContentLoaded', function() {
    // Cari semua tombol dengan kelas 'complete-btn'
    document.querySelectorAll('.complete-btn').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "<span style='font-size: 18px;'>Apakah yakin ingin menyelesaikan?</span>",
                html: `
                    <hr style='margin: 10px 0;'>
                    <p style='text-align: justify; font-size: 15px;'>
                        Apabila user merasa bahwa jasa yang digunakan sudah selesai, maka user bisa menekan tombol selesai dan beri ulasan. Jika belum, maka bisa menekan tombol kembali di bawah.
                        <br><br>
                        Perlu diingat bahwa setelah menekan tombol selesai dan beri ulasan, maka uang dari rekening anda akan ditransfer ke rekening mitra dan tidak bisa diambil kembali.
                    </p>
                `,
                icon: null, // Menghapus icon
                showCancelButton: true,
                confirmButtonColor: "#28a745",  // Mengubah warna tombol menjadi hijau
                cancelButtonColor: "#d33",
                confirmButtonText: "Selesai dan Beri Ulasan",
                cancelButtonText: "Kembali",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Ubah status pesanan menjadi "Selesai"
                    const statusElement = button.closest('.card-header').querySelector('.status');
                    statusElement.classList.remove('status-pending');
                    statusElement.classList.add('status-complete');
                    statusElement.textContent = 'Selesai';
                    
                    // Sembunyikan tombol "Tandai Selesai" setelah status diubah
                    button.style.display = 'none';
                }
            });
        });
    });
});