<?php
class DateModifier {
    /**
     * @var DateTime
     */
public $startDate;
    /**
     * @var DateTime
     */
public $endDate;

    /**
     * DateModifier constructor.
     * @param DateTime $startDate
     * @param DateTime $endDate
     */
    public function __construct(DateTime $startDate, DateTime $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function calcWorkDay()
    {
        $count = 0;

        for ($date = $this->startDate->modify('+1day'); $date <= $this->endDate; $date->modify('+1day')) {
            $count += 1;
        }
        if ($count % 4 == 0) {
            return "first work day";
        } elseif (($count - 1) % 4 == 0) {
            return "second work day";
        } else {
            return "free";
        }

    }
}

