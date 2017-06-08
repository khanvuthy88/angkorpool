<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ZohoRecruit;

class ZohoController extends Controller
{
    public function fetchData()
    {
    	ZohoRecruit::setModule('Candidates');

    	return $response = ZohoRecruit::getRecords()->getResponse();
    }

    public function insert()
    {
        ZohoRecruit::setModule('Candidates');

        $response = ZohoRecruit::insertRecords('
            <Candidates>
            <row no="1">
            <FL val="Source">Web Download</FL>
            <FL val="Current employer">Your Company</FL>
            <FL val="First Name">Hannah</FL>
            <FL val="Last Name">Smith</FL>
            <FL val="Email">testing@testing4.com</FL>
            <FL val="Phone">1234567890</FL>
            <FL val="Home Phone">0987654321</FL>
            <FL val="Other Phone">1212211212</FL>
            <FL val="Fax">02927272626</FL>
            <FL val="Mobile">292827622</FL>
            </row>
            </Candidates>
        ');

        return $response->getResponse();
    }
}
