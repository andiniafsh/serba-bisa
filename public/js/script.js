document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.popular-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const pageItems = document.querySelectorAll('#pagination-line .page-item');
    const pageSize = 4; // Jumlah gambar per halaman
    const totalImages = container.children.length;
    const totalPages = Math.ceil(totalImages / pageSize);

    let currentPage = 0;

    function updatePagination() {
        pageItems.forEach((item, index) => {
            item.classList.toggle('active', index === currentPage);
        });
    }

    function showPage(page) {
        if (page < 0 || page >= totalPages) return;
        currentPage = page;
        const offset = -currentPage * 100; // Menggeser container
        container.style.transform = `translateX(${offset}%)`;
        updatePagination();
    }

    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages - 1) {
            showPage(currentPage + 1);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentPage > 0) {
            showPage(currentPage - 1);
        }
    });

    pageItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            showPage(index);
        });
    });

    // Initial setup
    updatePagination();
    showPage(0); // Tampilkan halaman pertama saat memuat
});


