<?php

class Benchmark
{
    public function run($runCount = 2500)
    {
        $functions = array("abs", "acos", "asin", "atan", "floor", "exp", "sin", "tan", "sqrt");

        for ($i = 0; $i < $runCount; $i++) {
            foreach ($functions as $function) {
				call_user_func_array($function, array($i));
            }
        }
    }
}

$benchmark = new Benchmark();

$benchmark->run();