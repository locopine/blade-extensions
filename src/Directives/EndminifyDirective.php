<?php
/**
 * Copyright (c) 2017. Robin Radic.
 *
 * The license can be found in the package and online at https://radic.mit-license.org.
 *
 * @copyright Copyright 2017 (c) Robin Radic
 * @license https://radic.mit-license.org The MIT License
 */

namespace Radic\BladeExtensions\Directives;

class EndminifyDirective extends Directive
{
    protected $replace = <<<'EOT'
$1<?php echo app("blade-extensions.helpers")->get('minifier')->close(); ?>
EOT;
}