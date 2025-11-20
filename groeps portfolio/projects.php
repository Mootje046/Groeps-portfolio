<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="projects.css">
    <script>
        document.documentElement.classList.add('js');
    </script>
</head>
<body>

<div class="menu-container">
    <div class="balk"></div>

    <div class="groepsnaam"><h1>L.S.M.</h1></div>
    <div class="functie"><h1>Developers</h1></div>

    <a href="mainpage.php" class="homepage-btn">Homepage</a>
    <a href="projects.php" class="projects-btn">Projects</a>
    <a href="team.php" class="team-btn">Our team</a>
    <a href="contact.php" class="contact-btn">Contact us</a>
</div>



<div class="team-container">
      <img src="images/bmw.jpg" alt="luca" class="project-foto" loading="lazy" width="300" height="200" >
      <div class="h1">BMW Netherlands</div>
      <div class="scheiding1"></div>
      <div class="h2">test</div>
      <div class="scheiding2"></div>
       <a href="https://www.bmw.nl/nl/index.html?clc=1a1acv01gau1b01basaaf&tl=sea-gl-NL_BMW_NC_BRAND%20PURE_NLD_BND_ALO_3694_CONV_%20_SEAADW-mix-miy-.-sech-BRA_BND_BRAND%20PURE_MUL_NONE-.-e-bmw-.-.&gad_source=1&gad_campaignid=20751460229&gbraid=0AAAAABjoEg5iVFtsLRlHcIiB7EnQl0Q99&gclid=CjwKCAiA8vXIBhAtEiwAf3B-g-GzdripSCHXuqaZdDK3oo_VqyQPs8b-pZxotdJCw6zGoVnRgO0bchoCVQoQAvD_BwE" class="link-btn">BMW Netherlands</a>
</div>

<div class="team-container">
      <img src="images/apple.jpg" alt="luca" class="project-foto" loading="lazy" width="300" height="200" >
      <div class="h1">Apple Netherlands </div>
      <div class="scheiding1"></div>
      <div class="h2">test</div>
      <div class="scheiding2"></div>
       <a href="https://www.apple.com/nl/iphone/" class="link-btn">Apple store Netherlands</a>
</div>

<div class="team-container">
      <img src="images/gymshark.jpg" alt="luca" class="project-foto" loading="lazy" width="300" height="200" >
      <div class="h1">Gymshark</div>
      <div class="scheiding1"></div>
      <div class="h2">test</div>
      <div class="scheiding2"></div>
       <a href="https://nl.gymshark.com/?utm_campaign=bfcm_2025&gclsrc=aw.ds&gad_source=1&gad_campaignid=11606057178&gbraid=0AAAAADMZ0ipYppNSFOea8v-2tXRB9XzXC&gclid=CjwKCAiA8vXIBhAtEiwAf3B-g1zzoXNSwcN5h7gUxVlZC7LVFM-4V5fwvEEPyH1uE2hcE9gp6AlNRhoCUE0QAvD_BwE" class="link-btn">Gymshark</a>
</div>
<script>
(function () {
  const cards = document.querySelectorAll('.team-container');
  if (!cards.length) return;

  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced || !('IntersectionObserver' in window)) {
    cards.forEach(card => card.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      observer.unobserve(entry.target);
    });
  }, {
    threshold: 0.25,
    rootMargin: '0px 0px -10% 0px'
  });

  cards.forEach(card => observer.observe(card));
})();
</script>

</body>
</html>
