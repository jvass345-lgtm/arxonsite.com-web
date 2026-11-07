<?php
/** Zásady ochrany osobných údajov (SK / HU / EN). Texty: inc/legal/privacy.php */
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
require __DIR__ . '/inc/legal.php';
web_start();
page_open('sukromie.php', t('privacy'));
legal_render('privacy', t('privacy'));
page_close();
