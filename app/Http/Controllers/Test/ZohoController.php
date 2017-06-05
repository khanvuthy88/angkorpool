<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zoho\ZohoRecruit;

class ZohoController extends Controller
{
    public function fetchData()
    {		
    	$zoho_recruit = new ZohoRecruit('6ed78c988b6c42d9a8b20525a6f8a8bd'); 
    	$zoho_recruit->setModule('Candidates');

    	$response = $zoho_recruit->getRecords('
    		<Candidates>
			<row no="1">
			<FL val="Source">Web Download</FL>
			<FL val="Current employer">Your Company</FL>
			<FL val="First Name">Hannah</FL>
			<FL val="Last Name">Smith</FL>
			<FL val="Email">testing@testing.com</FL>
			<FL val="Phone">1234567890</FL>
			<FL val="Home Phone">0987654321</FL>
			<FL val="Other Phone">1212211212</FL>
			<FL val="Fax">02927272626</FL>
			<FL val="Mobile">292827622</FL>
			</row>
			</Candidates>
    	');
    }
}
