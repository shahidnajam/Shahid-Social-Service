<?php
class Shahid_Social_Factory
{
    const FACEBOOK = 'facebook';
    
    /**
     * factory that build the right service library
     * @param array $service first key of the array should be the service identifier key and the value for this key should parameter to pass to the service constructor class
     * @return Shahid_Social_Service_Abstract
     * @throws Shahid_Social_Exception
     */
    public static function factory(array $service)
    {
        reset($service);
        switch (key($service)) {
            case self::FACEBOOK:
                return new Shahid_Social_Service_Facebook(self::FACEBOOK, current($service));
                break;
            default:
                throw new Shahid_Social_Exception(sprintf('Invalid service code (given : %s)', key($service)));
                break;
        }
    }
}