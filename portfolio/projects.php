<?php include 'includes/header.php'; ?>
<?php
$projects = [
  [
    'title' => 'SWIFT SCAN: Inventory Management System',
    'desc' => 'A LAN-based barcode and RFID inventory system using FIFO/LIFO with data analytics for efficient tracking across warehouse and retail levels.'
  ],
  [
    'title' => 'Movie Catalog CRUD App',
    'desc' => 'A web-based PHP/MySQL application that allows users to create, read, update, and delete movie records in a searchable catalog interface.'
  ],
];
?>
<body>
<main>
<section class="projects">
  <h2>My Projects</h2>
  <ul>
    <?php foreach ($projects as $project): ?>
      <li>
        <h3><?= $project['title']; ?></h3>
        <p><?= $project['desc']; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
</body>
</main>
<?php include 'includes/footer.php'; ?>
