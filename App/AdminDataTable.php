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
        
        $dataTableArray = [];
        foreach ($this->models as $model) {
            $tempArray = [];
            foreach ($this->functions as $function) {
                $tempArray[] = $function($model);
            }
            $dataTableArray[] = $tempArray;
        }
        
        $view->dataTableArray = $dataTableArray;
        return $view->render($template);
    }
}
