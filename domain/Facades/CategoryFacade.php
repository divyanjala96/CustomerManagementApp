<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;


class CategoryFacade extends Facade
{
    //calling to category service
    protected static function getFacadeAccessor()
    {
        return 'domain\Category\CategoryService';
    }
}
?>