<?php
namespace domain\Facades; 
use Illuminate\Support\Facades\Facade; 

class ProductFacade extends Facade{ 

//calling to product service
    protected static function getFacadeAccessor()
    {
        return 'domain\Product\ProductService';
    }
    
}?>