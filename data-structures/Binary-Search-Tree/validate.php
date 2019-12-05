<?php

class TreeNode
{
    /** @var int|null  */
    public $val = null;

    /** @var TreeNode|null  */
    public $left = null;

    /** @var TreeNode|null  */
    public $right = null;

    public function __construct(int $value)
    {
        $this->val = $value;
    }
}

/**
 * Validate Binary Search Tree Class
 *
 * Given a binary tree, determine if it is a valid binary search tree (BST).
 *
 * Assume a BST is defined as follows:
 *   - The left subtree of a node contains only nodes with keys less than the node's key.
 *   - The right subtree of a node contains only nodes with keys greater than the node's key.
 *   - Both the left and right subtrees must also be binary search trees.
 */
class Validate
{
    /**
     * @param TreeNode|null $root
     * @return bool
     */
    public function isValidBST(?TreeNode $root): bool
    {
        return $this->validateNode($root, null, null);
    }

    private function validateNode(?TreeNode $node, $lowLimit, $upLimit)
    {
        if (is_null($node)) {
            return true;
        }

        if (!is_null($lowLimit) && $node->val <= $lowLimit) {
            return false;
        }
        if (!is_null($upLimit) && $node->val >= $upLimit) {
            return false;
        }

        if (! $this->validateNode($node->left, $lowLimit, $node->val)) {
            return false;
        }
        if (! $this->validateNode($node->right, $node->val, $upLimit)) {
            return false;
        }

        return true;
    }
}
