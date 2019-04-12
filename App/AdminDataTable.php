<?php

namespace App;

class AdminDataTable
{
    /**
     * @var iterable $models
     */
    protected $models;
    
    /**
     * @var callable[] $functions
     */
    protected $functions;
    
    /**
     * AdminDataTable constructor.
     * @param iterable $models
     * @param callable[] $functions
     */
    public function __construct(iterable $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }
    
    /**
     * @return \Generator
     */
    public function elements(): \Generator
    {
        foreach ($this->models as $model) {
            foreach ($this->functions as $function) {
                yield $function($model);
            }
        }
    }
    
    /**
     * @param string $template
     * @return string
     */
    public function render(string $template): string
    {
        $view = new View();
        $view->dataTable = $this;
        return $view->render($template);
    }
}
