<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>
    <link rel="stylesheet" href="mainpage.css">
</head>
<body>

<div class="menu-container">
    <div class="balk"></div>

    <div class="groepsnaam"><h1>L.S.M.</h1></div>
    <div class="functie"><h1>Developers</h1></div>


<div class="buttons-container">
    <a href="mainpage.php" class="homepage-btn">Homepage</a>
    <a href="projects.php" class="projects-btn">Projects</a>
    <a href="team.php" class="team-btn">Our team</a>
    <a href="contact.php" class="contact-btn">Contact us</a>
    </div>
</div>

<main>
<section class="blok" role="region" aria-labelledby= "welcome-title">
<span class ="typewriter" aria-hidden="true">L.S.M. Developers Portfolio</span>
<p>Software Developers Vista College Maastricht Leerjaar 2 </p>

<button id= "expand-btn"class="expand-btn" aria-expanded="false" aria-controls="more-info">Meer Informatie</button>
<div id="extra-content" class="extra-content" aria-hidden="true">
    <p>Wij zijn L.S.M. — een team van gepassioneerde ontwikkelaars dat zich toelegt op het creëren van innovatieve digitale oplossingen.
Ons portfolio toont een selectie van ons beste werk, variërend van geavanceerde webontwikkeling tot intuïtieve mobiele applicaties.

Gedreven door creativiteit en precisie streven we ernaar om producten te bouwen die niet alleen functioneel zijn, maar ook aantrekkelijk en toekomstbestendig.

We nodigen je uit om onze projecten te verkennen en meer te ontdekken over wie we zijn, wat we creëren en de vaardigheden die ons definiëren.

L.S.M.

Luca, Sem en Milo.</p>
</div>
<div class="burst" aria-hidden="true"></div>
</section>
</main>

<script>

(function () {
  const blok = document.querySelector('.blok');
  const btn = document.getElementById('expand-btn');
  const extra = document.getElementById('extra-content');


  btn.setAttribute('aria-expanded', 'false');
  extra.setAttribute('aria-hidden', 'true');

 
  function setCollapsed() {

    const base = blok.scrollHeight;
    blok.style.maxHeight = base + 'px';
    extra.style.maxHeight = '0px';
  }


  function setExpanded() {
    const base = blok.scrollHeight;            
    const extraH = extra.scrollHeight;       
    extra.style.maxHeight = extraH + 'px';

    blok.style.maxHeight = (base + extraH) + 'px';
  }

 
  window.addEventListener('load', () => {
    setCollapsed();
  });

  btn.addEventListener('click', () => {
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    if (!expanded) {
      btn.setAttribute('aria-expanded', 'true');
      extra.setAttribute('aria-hidden', 'false');
      setExpanded();
      btn.textContent = 'Minder informatie';
    } else {
      btn.setAttribute('aria-expanded', 'false');
      extra.setAttribute('aria-hidden', 'true');
      setCollapsed();
      btn.textContent = 'Meer informatie';
    }
  });


  window.addEventListener('resize', () => {
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    if (expanded) {
      // recalc expanded sizes
      setExpanded();
    } else {
      setCollapsed();
    }
  });
})();
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const blok = document.querySelector('.blok');
    if (!blok) return;
    requestAnimationFrame(() => {
      requestAnimationFrame(() => blok.classList.add('is-visible'));
    });
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const blok = document.querySelector('.blok');
  const btn = document.getElementById('expand-btn');
  const extra = document.getElementById('extra-content');
  const burst = document.querySelector('.burst');

  if (!blok || !btn || !extra) return;

  // slide-in on load
  requestAnimationFrame(() => requestAnimationFrame(() => blok.classList.add('is-visible')));

  // helpers to collapse / expand using max-height
  function setCollapsed() {
    extra.style.maxHeight = '0px';
    // allow browser to compute heights
    const base = blok.scrollHeight;
    blok.style.maxHeight = base + 'px';
    btn.setAttribute('aria-expanded', 'false');
    extra.setAttribute('aria-hidden', 'true');
    btn.textContent = 'More information about us';
  }

  function setExpanded() {
    // ensure extra content can measure itself
    extra.style.maxHeight = '9999px';
    const extraH = extra.scrollHeight;
    extra.style.maxHeight = extraH + 'px';
    // set blok max to include extra
    blok.style.maxHeight = (blok.scrollHeight + extraH) + 'px';
    btn.setAttribute('aria-expanded', 'true');
    extra.setAttribute('aria-hidden', 'false');
    btn.textContent = 'Less about us';
  }

  // explosion particles
  function explode(count = 18) {
    if (!burst) return;
    const colors = ['#ffd27a','#ff9a5b','#ff6b6b','#ffd36b','#fff08a'];
    for (let i = 0; i < count; i++) {
      const p = document.createElement('span');
      p.className = 'particle';
      const angle = Math.random() * Math.PI * 2;
      const dist = 40 + Math.random() * 120; // pixels
      const dx = Math.cos(angle) * dist;
      const dy = Math.sin(angle) * dist;
      p.style.setProperty('--dx', dx + 'px');
      p.style.setProperty('--dy', dy + 'px');
      p.style.background = colors[Math.floor(Math.random() * colors.length)];
      burst.appendChild(p);
      p.addEventListener('animationend', () => p.remove(), { once: true });
    }
  }

  // initialize collapsed
  setCollapsed();

  btn.addEventListener('click', () => {
    const isOpen = btn.getAttribute('aria-expanded') === 'true';
    if (!isOpen) {
      setExpanded();
      // trigger explosion once on open
      explode(20);
    } else {
      setCollapsed();
    }
  });

  // keep sizes correct on resize
  window.addEventListener('resize', () => {
    const isOpen = btn.getAttribute('aria-expanded') === 'true';
    if (isOpen) setExpanded(); else setCollapsed();
  });
});
<script>
document.addEventListener('DOMContentLoaded', () => {
  const naam = document.querySelector('.groepsnaam');
  const buttonsContainer = document.querySelector('.buttons-container');

  // ensure initial class presence (CSS handles initial hidden state)
  if (buttonsContainer) buttonsContainer.classList.remove('is-visible');
  if (naam) naam.classList.remove('is-visible');

  // trigger on next frame so transitions run
  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      if (buttonsContainer) buttonsContainer.classList.add('is-visible');
      if (naam) naam.classList.add('is-visible');
    });
  });
});
</script>




    
</body>
</html>
