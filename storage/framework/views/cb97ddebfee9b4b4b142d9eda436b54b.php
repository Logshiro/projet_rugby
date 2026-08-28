<?php $__env->startSection('title', 'AOL Rugby — Club de rugby officiel'); ?>
<?php $__env->startSection('meta_description', "Bienvenue à l'AOL Rugby : un club formateur, familial et compétitif. Découvrez notre histoire, nos équipes et rejoignez la mêlée."); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <div class="container">
        <div class="hero__content">
            <p class="eyebrow">Club de rugby</p>
            <h1 class="hero__club">AOL<br><span>Rugby</span></h1>
            <p class="hero__tagline">
                Un club où l'engagement sur le terrain se prolonge dans les valeurs qu'on porte hors du terrain :
                le respect, la solidarité et la transmission, avec l'école de rugby et le loisir.
            </p>
            <a href="<?php echo e(route('presentation')); ?>" class="text-link">
                Découvrir le club
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                    <path d="M3 9h12M10 4l5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/home.blade.php ENDPATH**/ ?>