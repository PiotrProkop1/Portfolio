(function() {
    const header = document.getElementById('header');
    const btn = document.getElementById('header-btn');

    btn.addEventListener('click', () => {
        header.classList.add('header-collapse');
        setTimeout(() => header.style.display = 'none', 1000);
    });
}())