<?php

namespace Drupal\fu_light\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class FuLightSubscriber.
 */
class FuLightSubscriber implements EventSubscriberInterface {

  /**
   * Constructs a new FuLightSubscriber object.
   */
  public function __construct() {

  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events['kernel.view'] = ['kernelView'];

    return $events;
  }

  /**
   * This method is called when the kernel.view is dispatched.
   *
   * @param \Symfony\Component\EventDispatcher\Event $event
   *   The dispatched event.
   */
  public function kernelView(Event $event) {
    \Drupal::messenger()->addMessage('Event kernel.view thrown by Subscriber in module fu_light.', 'status', TRUE);
  }

}
