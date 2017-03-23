<?php
class Model {
  public $templist;

  public function __construct() {
    $this->templist = array(12, 14, 26);
  }
}

class View {
  private $model;
  public $templist;

  public function __construct(Model $model) {
    $this->model = $model;
    $this->templist = $this->gettemplist();
  }

  public function gettemplist() {
    return $this->model->templist;
  }
}

class Controller {
  private $model;

  public function __construct(Model $model) {
    $this->model = $model;
  }

  public function enterdata() {
    echo "data entered";
    $temp = htmlentities($_GET['temp']);
    $this->model->templist[] = $temp;
    $view->templist = $view->gettemplist();
  }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($model);
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  echo $action;
  echo "action set";
  $controller->{$action}();
}
// if (isset($_GET['action'])) $controller->{$_GET['action']}();
?>
