<?php

namespace L2JHasher;     
   
use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class L2JHasher implements HasherContract 
{

    public function make($value, array $options = array()) 
    {
        return base64_encode(pack('H*', sha1($value)));
    }
    public function info($hashedValue)
    {
        return $this->driver()->info($hashedValue);
    }

    public function check($value, $hashedValue, array $options = array()) 
    {
        return $this->make($value) === $hashedValue;
    }

    public function needsRehash($hashedValue, array $options = array()) 
    {
        return false;
    }

}
