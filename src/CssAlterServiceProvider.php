<?php
/**
 * @file
 * Contains Drupal\css_alter\CssAlterServiceProvider
 */

namespace Drupal\css_alter;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Modifies the language manager service.
 */
class CssAlterServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {

    $definition = $container->getDefinition('asset.css.collection_renderer');
    $definition->setClass('Drupal\css_alter\CssAlterCssCollectionRenderer');

  }
}
