
const links = document.querySelectorAll('.item-link h3');
links.forEach(link => {
    link.addEventListener('click', function() {
        links.forEach(l => l.classList.remove('active-link')); 
        this.classList.add('active-link'); 
    });
});


document.querySelectorAll('.sidebar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });
});



let currentPage = 0;
const pages = document.querySelectorAll('[class^="page"]');

window.addEventListener('wheel', (event) => {
    if (event.deltaY > 0) {
        // Scroll down
        if (currentPage < pages.length - 1) {
            currentPage++;
            scrollToPage(currentPage);
        }
    } else {
        // Scroll up
        if (currentPage > 0) {
            currentPage--;
            scrollToPage(currentPage);
        }
    }
});

window.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowDown') {
        // Scroll down
        if (currentPage < pages.length - 1) {
            currentPage++;
            scrollToPage(currentPage);
        }
    } else if (event.key === 'ArrowUp') {
        // Scroll up
        if (currentPage > 0) {
            currentPage--;
            scrollToPage(currentPage);
        }
    }
});

function scrollToPage(index) {
    pages[index].scrollIntoView({ behavior: 'smooth' });
}

document.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('.section');
    const scrollPosition = window.scrollY + window.innerHeight;

    sections.forEach(section => {
        if (section.offsetTop < scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
            section.style.opacity = 1; // Fade in effect
        } else {
            section.style.opacity = 0; // Fade out effect
        }
    });
});



document.querySelectorAll('.sidebar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        // Scroll to the target element
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });
});

