<?php

namespace App;

use App\Models\Model;

class AdminDataTable
{
    /**
     * @var Model[] $models
     */
    protected $models;
    
    /**
     * @return Model[]
     */
    public function getModels(): array
    {
        return $this->models;
    }
    
    /**
     * @return callable[]
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }
    
    /**
     * @var callable[] $functions
     */
    protected $functions;
    
    /**
     * AdminDataTable constructor.
     * @param Model[] $models
     * @param callable[] $functions
     */
    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }
    
    /**
     * @param string $template
     * @return string
     */
    public function render(string $template): string
    {
        $view = new View();
        $view->dataTableObj = $this;
        return $view->render($template);
    }
}
