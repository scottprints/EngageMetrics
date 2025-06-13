document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dark-toggle');
    const icon = document.getElementById('dark-toggle-icon');
    const html = document.documentElement;

    if (!toggle || !icon) {
        console.error('Dark mode toggle or icon not found!');
        return;
    }

    // Initialize theme
    const userTheme = localStorage.getItem('theme');
    const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (userTheme === 'dark' || (!userTheme && systemDark)) {
        html.classList.add('dark');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        html.classList.remove('dark');
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }

    toggle.addEventListener('click', function () {
        html.classList.toggle('dark');
        if (html.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        } else {
            localStorage.setItem('theme', 'light');
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }
    });
}); 