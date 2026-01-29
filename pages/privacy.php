<?php
  require __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy | Elly Ambet</title>
  <meta name="description" content="Privacy Policy for Elly Ambet." />

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
            <span class="text-white">Privacy Policy</span>
          </nav>

          <h1 class="text-6xl md:text-8xl font-black text-white leading-none tracking-tight">
            Your Data.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#6366f1] via-indigo-400 to-[#6366f1] animate-gradient-x">
              Protected by Design.
            </span>
          </h1>

          <p class="text-xl text-slate-400 max-w-2xl leading-relaxed font-light">
            Transparency, security, and respect for your privacy are foundational principles behind every system built on this platform.
          </p>

        </div>
      </div>
    </section>

    <section class="py-24">
      <div class="max-w-4xl mx-auto px-6 space-y-12 leading-relaxed">

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">Information We Collect</h2>
          <p>
            We may collect personal information you voluntarily provide, including your name, email address, and any details submitted through contact forms. Non-personal data such as device type, browser information, and usage patterns may also be collected to improve performance and usability.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">How Information Is Used</h2>
          <p>
            Collected information is used to respond to inquiries, enhance user experience, improve system performance, and maintain platform security. Your personal data is never sold or shared with third parties except where legally required.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">Data Security</h2>
          <p>
            Appropriate technical and organizational measures are implemented to protect your information against unauthorized access, alteration, disclosure, or destruction.
          </p>
        </div>

        <div class="glass border border-white/10 rounded-2xl p-8 space-y-6">
          <h2 class="text-2xl font-bold text-white">Your Rights</h2>
          <p>
            You may request access, correction, or deletion of your personal data at any time by contacting us through this website.
          </p>
        </div>

      </div>
    </section>

  </main>

  <?php include '../includes/footer.php'; ?>
  <script src="<?php echo ROOT_URL; ?>/assets/js/main.js"></script>
</body>
</html>
