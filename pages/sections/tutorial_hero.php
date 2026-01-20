<section class="relative pt-32 pb-24 px-6 bg-[url('../../assets/images/bg.webp')] bg-cover bg-center overflow-hidden">
  
  <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-size: 40px 40px; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px);">
  </div>

  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#6366f1]/5 blur-[120px] rounded-full pointer-events-none"></div>

  <div class="container mx-auto relative z-10">
    <div class="flex flex-col items-center text-center">
      
      <nav class="flex items-center space-x-3 text-xs font-bold uppercase tracking-[0.3em] text-slate-500 mb-10">
        <span class="w-2 h-2 rounded-full bg-[#6366f1] animate-pulse"></span>
        <a href="<?php echo ROOT_URL; ?>" class="hover:text-[#6366f1] transition-all">Home</a>
        <span class="text-slate-800 text-lg">/</span>
        <span class="text-white">Guides & Tutorials</span>
      </nav>

      <div class="relative inline-block mb-8">
        <div class="absolute -top-10 left-1/2 -translate-x-1/2 px-3 py-1 bg-[#6366f1] text-white text-[10px] font-black uppercase tracking-tighter rounded-sm">
          Masterclass Series
        </div>
        
        <h1 class="text-6xl md:text-9xl font-black text-white leading-none uppercase italic">
          Decode <br>
          <span class="text-transparent" style="-webkit-text-stroke: 1px rgba(99, 102, 241, 0.5);">Complexity.</span>
        </h1>
      </div>

      <div class="max-w-2xl relative">
        <div class="absolute -left-8 top-0 text-[#6366f1] font-mono opacity-40 hidden md:block">&lt;lesson&gt;</div>
        <p class="text-xl text-slate-400 leading-relaxed font-light px-4">
          Deep dives into <span class="text-white font-medium">SaMD architecture</span>, 
          automated compliance, and senior-level engineering patterns. 
          No fluff—just pure, executable knowledge.
        </p>
        <div class="absolute -right-8 bottom-0 text-[#6366f1] font-mono opacity-40 hidden md:block">&lt;/lesson&gt;</div>
      </div>

      <div class="mt-16 flex flex-wrap justify-center gap-4">
        <div class="glass border border-white/5 p-1 rounded-full flex space-x-1">
          <button class="px-6 py-2 rounded-full bg-[#6366f1] text-white text-xs font-bold uppercase tracking-widest transition-all">All</button>
          <button class="px-6 py-2 rounded-full hover:bg-white/5 text-slate-400 text-xs font-bold uppercase tracking-widest transition-all">Cloud</button>
          <button class="px-6 py-2 rounded-full hover:bg-white/5 text-slate-400 text-xs font-bold uppercase tracking-widest transition-all">Regulatory</button>
          <button class="px-6 py-2 rounded-full hover:bg-white/5 text-slate-400 text-xs font-bold uppercase tracking-widest transition-all">DevOps</button>
        </div>
      </div>

      <div class="mt-20 w-px h-24 bg-gradient-to-b from-[#6366f1] via-indigo-500/20 to-transparent"></div>
    </div>
  </div>
</section>
