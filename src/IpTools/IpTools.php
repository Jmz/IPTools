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

    /**
     * Checks whether the two IPv4 addresses can be a valid range.
     *
     * @param $startIp
     * @param $endIp
     * @return bool
     */
    public static function validateIpv4Range($startIp, $endIp)
    {
        if (self::validateIpV4($startIp) && self::validateIpV4($endIp)) {

            if (ip2long($startIp) < ip2long($endIp)) {
                return true;
            }

        }

        return false;
    }
}