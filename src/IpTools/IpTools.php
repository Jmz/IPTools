<?php namespace IpTools;

class IpTools implements IpValidator
{
    /**
     * Validate an IP address. Only supports IPv4 at the minute.
     *
     * @param $ipAddress
     * @return bool
     */
    public static function validate($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return true;
        } else {
            return false;
        }
    }

}