<?php namespace IpTools;

class IpTools implements IpValidator
{
    /**
     * Validate an IP address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validate($ipAddress)
    {
        if (self::validateIpV4($ipAddress) || self::validateIpV6($ipAddress)) {
            return true;
        }

        return false;
    }

    /**
     * Validate an IPv4 address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validateIpV4($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return true;
        }

        return false;
    }

    /**
     * Validate an IPv6 address.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validateIpV6($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            return true;
        }

        return false;
    }


}