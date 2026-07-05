  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS CDN -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <!-- Google Fonts: Syne + DM Sans -->
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>

  <!-- Local stylesheet -->
  <link rel="stylesheet" href="assets/style.css"/>

<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          display: ['Syne', 'sans-serif'],
          body: ['DM Sans', 'sans-serif'],
        },
        colors: {
          blue: {
            400: '#60a5fa',
            500: '#3b82f6',
            600: '#2563eb',
            700: '#1d4ed8',
            900: '#0b1b3a',
          },
          sky: {
            400: '#38bdf8',
            500: '#0ea5e9',
            600: '#0284c7',
          },
        },
      }
    }
  }
</script>


<?php 
define('BASE_URL', 'http://localhost/techauradigitals/');
?>


<!-- Ambient blobs -->
<div class="blob blob-1"></div>
<div class="blob blob-2"></div>
<div class="blob blob-3"></div>

<!-- ═══════════════════════════════════════
     NAVBAR
═══════════════════════════════════════ -->
<nav class="navbar py-4 px-6 lg:px-16" id="navbar">
  <div class="max-w-7xl mx-auto flex items-center justify-between">

    <!-- Logo -->
    <a href="#" class="font-display font-bold text-2xl text-white flex items-center gap-2">
      <span class="w-8 h-8 rounded-lg btn-glow flex items-center justify-center text-sm">T</span>
      <span>Tech Aura <span class="grad-text">Digitals</span></span>
    </a>

    <!-- Desktop Nav -->
    <ul class="hidden lg:flex items-center gap-8 text-sm font-body text-slate-300">
      <li><a href="<?php echo BASE_URL; ?>" class="hover:text-[#009af7] transition-colors">Home</a></li>
      <li><a href="<?php echo BASE_URL; ?>service.php" class="hover:text-[#009af7] transition-colors">Services</a></li>
      <li><a href="<?php echo BASE_URL; ?>case-studies.php" class="hover:text-[#009af7] transition-colors">Case Studies</a></li>
      <li><a href="<?php echo BASE_URL; ?>about.php" class="hover:text-[#009af7] transition-colors">About</a></li>
      <li><a href="<?php echo BASE_URL; ?>pricing.php" class="hover:text-[#009af7] transition-colors">Pricing</a></li>
    </ul>

    <!-- CTA -->
    <div class="flex items-center gap-3">
      <a href="<?php echo BASE_URL; ?>contact.php" class="hidden lg:inline-flex btn-glow text-white text-sm font-display font-semibold px-5 py-2.5 rounded-lg">
        Contact Us
      </a>
      <!-- Mobile menu toggle -->
      <button id="menu-toggle" class="lg:hidden text-slate-300 focus:outline-none">
        <i class="fa-solid fa-bars text-xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden lg:hidden glass mt-3 rounded-xl mx-2 p-4">
    <ul class="flex flex-col gap-3 text-sm text-slate-300 font-body">
      <li><a href="<?php echo BASE_URL; ?>services.php" class="block py-2 px-3 rounded-lg hover:bg-purple-900/30 hover:text-[#009af7]">Services</a></li>
      <li><a href="<?php echo BASE_URL; ?>case-studies.php" class="block py-2 px-3 rounded-lg hover:bg-purple-900/30 hover:text-[#009af7]">Case Studies</a></li>
      <li><a href="<?php echo BASE_URL; ?>about.php" class="block py-2 px-3 rounded-lg hover:bg-purple-900/30 hover:text-[#009af7]">About</a></li>
      <li><a href="<?php echo BASE_URL; ?>pricing.php" class="block py-2 px-3 rounded-lg hover:bg-purple-900/30 hover:text-[#009af7]">Pricing</a></li>
      <li><a href="<?php echo BASE_URL; ?>contact.php" class="block py-2 px-3 rounded-lg btn-glow text-white font-semibold text-center mt-1">Contact Us</a></li>
    </ul>
  </div>
</nav>
