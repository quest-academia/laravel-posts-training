<?php

function register()
    {
        \Schema::defaultStringLength(20);
    }

    
    public function boot()
    {
        \Schema::defaultStringLength();
    }

?>