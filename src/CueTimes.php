<?php
/**
 * Created by PhpStorm.
 * User: jeremymckay
 * Date: 11/23/18
 * Time: 08:15
 */

namespace CueTimes;


class CueTimes
{
    /**
     * @param array $customerTimes
     * @param int $registers
     * @return float|int
     */
    public function lineTimes(array $customerTimes, int $registers)
    {
        // build regesterAccumulators
        for ($x = 0; $x < $registers; $x++) {
            $registerAccumulators[] = 0;
        }

        $accumIndex = 0;
        foreach ($customerTimes as $customerTime) {
            // went through all the registers reset accumlator index
            if ($accumIndex == $registers) {
                $accumIndex = 0;
            }
            // start counting for first register
            if ($registerAccumulators[$accumIndex] == 0) {
                $registerAccumulators[$accumIndex] = $customerTime;
                $accumIndex++;
                continue;
            }
            // no additional register add to this one
            if (!isset($registerAccumulators[$accumIndex+1])) {
                $registerAccumulators[$accumIndex] += $customerTime;
                continue;
            }
            // if  current register is still busy add to next registers accumlator
            if ($registerAccumulators[$accumIndex] >= $registerAccumulators[$accumIndex+1]) {
                $registerAccumulators[$accumIndex+1] += $customerTime;
                $accumIndex++;
                continue;
            }
            // register is available add to current registers accumlator
            if ($registerAccumulators[$accumIndex] <= $registerAccumulators[$accumIndex+1]) {
                $registerAccumulators[$accumIndex] += $customerTime;
                $accumIndex++;
                continue;
            }
        }
        // lineTime
        return (max($registerAccumulators));
    }


}