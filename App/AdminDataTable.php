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
    
    public function render(): void
    {
    
    }
}
