<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our team</title>
    <link rel="stylesheet" href="team.css">
    <script>
        document.documentElement.classList.add('js');
    </script>
</head>
<body>








<div class="menu-container">
    <div class="balk"></div>

    <div class="groepsnaam"><h1>L.S.M</h1></div>
    <div class="functie"><h1>Developers</h1></div>

    <a href="mainpage.php" class="homepage-btn">Homepage</a>
    <a href="projects.php" class="projects-btn">Projects</a>
    <a href="team.php" class="team-btn">Our team</a>
    <a href="contact.php" class="contact-btn">Contact us</a>
</div>


<div class="team-container">
      <img src="images/luca.jpg" alt="luca" class="luca-foto" loading="lazy" width="300" height="300">
      <div class="h1">Luca Piano</div>
      <div class="scheiding1"></div>
      <div class="h2">My name is Luca Piano, 18 years old and live in Sittard. I am a second-year Software Development student at Vista College Maastricht. I am passionate about technology, coding, and building creative digital solutions.

Outside of my studies, I enjoy working out and staying active, which helps me stay focused and disciplined in both my personal life and my projects.</div>
      <div class="languages"><span>Languages:</span> Dutch · English · Italian</div>
      <div class="scheiding2"></div>
</div>

<div class="team-container">
      <img src="images/sem.jpg" alt="milo" class="luca-foto" loading="lazy" width="300" height="300">
      <div class="h1">Sem Janssen</div>
      <div class="scheiding1"></div>
      <div class="h2">My name is Sem Janssen. I am 17 years old and a second-year Software Development student at Vista College Maastricht. Right now i live in Kerkrade. I enjoy watching sports, especially Formula 1 and football. In my free time, I like to stay active by going to the gym.</div>
      <div class="languages"><span>Languages:</span> Dutch · English </div>
      <div class="scheiding2"></div>
</div>

<div class="team-container">
      <img src="images/milo.jpg" alt="sem" class="luca-foto" loading="lazy" width="300" height="300">
      <div class="h1">Milo van Eysden</div>
      <div class="scheiding1"></div>
      <div class="h2">I am Milo van Eysden, a passionate developer with 2 years of experience in building web applications. I am currently a full-time student, combining my studies with further exploring modern web technologies and practical projects. When I'm not programming, you can find me on the padel court or behind a computer screen playing games.</div>
      <div class="languages"><span>Languages:</span> Dutch · English</div>
      <div class="scheiding2"></div>
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
    threshold: 0.2,
    rootMargin: '0px 0px -10% 0px'
  });

  cards.forEach(card => observer.observe(card));
})();
</script>
</body>
</html>
