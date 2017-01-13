<?php

class Benchmark
{
    public function run($runCount = 4000)
    {
        $functions = array("acosh", "asinh", "cos", "log", "log1p", "log10", "sin", "sqrt", "tan");

        for ($i = 0; $i < $runCount; $i++) {
            foreach ($functions as $function) {
                call_user_func_array($function, array($i));
            }
        }
    }
}