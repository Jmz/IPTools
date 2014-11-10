<?php namespace IpTools;

interface IpValidator
{
    /**
     * Validate an IP address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validate($ipAddress);

}