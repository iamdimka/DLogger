<?php
/**
 * @author Dmitry Sushilov <iamdimka@eforb.com>
 * @created 11.08.2014
 */

namespace DLogger;

/**
 * Interface ProviderInterface
 * @package DLogger
 * @author Dmitry Sushilov <dmitry.sushilov@gmail.com>
 */
interface ProviderInterface
{
    /**
     * Method to store log in database
     *
     * @param string $log
     * @param string $level
     *
     * @return void
     */
    public function store($log, $level);
}