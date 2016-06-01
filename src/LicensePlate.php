<?php

namespace Inteleon\LicensePlates;

/**
 * @author Daniel Nilsson <daniel@smspark.se>
 * @author Johan Ivarsson <johan@smspark.se>
 */
abstract class LicensePlate
{
    /**
     * License plate
     *
     * @var string
     */
    protected $license;

    /**
     * @param string $license
     */
    public function __construct($license)
    {
        $this->license = $license;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @return string
     */
    abstract public function format();

    /**
     * Check if regnum is a valid
     * swedish license plate
     *
     * @return bool
     */
    abstract public function isValid();

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format();
    }
}
