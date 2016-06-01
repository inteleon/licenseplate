<?php

namespace Inteleon\LicensePlates;

/**
 * @author Daniel Nilsson <daniel@smspark.se>
 * @author Johan Ivarsson <johan@smspark.se>
 */
class SwedishLicensePlate extends LicensePlate
{
    /**
     * @return string
     */
    public function format()
    {
        return $this->isNormalPlate()
        ? $this->formatNormal()
        : strtoupper($this->license);
    }

    /**
     * Format normal license plate
     *
     * @return string
     */
    private function formatNormal()
    {
        return strtoupper(str_replace([' ', '\n', '\t'], '', $this->license));
    }

    /**
     * Check if regnum is a valid
     * swedish license plate
     *
     * @return bool
     */
    public function isValid()
    {
        return $this->isNormalPlate() || $this->isPersonalPlate();
    }

    /**
     * @return bool
     */
    public function isNormalPlate()
    {
        return (bool) preg_match(
            '/(\w{3}\s*\d{3})|(\w{3}\s*\d{2}\w)/',
            $this->license
        );
    }

    /**
     * @return bool
     */
    public function isPersonalPlate()
    {
        $p = (bool) preg_match(
            '/^[a-z0-9 ]{2,7}$/i',
            $this->license
        );
        return $p && !$this->isNormalPlate();
    }
}
