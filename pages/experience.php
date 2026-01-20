<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elly Ambet | Experience</title>
  <meta name="description" content="Elly Ambet is a Senior Software Developer & SaMD/IVD Compliance Architect with 10+ years experience." />

  <!-- CSS -->
  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- FAV and Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/favicon.webp" />
</head>
<body class="bg-[#0f172a] text-slate-300 selection:bg-[#6366f1]/30 max-w-full overflow-x-hidden">
  <?php include '../includes/header.php'; ?>

  <main class="min-h-screen">
    <?php include './sections/experience_hero.php'; ?>
    <?php include './sections/experience_section.php'; ?>
  </main>

  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/roll-to-top-button.php'; ?>

  <script src="<?php echo ROOT_URL; ?>/assets/js/main.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/counter.js"></script>
</body>
</html>