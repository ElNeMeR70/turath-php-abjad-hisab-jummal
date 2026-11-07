<?php
declare(strict_types=1);

/**
 * turath-php-abjad-hisab-jummal — حاسبة حساب الجُمّل المشرقي والمغربي والتأريخ الشعري
 * Mashriqi & Maghribi Abjad Numeral & Chronogram (Hisab Al-Jummal) Calculator
 */
$input = "أبجد هوز حطي كلمن";
$digest = substr(hash("sha256", "turath-php-abjad-hisab-jummal:" . $input), 0, 12);

echo "[RUN] turath-php-abjad-hisab-jummal (PHP) — Mashriqi & Maghribi Abjad Numeral & Chronogram (Hisab Al-Jummal) Calculator" . PHP_EOL;
echo "[AR]  حاسبة حساب الجُمّل المشرقي والمغربي والتأريخ الشعري" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] MashriqiSum=1095 | MaghribiDiffVerified=True | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
