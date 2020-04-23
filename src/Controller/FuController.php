<?php

namespace Drupal\fu_light\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FuController.
 */
class FuController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  // public function hello($name) {
  //   return [
  //     '#type' => 'markup',
  //     '#markup' => $this->t('Implement method: hello with parameter(s): %name', ['%name' => $name]),
  //   ];
  // }
  public function hello($name) {
 
    return [
      '#theme' => 'fu_light',
      '#test_var' => $this->t('Test Value') . ' ' . $name,
      '#route_var' => $name . ' asd'
    ];
 
  }
}

