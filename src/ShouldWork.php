<?php

namespace TestRepo;

use PhpParser\NodeTraverser;

class ShouldWork extends NodeTraverser
{
    protected function traverseArray(array $nodes)
    {
        return [];
    }
}
