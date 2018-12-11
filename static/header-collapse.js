(function() {
    const header = document.getElementById('header');
    const btn = document.getElementById('header-btn');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');

    main.style.display = 'none';
    footer.style.display = 'none';

    btn.addEventListener('click', () => {
        header.classList.add('header-collapse');
        
        setTimeout(() => {
            header.style.display = 'none';
            main.style.display = 'block';
            footer.style.display = 'block';
        }, 1000);
    });
}())