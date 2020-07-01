<?php

namespace TestRepo;

use PhpParser\NodeTraverser;

class ShouldNotWork extends NodeTraverser
{
    protected function traverseArray(array $nodes) : array
    {
        return [];
    }
}
