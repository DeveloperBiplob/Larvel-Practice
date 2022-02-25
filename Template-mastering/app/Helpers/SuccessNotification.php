<?php

if(!function_exists('setNotification')){
    function setNotification($message = 'Data Save Successfully!', $type = 'success')
    {
        Session()->flash('message', $message);
        Session()->flash('type', $type);
    }
}
