<?php declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, ['header' => 'Copyright (c) Billie GmbH

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.', 'separate' => 'bottom', 'location' => 'after_declare_strict', 'comment_type' => 'comment']);

    $ecsConfig->paths([
        __DIR__ . '/src'
    ]);
};
