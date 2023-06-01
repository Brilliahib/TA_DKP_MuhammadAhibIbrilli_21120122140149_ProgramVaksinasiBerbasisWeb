const sr = ScrollReveal({
    distance: '45px',
    duration: 1200,
});

// Fungsi untuk menerapkan kembali efek ScrollReveal pada elemen
function applyScrollReveal() {
    sr.reveal('.home-text', { delay: 350, origin: 'left' });
    sr.reveal('.home-img', { delay: 350, origin: 'right' });
    sr.reveal('.heading', { delay: 350, origin: 'left' });
    sr.reveal('.row', { delay: 350, origin: 'right' });
}

// Menerapkan efek ScrollReveal pada elemen saat halaman dimuat
applyScrollReveal();

// Event listener untuk mendeteksi scroll
window.addEventListener('scroll', function () {
    // Mendapatkan posisi scroll saat ini
    const scrollPosition = window.scrollY;

    // Mendapatkan tinggi dokumen dan tinggi jendela browser
    const documentHeight = document.documentElement.scrollHeight;
    const windowHeight = window.innerHeight;

    // Jika posisi scroll mencapai atau melewati batas bawah dokumen
    if (scrollPosition >= documentHeight - windowHeight) {
        // Menerapkan kembali efek ScrollReveal pada elemen
        applyScrollReveal();
    }
});
