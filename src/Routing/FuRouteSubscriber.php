<?php

namespace Drupal\fu_light\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class FuRouteSubscriber.
 *
 * Listens to the dynamic route events.
 */
class FuRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
  }
}
