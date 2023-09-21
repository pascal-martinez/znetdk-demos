<?php

namespace app\validator;

class MyValidator extends \Validator {
    /**
     * Form data to be checked by the validator. 
     */
    protected function initVariables() {
        return array('fld_required', 'list_required', 'fld_maxlength',
            'fld_pattern','fld_minvalue','fld_maxvalue','fld_date',
            'fld_email','fld_url');
    }
    /**
     * Form data that are optional
     */
    protected function initOptionalVariables() {
        return array('fld_maxlength', 'fld_pattern','fld_minvalue',
            'fld_maxvalue','fld_date','fld_email','fld_url');
    }

    protected function check_fld_maxlength($value) {
        if (strlen($value) > 4) {
            $this->setErrorMessage("ZnetDK (server) - A maximum of 4 characters is expected!");
            return false;
        } else {
            return true;
        }
    }
    
    protected function check_fld_pattern($value) {
        if (!preg_match('/[A-Z]{3}$/', $value)) {
            $this->setErrorMessage("ZnetDK (server) - 3 letters in upper case are expected!");
            return false;
        } else {
            return true;
        }
    }
    protected function check_fld_minvalue($value) {
        if ($value < 10) {
            $this->setErrorMessage("ZnetDK (server) - enter a value &gt;= 10!");
            return false;
        } else {
            return true;
        }
    }
    
    protected function check_fld_maxvalue($value) {
        if ($value > 25) {
            $this->setErrorMessage("ZnetDK (server) - enter a value &lt;= 25!");
            return false;
        } else {
            return true;
        }
    }
    
    protected function check_fld_date($value) {
        $date = \DateTime::createFromFormat('Y-m-d', $value);
        if (!$date) {
            $this->setErrorMessage("ZnetDK (server) - The date you've entered is invalid!");
            return false;
        } else {
            return true;
        }
    }
    
    protected function check_fld_email($value) {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->setErrorMessage("ZnetDK (server) - This is not a valid email address!");
            return false;
        } else {
            return true;
        }
    }
    
    protected function check_fld_url($value) {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            $this->setErrorMessage("ZnetDK (server) - This is not a valid URL!");
            return false;
        } else {
            return true;
        }
    }

}
