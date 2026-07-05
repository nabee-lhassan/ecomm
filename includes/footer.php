<!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
<footer class="py-16 px-6 lg:px-16 relative z-10 border-t border-white/5">
  <div class="max-w-6xl mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

      <!-- Brand -->
      <div class="lg:col-span-1">
        <a href="#" class="font-display font-bold text-2xl text-white flex items-center gap-2 mb-4">
          <span class="w-8 h-8 rounded-lg btn-glow flex items-center justify-center text-sm">T</span>
          Tech Aura <span class="grad-text">Digitals</span>
        </a>
        <p class="font-body text-slate-500 text-sm leading-relaxed mb-5">
          Your full-service ecommerce growth partner — from store setup to full automation.
        </p>
        <div class="flex gap-3">
          <a href="#" class="w-8 h-8 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-[#009af7] text-sm transition-colors">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="#" class="w-8 h-8 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-[#009af7] text-sm transition-colors">
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
          <a href="#" class="w-8 h-8 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-[#009af7] text-sm transition-colors">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
          <a href="#" class="w-8 h-8 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-[#009af7] text-sm transition-colors">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>

      <!-- Company Links -->
      <div>
        <h4 class="font-display font-semibold text-white text-sm mb-5">Company</h4>
        <ul class="space-y-3 text-sm font-body text-slate-500">
          <li><a href="<?php echo BASE_URL; ?>about.php" class="hover:text-[#009af7] transition-colors">About Us</a></li>
          <li><a href="<?php echo BASE_URL; ?>case-studies.php" class="hover:text-[#009af7] transition-colors">Case Studies</a></li>
          <li><a href="<?php echo BASE_URL; ?>pricing.php" class="hover:text-[#009af7] transition-colors">Pricing</a></li>
          <li><a href="<?php echo BASE_URL; ?>contact.php" class="hover:text-[#009af7] transition-colors">Contact</a></li>
        </ul>
      </div>

      <!-- Services Links -->
      <div>
        <h4 class="font-display font-semibold text-white text-sm mb-5">Services</h4>
        <ul class="space-y-3 text-sm font-body text-slate-500">
          <li><a href="<?php echo BASE_URL; ?>services/business.php" class="hover:text-[#009af7] transition-colors">Business Services</a></li>
          <li><a href="<?php echo BASE_URL; ?>services/growth.php" class="hover:text-[#009af7] transition-colors">Growth Services</a></li>
          <li><a href="<?php echo BASE_URL; ?>services/recovery.php" class="hover:text-[#009af7] transition-colors">Recovery Services</a></li>
          <li><a href="<?php echo BASE_URL; ?>services/store-operations.php" class="hover:text-[#009af7] transition-colors">Store Operations</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="font-display font-semibold text-white text-sm mb-5">Contact</h4>
        <ul class="space-y-3 text-sm font-body text-slate-500">
          <li class="flex items-start gap-2">
            <i class="fa-solid fa-envelope text-[#0072eb] mt-0.5 text-xs"></i>
            hello@techauradials.com
          </li>
          <li class="flex items-start gap-2">
            <i class="fa-solid fa-phone text-[#0072eb] mt-0.5 text-xs"></i>
            +1 (888) 123-4567
          </li>
          <li class="flex items-start gap-2">
            <i class="fa-solid fa-location-dot text-[#0072eb] mt-0.5 text-xs"></i>
            1234 Commerce Ave,<br/>New York, NY 10001
          </li>
          <li class="flex items-center gap-2 mt-1">
            <span class="w-2 h-2 rounded-full bg-green-400 pulse-dot"></span>
            <span class="text-green-400 text-xs">Available for new clients</span>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="section-line mb-6"></div>
    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-xs font-body text-slate-600">
      <span>© 2025 Tech Aura Digitals. All rights reserved.</span>
      <div class="flex gap-5">
        <a href="<?php echo BASE_URL; ?>privacypolicy.php" class="hover:text-[#009af7] transition-colors">Privacy Policy</a>
        <a href="<?php echo BASE_URL; ?>terms.php" class="hover:text-[#009af7] transition-colors">Terms of Service</a>
      </div>
    </div>

  </div>
</footer>


<!-- ═══════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════ -->
<script>
  // ── AOS Init ──
  AOS.init({
    duration: 700,
    easing: 'ease-out-cubic',
    once: true,
    offset: 60,
  });

  // ── Navbar scroll class ──
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // ── Mobile menu toggle ──
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
  // Close mobile menu on link click
  mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
  });

  // ── Testimonial Slider ──
  const track = document.getElementById('testimonial-track');
  const dots = document.querySelectorAll('.dot');
  let current = 0;
  const total = 3;

  function goToSlide(index) {
    current = index;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((dot, i) => {
      dot.classList.toggle('bg-[#0072eb]', i === current);
      dot.classList.toggle('bg-slate-700', i !== current);
      dot.classList.toggle('w-5', i === current);
      dot.classList.toggle('w-2', i !== current);
    });
  }

  document.getElementById('next-btn').addEventListener('click', () => {
    goToSlide((current + 1) % total);
  });
  document.getElementById('prev-btn').addEventListener('click', () => {
    goToSlide((current - 1 + total) % total);
  });
  dots.forEach(dot => {
    dot.addEventListener('click', () => goToSlide(+dot.dataset.index));
  });

  // Auto-advance testimonials
  setInterval(() => goToSlide((current + 1) % total), 5000);
</script>

</body>
</html>