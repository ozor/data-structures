<?php

class TreeNode
{
    public $val = null;

    public $left = null;
    public $right = null;

    public function __construct($value)
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
     * @param TreeNode $root
     * @return bool
     */
    public function isValidBST(TreeNode $root): bool
    {
        return false;
    }
}
