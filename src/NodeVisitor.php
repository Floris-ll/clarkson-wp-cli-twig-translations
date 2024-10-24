<?php

namespace Clarkson\WPCLITwigTranslations;

use Twig\Environment;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Node;
use Twig\NodeVisitor\NodeVisitorInterface;

class NodeVisitor implements NodeVisitorInterface {

    /**
     * Called before child nodes are visited.
     *
     * @return Node The modified node
     */
    public function enterNode(Node $node, Environment $env): Node {
        if($node instanceof NameExpression){
            $node->setAttribute('always_defined', true);
        }
        return $node;
	}

	/**
     * Called after child nodes are visited.
     *
     * @return Node|null The modified node or null if the node must be removed
     */
    public function leaveNode(Node $node, Environment $env): ?Node {
		return $node;
	}

    public function getPriority() {
        return 255;
    }
}
