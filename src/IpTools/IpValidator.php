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

    /**
     * Validate an IPv4 address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validateIpV4($ipAddress);

    /**
     * Validate an IPv6 address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validateIpV6($ipAddress);

}