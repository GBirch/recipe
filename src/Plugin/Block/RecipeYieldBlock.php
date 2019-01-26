<?php

namespace Drupal\recipe\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Access\AccessResultForbidden;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

/**
 * Provides a 'RecipeYieldBlock' block.
 *
 * @Block(
 *  id = "recipe_yield_block",
 *  admin_label = @Translation("Recipe Yield block"),
 *  category = @Translation("Recipe"),
 *  context = {
 *    "node" = @ContextDefinition("entity:node", required = TRUE, label = @Translation("Node")),
 *  }
 * )
 */
class RecipeYieldBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $recipe_node = $this->getContextValue('node');
    $build = [];
//    $build['foo'] = ['#markup' => 'HIYA FRIEND'];
    $build['form'] = \Drupal::formBuilder()->getForm('Drupal\recipe\Form\RecipeYieldForm', $recipe_node);

    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Don't cache this block - we need the form updates.
   */
  public function getCacheMaxAge() {
    return 0;
  }

  /**
   * Denies access if node is not a recipe.
   *
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    /** @var Node $node */
    $node = $this->getContextValue('node');
    if (!$node || 'recipe' !== $node->getType()) {
      return AccessResult::forbidden();
    }
    return parent::blockAccess($account);
  }

}
