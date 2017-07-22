<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ZohoRecruit;
use Carbon\Carbon;

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

    public function fetchJobOpening()
    {
        ZohoRecruit::setModule('JobOpenings');

        return $response = ZohoRecruit::getRecords()->getResponse();
    }

    public function createJobOpening()
    {
        ZohoRecruit::setModule('JobOpenings');

        $response = ZohoRecruit::insertRecords('
            <JobOpenings>
            <row no="1">
            <FL val="Posting Title">ASP.Net Core full-stack developer</FL>
            <FL val="Date Opened">2017-06-11</FL>
            <FL val="Target Date">2017-06-30</FL>
            <FL val="Job Type">Full time</FL>
            <FL val="City">Phnom Penh</FL>
            <FL val="Salary">$300 - $700</FL>
            <FL val="Work Experience">2-5 years</FL>
            <FL val="Industry">IT</FL>
            <FL val="Job Description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</FL>
            </row>
            </JobOpenings>
        ');

        return $response->getResponse();
    }
}
