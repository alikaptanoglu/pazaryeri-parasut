<?php

namespace salyangoz\pazaryeriparasut;

class Client implements PazaryeriParasut
{

    private $config;

    /**
     * Constructor.
     *
     * @param  array  $config
     * @return void
     */
    public function __construct(array $config)
    {
        $this->config   =   $config;
    }

    public function transfer()
    {
        $n11 = new Marketplace\N11($this->config);
        $n11->transfer();
    }


}