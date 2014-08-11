<?php
/**
 * @author Dmitry Sushilov <iamdimka@eforb.com>
 * @created 11.08.2014
 */

namespace DLogger;


class FileProvider implements ProviderInterface
{
    /**
     * @var string
     */
    protected $filename;

    /**
     * @param $filename
     *
     * @throws Exceptions\FileAccessRestricted
     */
    public function __construct($filename)
    {
        if (!is_writable($filename)) {
            throw new Exceptions\FileAccessRestricted;
        }

        $this->filename = $filename;
    }

    /**
     * Method to store log in database
     *
     * @param string $log
     * @param string $level
     *
     * @return void
     */
    public function store($log, $level)
    {
        file_put_contents($this->filename, date('Y-m-d H:i:s ') . ucfirst($level) . ': ' . $log);
    }
}