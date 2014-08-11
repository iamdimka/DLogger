<?php
/**
 * @author Dmitry Sushilov <iamdimka@eforb.com>
 * @created 11.08.2014
 */
use DLogger\ProviderInterface;

class DLogger
{
    /**
     * Logger version
     */
    const VERSION = 1.0;

    /**
     * Provider
     * @var ProviderInterface
     */
    protected $provider;

    /**
     * @param ProviderInterface $provider
     */
    public function __construct(ProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Log
     *
     * @param string $level
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function log($level, $message, $context = [])
    {
        if ($context) {
            foreach ($context as $search => $replace) {
                $message = str_replace("{{$search}}", $replace, $message);
            }
        }
        $this->provider->store($message, $level);
        return $this;
    }

    /**
     * Emergency log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function emergency($message, $context = [])
    {
        return $this->log('emergency', $message, $context);
    }

    /**
     * Alert log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function alert($message, $context = [])
    {
        return $this->log('alert', $message, $context);
    }

    /**
     * Critical log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function critical($message, $context = [])
    {
        return $this->log('critical', $message, $context);
    }

    /**
     * Critical log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function error($message, $context = [])
    {
        return $this->log('error', $message, $context);
    }

    /**
     * Warning log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function warning($message, $context = [])
    {
        return $this->log('warning', $message, $context);
    }

    /**
     * Notice log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function notice($message, $context = [])
    {
        return $this->log('notice', $message, $context);
    }

    /**
     * Info log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function info($message, $context = [])
    {
        return $this->log('info', $message, $context);
    }

    /**
     * Debug log
     *
     * @param string $message
     * @param array $context
     *
     * @return $this
     */
    public function debug($message, $context = [])
    {
        return $this->log('debug', $message, $context);
    }
} 