<?php

namespace Drupal\fu_light\Ajax;

use Drupal\Core\Ajax\CommandInterface;

/**
 * Class fuAjaxCommand.
 */
class fuAjaxCommand implements CommandInterface {

  /**
   * Render custom ajax command.
   *
   * @return ajax
   *   Command function.
   */
  public function render() {
    return [
      'command' => 'hello',
      'message' => 'My Awesome Message',
    ];
  }

}
