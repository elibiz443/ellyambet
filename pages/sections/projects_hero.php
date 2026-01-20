<section class="relative pt-32 pb-24 px-6 bg-[url('../../assets/images/bg.webp')] bg-cover bg-fixed overflow-hidden">
  
  <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#6366f1]/10 blur-[120px] rounded-full"></div>

  <div class="container mx-auto grid lg:grid-cols-12 gap-16 items-center">
    
    <div class="lg:col-span-6 space-y-8">
      <nav class="flex items-center space-x-3 text-xs font-bold uppercase tracking-[0.3em] text-slate-500">
        <a href="<?php echo ROOT_URL; ?>" class="hover:text-[#6366f1] transition-all">Home</a>
        <span class="text-slate-800 text-lg">/</span>
        <span class="text-white">Selected Works</span>
      </nav>

      <div class="space-y-4">
        <span class="inline-block py-1 px-3 rounded-md bg-white/5 border border-white/10 text-slate-400 text-[10px] font-bold tracking-[0.2em] uppercase">
          Portfolio
        </span>
        <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-wide">
          Engineered <br>
          <span class="text-[#6366f1]">Impact.</span>
        </h1>
      </div>

      <p class="text-xl text-slate-400 max-w-lg leading-relaxed border-l-2 border-[#6366f1] pl-6">
        A curated showcase of <span class="text-white">SaMD platforms</span>, 
        cloud-native architectures, and digital transformations where 
        code meets strict regulatory standards.
      </p>

      <div class="flex flex-wrap gap-3">
        <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-lg text-xs font-mono text-indigo-300">#AWS_Cloud</span>
        <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-lg text-xs font-mono text-indigo-300">#HIPAA_Logic</span>
        <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-lg text-xs font-mono text-indigo-300">#Microservices</span>
      </div>
    </div>

    <div class="lg:col-span-6 relative h-[500px] hidden lg:flex items-center justify-center">
      <div class="absolute transform -translate-x-12 -translate-y-12 rotate-[-6deg] w-72 h-96 bg-slate-800/40 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden opacity-50 transition-all hover:rotate-0 hover:translate-x-0 hover:z-30 duration-700">
        <img src="<?php echo ROOT_URL; ?>/assets/images/pic6.webp" class="w-full h-full object-cover grayscale" alt="">
      </div>
      
      <div class="absolute transform translate-x-4 translate-y-4 rotate-[3deg] w-72 h-96 bg-slate-800/40 backdrop-blur-md border border-white/20 rounded-2xl overflow-hidden shadow-2xl transition-all hover:rotate-0 hover:translate-x-0 hover:z-30 duration-700">
        <img src="<?php echo ROOT_URL; ?>/assets/images/pic5.webp" class="w-full h-full object-cover" alt="">
      </div>

      <div class="absolute bottom-10 -right-4 w-64 p-6 glass border border-[#6366f1]/30 rounded-2xl shadow-[0_20px_50px_rgba(99,102,241,0.2)] animate-bounce-slow">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-3 h-3 rounded-full bg-red-500"></div>
          <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
          <div class="w-3 h-3 rounded-full bg-green-500"></div>
        </div>
        <div class="space-y-2">
          <div class="h-2 w-full bg-[#6366f1]/20 rounded"></div>
          <div class="h-2 w-4/5 bg-[#6366f1]/20 rounded"></div>
          <div class="h-2 w-full bg-[#6366f1]/40 rounded"></div>
        </div>
        <div class="mt-4 text-[10px] font-mono text-indigo-400">STATUS: DEPLOYED</div>
      </div>
    </div>

  </div>
</section>
