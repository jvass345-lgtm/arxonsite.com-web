<?php
/** Obchodné a licenčné podmienky (SK / HU / EN). Texty: inc/legal/terms.php */
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
require __DIR__ . '/inc/legal.php';
web_start();
page_open('podmienky.php', t('terms'));
legal_render('terms', t('terms'));
page_close();
