<?php
  require __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cookie Policy | Elly Ambet</title>
  <meta name="description" content="Cookie Policy for Elly Ambet." />

  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/favicon.webp" />
</head>
<body class="bg-[#0f172a] text-slate-300 selection:bg-[#6366f1]/30 max-w-full overflow-x-hidden">
  <?php include '../includes/header.php'; ?>

  <main class="min-h-screen">

    <section class="relative pt-32 pb-24 px-6 bg-[url('../../assets/images/bg.webp')] bg-cover bg-center overflow-hidden">
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-[#6366f1]/10 blur-[120px] rounded-full pointer-events-none"></div>

      <div class="container mx-auto relative z-10">
        <div class="flex flex-col items-center text-center space-y-8">

          <nav class="flex items-center space-x-3 text-xs font-bold uppercase tracking-[0.3em] text-slate-500 mb-4">
            <a href="<?php echo ROOT_URL; ?>" class="hover:text-[#6366f1] transition-all">Home</a>
            <span class="text-slate-800 text-lg">/</span>
            <span class="text-white">Cookie Policy</span>
          </nav>

          <h1 class="text-6xl md:text-8xl font-black text-white leading-none tracking-tight">
            Cookies.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#6366f1] via-indigo-400 to-[#6366f1] animate-gradient-x">
              Minimal & Purposeful.
            </span>
          </h1>

          <p class="text-xl text-slate-400 max-w-2xl leading-relaxed font-light">
            Cookies are used to optimize performance, enhance experience, and maintain system reliability.
          </p>

        </div>
      </div>
    </section>

    <section class="py-24">
      <div class="max-w-4xl mx-auto px-6 space-y-12 leading-relaxed">

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">What Are Cookies?</h2>
          <p>
            Cookies are small data files stored on your device when you visit a website. They help remember preferences and improve functionality.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">How Cookies Are Used</h2>
          <p>
            Cookies are used for essential functionality, analytics, and performance optimization. They do not collect personally identifiable information without consent.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">Managing Cookies</h2>
          <p>
            You can control or disable cookies through your browser settings. Disabling cookies may affect certain website features.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">Third-Party Cookies</h2>
          <p>
            Some integrated services may use third-party cookies. Their usage is governed by their respective privacy policies.
          </p>
        </div>

      </div>
    </section>

  </main>

  <?php include '../includes/footer.php'; ?>
  <?php include './includes/roll-to-top-button.php'; ?>
  
  <script src="<?php echo ROOT_URL; ?>/assets/js/main.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/header.js"></script>
</body>
</html>
