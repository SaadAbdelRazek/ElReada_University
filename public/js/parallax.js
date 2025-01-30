document.addEventListener('DOMContentLoaded', () => {
    const stats = document.querySelectorAll('.statistic');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stat = entry.target;
                const target = +stat.getAttribute('data-target');
                const updateCount = () => {
                    const count = +stat.innerText;
                    const increment = target / 100;
                    if (count < target) {
                        stat.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 20);
                    } else {
                        stat.innerText = target;
                    }
                };
                updateCount();
                observer.unobserve(stat);
            }
        });
    }, {
        threshold: 1.0
    });

    stats.forEach(stat => {
        observer.observe(stat);
    });
});
