<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ServicesBlock' block.
 *
 * @Block(
 *  id = "services_block",
 *  admin_label = @Translation("Services block"),
 * )
 */
class ServicesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['services_block']['#markup'] = "Copyright Proj POSSE "  . date("Y");


    return $build;
  }

}
