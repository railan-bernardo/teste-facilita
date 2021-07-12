<?php


namespace Source\Core;


/**
 * Class Controller
 * @package Source\Core
 */
class Controller
{
    /**
     * @var View
     */
    protected $view;

    /**
     * Controller constructor.
     * @param string|null $pathToView
     */
    public function __construct(string $pathToView = null)
  {
      $this->view = new View($pathToView);
  }
}