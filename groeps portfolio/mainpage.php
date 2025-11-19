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
<h1 id="welcome-title"> L.S.M Developers Portfolio</h1>
<p>Software Developers Vista College Maastrich Leerjaar 2 </p>

<button id= "expand-btn"class="expand-btn" aria-expanded="false" aria-controls="more-info">More information about us</button>
<div id="extra-content" class="extra-content" aria-hidden="true">
    <p>We are L.M.S. — a team of passionate developers dedicated to crafting innovative digital solutions.
Our portfolio showcases a selection of our finest work, ranging from cutting-edge web development to intuitive mobile applications.

Driven by creativity and precision, we strive to build products that are not only functional but also engaging and future-proof.

We invite you to explore our projects and discover more about who we are, what we create, and the skills that define us.

L.M.S. — Luca, Sem, and Milo.</p>
</div>
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
      btn.textContent = 'Less about us';
    } else {
      btn.setAttribute('aria-expanded', 'false');
      extra.setAttribute('aria-hidden', 'true');
      setCollapsed();
      btn.textContent = 'More about us';
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




    
</body>
</html>
