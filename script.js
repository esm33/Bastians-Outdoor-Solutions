document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); 
    alert('Form submitted!');
});

document.addEventListener('DOMContentLoaded', function() {
    //write code to get elements with 'nav-links' ID elements and store them as navLinks
    const navLinks = document.getElementById('nav-links');
    //write code to get elements with 'expand-btn' Class elements and store them as navLinks
    const expandButtons = document.quertSelectorAll('.expand-btn');

    expandButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const project = btn.closest('.project');

            const moreInfo = project.querySelector('.more-info');
            moreInfo.style.display = moreInfo.style.display === 'block' ? 'none' : 'block';

            btn.textContent = moreInfo.style.display === 'block' ? 'Less Info' : 'More Info';
        });
    });

});
