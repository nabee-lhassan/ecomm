<?php
// Agar pageTitle set nahi hai to filename se title bana do
if (!isset($pageTitle)) {
    $pageTitle = ucwords(str_replace('-', ' ', basename($_SERVER['PHP_SELF'], '.php')));
}

$words = explode(' ', $pageTitle);
$lastWord = array_pop($words);
?>

<!-- =========================================
Breadcrumb / Page Hero
========================================= -->

<section class="relative pt-40 pb-20 overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-600/10 via-transparent to-transparent"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

        <!-- Breadcrumb -->
        <div class="flex items-center justify-center gap-2 text-sm text-gray-400 mb-6">
            <a href="index.php" class="hover:text-blue-400 transition">
                Home
            </a>

            <i class="fa-solid fa-chevron-right text-xs"></i>

            <span class="text-white">
                <?php echo htmlspecialchars($pageTitle); ?>
            </span>
        </div>

        <!-- Page Title -->
        <h1 class="font-display font-extrabold text-3xl md:text-4xl lg:text-5xl leading-tight text-white mb-6 text-center">
            <?php echo implode(' ', $words); ?>
            <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                <?php echo htmlspecialchars($lastWord); ?>
            </span>
        </h1>

        <!-- Description -->
        <p class="max-w-3xl mx-auto text-center text-gray-400 mt-6 text-lg leading-8">
            We help brands launch, manage, optimize, and scale their business with proven
            strategies, marketplace expertise, and dedicated account management.
        </p>

    </div>
</section>