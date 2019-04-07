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
    public function __construct($models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }
    
    /**
     * @return \Generator
     */
    public function render(): \Generator
    {
        foreach ($this->models as $model) {
            foreach ($this->functions as $function) {
                yield $function($model);
            }
        }
    }
}
