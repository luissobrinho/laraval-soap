<?php


namespace App;


class GetAddResponse
{

    /**
     * @var int
     */
    protected $AddResult;

    /**
     * GetAddResponse constructor.
     * @param int $AddResult
     */
    public function __construct(int $AddResult)
    {
        $this->AddResult = $AddResult;
    }

    /**
     * @return int
     */
    public function getAddResult(): int
    {
        return $this->AddResult;
    }

    /**
     * @param int $AddResult
     */
    public function setAddResult(int $AddResult): void
    {
        $this->AddResult = $AddResult;
    }


}
