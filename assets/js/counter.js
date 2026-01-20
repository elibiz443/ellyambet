const runCounters = () => {
  const counters = document.querySelectorAll('.counter');
  const slowCounters = document.querySelectorAll('.slow_counter');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const update = () => {
      const count = +counter.innerText;
      const inc = target / 100;
      if (count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(update, 30);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });

  slowCounters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const update = () => {
      const count = +counter.innerText;
      const inc = target / 100;
      if (count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(update, 200);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });
};

const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => { if(e.isIntersecting) { runCounters(); obs.unobserve(e.target); } });
});
document.querySelectorAll('.counter').forEach(c => obs.observe(c));