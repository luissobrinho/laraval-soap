<?php


namespace App;


class Add
{

    /**
     * @var string
     */
    protected $intA;

    /**
     * @var string
     */
    protected $intB;

    /**
     * Add constructor.
     * @param string $intA
     * @param string $intB
     */
    public function __construct(string $intA, string $intB)
    {
        $this->intA = $intA;
        $this->intB = $intB;
    }

    /**
     * @return string
     */
    public function getIntA(): string
    {
        return $this->intA;
    }

    /**
     * @param string $intA
     */
    public function setIntA(string $intA): void
    {
        $this->intA = $intA;
    }

    /**
     * @return string
     */
    public function getIntB(): string
    {
        return $this->intB;
    }

    /**
     * @param string $intB
     */
    public function setIntB(string $intB): void
    {
        $this->intB = $intB;
    }




}
