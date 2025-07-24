<?php include 'includes/header.php'; ?>
<body>
  <main>
<section class="home">
  <div class="container">
    <h1 class="logo-heading">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> 
  Hello, I'm <span class="highlight neon-text">Angelo Aldama</span>

    </h1>
    <p>Welcome to my personal portfolio!</p>
    <a href="#projects" class="btn">View My Certifications</a>
  </div>
</section>

<section id="projects" class="projects">
  <h2>My Certifications</h2>

  <div class="project">
    <div class="project-content">
      <img src="img/Dean Lister.png" alt="Capstone Project Screenshot" class="project-img small" onclick="openModal(this.src)">
      <div>
        <h3>📚 Dean Lister Batch 2021-2022</h3>
        <p>
          <strong>Dean Lister</strong> I achieved this certificate from the Technological Institute of the Philippines (TIP) in appreciation of my steady academic performance and my maintenance of high grades throughout the 2021–2022 academic year.
        </p>
      </div>
    </div>
  </div>

  <div class="project">
    <div class="project-content">
      <img src="img/FreeCodeCamp_1.PNG" alt="Capstone Project Screenshot" class="project-img small" onclick="openModal(this.src)">
      <div>
        <h3>📚 FreeCodeCamp (Responsive Web Design)</h3>
        <p>
          <strong>Responsive Web Design:</strong> I received this certificate from freeCodeCamp for proving my expertise in front-end development, particularly in creating responsive layouts with HTML and designing user interfaces with CSS. I finished practical projects and activities during the course that improved my knowledge of responsive design principles, web structure, and styling.
      </div>
    </div>
  </div>
  <div class="project">
    <div class="project-content">
      <img src="img/CERTIFICATE-OF-COMPLETION_ALDAMA-ANGELO-IVAN-2_page-0001.jpg" alt="Capstone Project Screenshot" class="project-img small" onclick="openModal(this.src)">
      <div>
        <h3>📚 OJT Certifications Completion CMAI (Consumer and Market Insights)</h3>
        <p>
          <strong>CMAI (Consumer and Market Insights)</strong> Using PHP and the CodeIgniter framework, I was required to create a Movie Catalog web application as part of my On-the-Job Training (OJT). This project improved my knowledge of dynamic web development and data management by integrating a backend database and putting the entire CRUD process—Create, Read, Update, and Delete—into practice. Additionally, I developed my ability to use MVC architecture concepts, structure database schemas, and create user interfaces that are easy to use. I improved my problem-solving abilities and gained experience working effectively with real-world development tools and environments thanks to this practical project.
        </p>
      </div>
    </div>
  </div>
  <div class="project">
    <div class="project-content">
      <img src="img/Business Model.jpg" alt="Capstone Project Screenshot" class="project-img small" onclick="openModal(this.src)">
      <div>
        <h3>📚 CertiPRof (Business Model Canvas Essentials)</h3>
        <p>
          <strong>BMCEPC:</strong> This accreditation was obtained while pursuing a Bachelor of Science in Information Systems (BSIS) degree at the Technological Institute of the Philippines. The purpose of the course requirement was to improve our comprehension of business models and how they are used in actual information systems. I learned a lot about how companies generate, deliver, and capture value thanks to this certification. Additionally, it helped me comprehend how technology and business strategy interact, which equipped me to evaluate and create efficient systems that support organizational objectives.
        </p>
      </div>
    </div>
  </div>
  <div class="project">
    <div class="project-content">
      <img src="img/Video Editing Requirements.jpeg" alt="Capstone Project Screenshot" class="project-img small" onclick="openModal(this.src)">
      <div>
        <h3>📚 CIIT (Video Editing & Special Effects)</h3>
        <p>
          <strong>Video Editing & Special Effects</strong> Since I started doing vlogs and experimenting with my own special effects in 2020, I have been passionate about video editing, which is shown in this qualification. I liked experimenting with imaginative visual storytelling and video editing. I made the decision to enroll in formal training at CIIT in order to hone my abilities, concentrating on video editing with Adobe Premiere Pro and After Effects. I gained extensive knowledge of editing, transitions, motion graphics, and visual effects during the training. My technical skills were enhanced by this experience, which also increased my creativity and stoked my passion in multimedia production.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Modal HTML -->
<div id="myModal" class="modal" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImg">
</div>
</body>
</main>
<?php include 'includes/footer.php'; ?>
