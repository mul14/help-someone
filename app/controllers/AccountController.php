<?php


class AccountController extends \BaseController {

    public $restful = true;


    public function signup()
    {
        //
    }


    public function verify($accountid, $code)
    {
        //
    }


    public function forgetpass($email, $capacha_code)
    {
        //
    }


    public function verifyresetcode($email, $code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function resetpass($id)
    {
        //
    }


    public function show()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function session()
    {
        return Response::make(array('success' => Session::get('login') == true), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        if(Input::get('email') == "sami@exa.com.sa" && Input::get('password') == "aqaq00" ){
            Session::put('login' , true);
            return Response::make(array('success' => true), 200);
        }else{
            return Response::make(array('success' => false), 200);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */

    public function logout()
    {
        Session::forget('login');
        return Response::make('', 200);
    }


    public function changepass($id)
    {
        //
    }


    public function test()
    {
        $clients = RestClient::post(
            "https://portal.exacall.com/api.php?apikey=xxtest",
            array(
                "username" =>"ibrahim.azzam" ,
                "password" =>"ibm4tech",
                "module"   =>"clients",
                "action"   =>"list",
                "params"   =>'{"itemsPerPage":2}'
            )
        );

        dd($clients);
    }
}
