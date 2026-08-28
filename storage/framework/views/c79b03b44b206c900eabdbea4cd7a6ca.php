<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <title><?php echo $__env->yieldContent('title', 'AOL Rugby — Club de rugby officiel'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', "L'AOL Rugby est un club de rugby engagé, formateur et convivial. Découvrez le club, ses équipes et rejoignez-nous."); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#273387">

    
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AOL Rugby">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'AOL Rugby — Club de rugby officiel'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', "L'AOL Rugby est un club de rugby engagé, formateur et convivial."); ?>">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo e(asset('images/og-cover.jpg')); ?>">
    <meta name="twitter:card" content="summary_large_image">

    
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" sizes="any">
    <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/png">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,500;0,700;0,900;1,600&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/aol-rugby.css']); ?>

    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SportsClub",
        "name": "AOL Rugby",
        "sport": "Rugby",
        "url": "<?php echo e(url('/')); ?>",
        "logo": "<?php echo e(asset('images/logo.png')); ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Adresse du stade à compléter",
            "addressLocality": "Ville à compléter",
            "postalCode": "00000",
            "addressCountry": "FR"
        },
        "sameAs": [
            "https://www.facebook.com/",
            "https://www.instagram.com/"
        ]
    }
    </script>

    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body>
    <a href="#main" class="skip-link">Aller au contenu principal</a>

    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>