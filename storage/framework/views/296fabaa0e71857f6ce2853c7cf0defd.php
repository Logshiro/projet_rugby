<?php $__env->startSection('title', 'Contact — AOL Rugby'); ?>
<?php $__env->startSection('meta_description', "Contactez l'AOL Rugby : 122 Chem. de Saltgourde, 24000 Périgueux, téléphone, email et formulaire de contact pour rejoindre le club ou poser vos questions."); ?>

<?php $__env->startSection('content'); ?>

<header class="page-header">
    <div class="container">
        <p class="eyebrow">Contact</p>
        <h1>Parlons rugby</h1>
        <p>Une question sur l'inscription, un partenariat ou juste envie de passer au club ? Écrivez-nous.</p>
    </div>
</header>

<section class="section">
    <div class="container">
        <div class="contact-grid">

            
            <div class="contact-card">

                <?php if(session('success')): ?>
                    <div class="alert alert--success" role="status">
                        <span aria-hidden="true">✓</span>
                        <span><?php echo e(session('success')); ?></span>
                    </div>
                <?php endif; ?>

                <?php if($errors->any()): ?>
                    <div class="alert alert--error" role="alert">
                        <span aria-hidden="true">!</span>
                        <span>Merci de corriger les champs signalés ci-dessous avant d'envoyer le formulaire.</span>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('contact.send')); ?>" novalidate>
                    <?php echo csrf_field(); ?>

                    <div class="form-row">
                        <div class="field <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="nom">Nom <span class="required">*</span></label>
                            <input
                                type="text"
                                id="nom"
                                name="nom"
                                value="<?php echo e(old('nom')); ?>"
                                required
                                autocomplete="name"
                                aria-describedby="<?php echo e($errors->has('nom') ? 'nom-error' : ''); ?>"
                            >
                            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error-msg" id="nom-error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="field <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label for="email">Email <span class="required">*</span></label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                required
                                autocomplete="email"
                                aria-describedby="<?php echo e($errors->has('email') ? 'email-error' : ''); ?>"
                            >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error-msg" id="email-error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="field <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label for="telephone">Téléphone</label>
                        <input
                            type="tel"
                            id="telephone"
                            name="telephone"
                            value="<?php echo e(old('telephone')); ?>"
                            autocomplete="tel"
                        >
                        <small class="hint">Facultatif — utile si vous préférez qu'on vous rappelle.</small>
                    </div>

                    <div class="field <?php $__errorArgs = ['sujet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label for="sujet">Sujet <span class="required">*</span></label>
                        <select id="sujet" name="sujet" required>
                            <option value="" <?php echo e(old('sujet') ? '' : 'selected'); ?> disabled>Choisissez un sujet</option>
                            <option value="inscription" <?php echo e(old('sujet') == 'inscription' ? 'selected' : ''); ?>>Inscription / essai</option>
                            <option value="benevolat" <?php echo e(old('sujet') == 'benevolat' ? 'selected' : ''); ?>>Bénévolat</option>
                            <option value="partenariat" <?php echo e(old('sujet') == 'partenariat' ? 'selected' : ''); ?>>Partenariat / sponsoring</option>
                            <option value="presse" <?php echo e(old('sujet') == 'presse' ? 'selected' : ''); ?>>Presse</option>
                            <option value="autre" <?php echo e(old('sujet') == 'autre' ? 'selected' : ''); ?>>Autre</option>
                        </select>
                        <?php $__errorArgs = ['sujet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="error-msg"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="field <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea
                            id="message"
                            name="message"
                            required
                            aria-describedby="<?php echo e($errors->has('message') ? 'message-error' : ''); ?>"
                        ><?php echo e(old('message')); ?></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="error-msg" id="message-error"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div style="position:absolute; left:-9999px;" aria-hidden="true">
                        <label for="site_web">Ne pas remplir</label>
                        <input type="text" id="site_web" name="site_web" tabindex="-1" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                </form>
            </div>

            
            <aside class="info-card" aria-label="Coordonnées du club">
                <h3>Coordonnées</h3>
                <ul class="info-list">
                    <li>
                        <span class="ico" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" stroke="#fff" stroke-width="1.4"/><path d="M8 15s5-4.2 5-8a5 5 0 10-10 0c0 3.8 5 8 5 8z" stroke="#fff" stroke-width="1.4"/></svg>
                        </span>
                        <span>
                            <span class="label">Adresse</span>
                            <span class="value">Stade municipal — 122 Chem. de Saltgourde, 24000 Périgueux</span>
                        </span>
                    </li>
                    <li>
                        <span class="ico" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 3l3 1 1 3-1.5 1.5A9 9 0 009.5 11.5L11 10l3 1v3a1 1 0 01-1 1C6.7 15 1 9.3 1 2.9 1 2.4 1.4 2 2 2h1z" stroke="#fff" stroke-width="1.2"/></svg>
                        </span>
                        <span>
                            <span class="label">Téléphone</span>
                            <a class="value" href="tel:+330670121022">06 70 12 10 22</a>
                        </span>
                    </li>
                    <li>
                        <span class="ico" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 4h12v8H2V4z" stroke="#fff" stroke-width="1.2"/><path d="M2 4l6 5 6-5" stroke="#fff" stroke-width="1.2"/></svg>
                        </span>
                        <span>
                            <span class="label">Email</span>
                            <a class="value" href="mailto:contact@aol-rugby.fr">contact@aol-rugby.fr</a>
                        </span>
                    </li>
                </ul>

                <div class="social-row">
                    <a href="https://www.facebook.com/AOLRUGBYPERIGUEUX/?locale=fr_FR" aria-label="AOL Rugby sur Facebook" target="_blank" rel="noopener">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10.5 2H9a3 3 0 00-3 3v1.5H4.5V9H6v5h2.5V9h1.9l.3-2.5H8.5V5c0-.4.3-.7.7-.7h1.3V2z" fill="#fff"/></svg>
                    </a>
                    <a href="https://www.instagram.com/aolrugbyperigueux/" aria-label="AOL Rugby sur Instagram" target="_blank" rel="noopener">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="3" stroke="#fff" stroke-width="1.2"/><circle cx="8" cy="8" r="2.6" stroke="#fff" stroke-width="1.2"/><circle cx="11.3" cy="4.7" r="0.7" fill="#fff"/></svg>
                    </a>
                </div>

                <div class="map-embed">
                    <iframe
                        title="122 Chem. de Saltgourde, 24000 Périgueux"
                        src="https://www.google.com/maps?q=122+Chem.+de+Saltgourde,+24000+Périgueux&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/contact.blade.php ENDPATH**/ ?>