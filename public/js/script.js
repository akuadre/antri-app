// close error
function hideError() {
    const errorBox = document.getElementById('errorBox');
    if (errorBox) errorBox.classList.add('hidden');
}

// Check for saved theme preference or use system preference
const storedTheme = localStorage.getItem('theme') ||
                    (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

// Apply the theme
if (storedTheme) {
    document.documentElement.classList.add(storedTheme);
    document.documentElement.classList.remove(storedTheme === 'dark' ? 'light' : 'dark');
}

// Theme switcher function
function toggleTheme() {
    const html = document.documentElement;
    const isDark = html.classList.contains('dark');

    if (isDark) {
        html.classList.remove('dark');
        html.classList.add('light');
        localStorage.setItem('theme', 'light');
    } else {
        html.classList.remove('light');
        html.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
}
