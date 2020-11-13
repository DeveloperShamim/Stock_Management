<?php

require_once "koolreport\load.koolreport.php";


use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;

class SakilaRental extends KoolReport
{
    function settings()
    {
        return array(
            "dataSources"=>array(
                "sakila_rental"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=stock",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                ),
            )
        ); 
    }    
    protected function setup()
    {
        $this->src('sakila_rental')
        ->query("SELECT order_date,grand_total FROM orders")
        ->pipe(new TimeBucket(array(
            "order_date"=>"month"
        )))
        ->pipe(new Group(array(
            "by"=>"order_date",
            "sum"=>"grand_total"
        )))
        ->pipe($this->dataStore('sale_by_month'));

    } 
}