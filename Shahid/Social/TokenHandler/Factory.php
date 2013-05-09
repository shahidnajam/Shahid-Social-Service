<?php
class Shahid_Social_TokenHandler_Factory
{
    
    const SESSION = 'session';
    const DATABASE = 'database';    
    
    public static function getHandler($params) 
    {
        $constructorParams = (isset($params['type']) ? $params['type'] : null);
        switch ($params['type']) {
            case self::SESSION:
                return new Shahid_Social_TokenHandler_Session($params);
            case self::DATABASE:
                return new Shahid_Social_TokenHandler_Database($params);                
        }
        
        throw new Shahid_Social_Exception('Invalid Tokan handler');
    }
}