<?php

if (function_exists('dd_if')) {
    /**
     * @param  mixed $value
     * @param  Closure|bool $condition
     * @return void
     */
    function dd_if($value, $condition)
    {
        if ($condition instanceof \Closure) {
            $condition = $condition($value);
        }

        if ($condition) {
            dd($value);
        }
    }
}

if (function_exists('dump_until')) {
    /**
     * @param  mixed $value
     * @param  Closure|bool $condition
     * @return void
     */
    function dump_until($value, $condition)
    {
        dump($value);

        if ($condition instanceof \Closure) {
            $condition = $condition($value);
        }

        if ($condition) {
            die;
        }
    }
}
