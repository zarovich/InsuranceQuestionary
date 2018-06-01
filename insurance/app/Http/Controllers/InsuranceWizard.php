<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\CustomerData;
use App\Car;
use App\Driver;

class InsuranceWizard extends Controller
{
    public function personalDataForm() {
        return view('forms.personaldata');
    }

    public function detailedInfoForm($id) {
        return view('forms.detailedinfo');
    }

    public function driverDetailsForm($id) {

    }

    public function addCarForm($id) {

    }

    public function endForm($id) {

    }

    public function personalDataStore(Request $request) {
        /*
        * TODO: Add a session token validation with id
        */

        $customerData = new CustomerData();

        $customerData->name = $request->firstname;
        $customerData->surname = $request->lastname;
        $customerData->email = $request->email;
        $customerData->phone = $request->phone;

        $customerData->save();

        return redirect()->action('InsuranceWizard@detailedInfoForm', array($customerData->id));
    }

    public function detailedDataStore(Request $request) {

    }

    public function driverDetailsStore(Request $request) {

    }

    public function addCarSTore(Request $request) {

    }

}
?>