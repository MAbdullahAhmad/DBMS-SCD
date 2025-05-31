
<?php

class Controller {
  public function render($view, $data = []) {

    // Validate View
    $viewFile = __DIR__ . "/../app/views/" . $view . ".php";
    if (!file_exists($viewFile)) {
      echo "View not found: $viewFile";
      return;
    }

    // Extract data to variables
    if (!empty($data)) {
      extract($data);
    }

    // Render
    include $viewFile;
  }
}
