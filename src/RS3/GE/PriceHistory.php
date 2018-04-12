<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 19.19
 */

namespace vestervang\rsApi\RS3\GE;

class PriceHistory
{
    protected $today;
    protected $day30;
    protected $day60;
    protected $day180;
    protected $priceHistory;

    public function __construct($priceHistory)
    {

        $daily   = array_values(array_reverse((array)$priceHistory->daily));
        $average = array_values(array_reverse((array)$priceHistory->average));

        $this->priceHistory['daily']   = $daily;
        $this->priceHistory['average'] = $average;

        $this->today  = $this->getDay1Difference();
        $this->day30  = $this->getDay30Difference();
        $this->day60  = $this->getDay60Difference();
        $this->day180 = $this->getDay180Difference();
    }

    /**
     * @return array
     */
    protected function getDay1Difference()
    {
        return $this->getDifference(1, 2);
    }

    /**
     * @return array
     */
    protected function getDay30Difference()
    {
        return $this->getDifference(1, 30);
    }

    /**
     * @return array
     */
    protected function getDay60Difference()
    {
        return $this->getDifference(1, 60);
    }

    /**
     * @return array
     */
    protected function getDay180Difference()
    {
        return $this->getDifference(1, 180);
    }

    /**
     * @param $day1
     * @param $day2
     *
     * @return array
     */
    protected function getDifference($day1, $day2)
    {

        $day1DailyPrice = $this->priceHistory['daily'][$day1 - 1];
        $day2DailyPrice = $this->priceHistory['daily'][$day2 - 1];

        $day1AveragePrice = $this->priceHistory['average'][$day1 - 1];
        $day2AveragePrice = $this->priceHistory['average'][$day2 - 1];

        return [
            'daily'   => new PriceChange($day2DailyPrice, $day1DailyPrice),
            'average' => new PriceChange($day2AveragePrice, $day1AveragePrice)
        ];
    }

    /**
     * @return array
     */
    public function getToday()
    {
        return $this->today;
    }

    /**
     * @return array
     */
    public function getDay30()
    {
        return $this->day30;
    }

    /**
     * @return array
     */
    public function getDay60()
    {
        return $this->day60;
    }

    /**
     * @return array
     */
    public function getDay180()
    {
        return $this->day180;
    }

    /**
     * @return mixed
     */
    public function getDailyHistory()
    {
        return $this->priceHistory['daily'];
    }

    /**
     * @return mixed
     */
    public function getAverageHistory()
    {
        return $this->priceHistory['average'];
    }

}