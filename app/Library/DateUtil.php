<?php

namespace App\Library;

class DateUtil
{
    /**
     * @param $date1
     * @param $date2
     * @return bool|string
     * @throws \Exception
     */
    static public function checkDateInputAtProduct($date1, $date2)
    {
        if (!isset($date2) || empty($date2)) {
            return 'Ngày kết thúc không được trống';
        }
        $date1 = \DateTime::createFromFormat('d/m/Y H:i:s', $date1);
        $date2 = \DateTime::createFromFormat('d/m/Y H:i:s', $date2);
        if ($date1 > $date2) {
            return 'Ngày kết thúc không thể nhỏ hơn ngày bắt đầu';
        }
        return true;
    }

    /**
     * @param $date
     * @return \DateTime|null
     * @throws \Exception
     */
    static public function convertDateToDateTimeStart($date)
    {
        if (!is_null($date)) {
            $date_time = new \DateTime($date);
            if ($date_time) {
                return $date_time;
            }
        }
        return null;
    }

    /**
     * @param $date
     * @return \DateTime|null
     * @throws \Exception
     */
    static public function convertDateToDateTimeEnd($date)
    {
        if (!is_null($date)) {
            $date_time = new \DateTime($date);
            $last_time = new \DateInterval('PT23H59M59S');
            if ($date_time) {
                return $date_time->add($last_time);
            }
        }
        return null;
    }
}
