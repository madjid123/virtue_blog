// On page load or when changing themes, best to add inline in `head` to avoid FOUC

if (localStorage.getItem("dark") === 'true' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark')
}
function toggleDarkMode() {
    const html = document.documentElement;
    var isDarkMode = false;
    html.classList.toggle('dark');
    isDarkMode = html.classList.contains("dark");
    if (isDarkMode === true) {

        localStorage.theme = 'dark';
        localStorage.setItem("dark", "true")
    } else {
        localStorage.theme = 'light';
        localStorage.setItem("dark", "false")
    }
}
try {
    document.getElementById('dark-mode').addEventListener('click', toggleDarkMode);
} catch {
    console.error("not element with id : dark-mode ")
}
// Whenever the user explicitly chooses light mode
// function

// Whenever the user explicitly chooses to respect the OS preference
// localStorage.removeItem('theme')