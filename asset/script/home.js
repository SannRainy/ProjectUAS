// Fungsi untuk mengecek apakah elemen berada dalam viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Menambahkan class 'fade-in-up' saat elemen memasuki viewport
function handleScrollAnimation() {
    const elements = document.querySelectorAll('.d-flex'); // Ganti dengan selector elemen yang ingin dianimasikan
    
    elements.forEach(el => {
        if (isElementInViewport(el)) {
            el.classList.add('fade-in-up');
        }
    });
}

// Memanggil fungsi handleScrollAnimation saat user scroll
window.addEventListener('scroll', handleScrollAnimation);

// Memanggil fungsi untuk animasi pada saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', handleScrollAnimation);
