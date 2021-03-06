<?php

/**
 * This file is part of Bldr.io
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\DependencyInjection\Loader;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader as FileLoader;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class XmlFileLoader extends FileLoader
{
    use SupportsTrait;
}
