<?php
namespace FacturationPro\Query;

class Categories {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    	if(!isset($this->master->firm))
    		throw new Error('You must provide a firm id');
    }
}
?>