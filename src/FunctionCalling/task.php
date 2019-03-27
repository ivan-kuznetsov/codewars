<?php

namespace Tasks\FunctionCalling;

class FunctionByOptions
{
    public $options = [
      'a' => false,
      'b' => true,
    ];

    public function callFuncByName()
    {
        array_walk($this->options, function ($item, $key) {
            $item && call_user_func([__CLASS__, $key]);
        });
    }

    protected function a()
    {
        var_dump('a');
    }

    protected function b()
    {
        var_dump('b');
    }
}
