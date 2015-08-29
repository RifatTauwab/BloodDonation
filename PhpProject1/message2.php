<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// http://rohitashv.wordpress.com/2013/01/20/how-to-send-sms-using-php/
// http://www.vianett.com/en/free-demonstration-account
include_once("ViaNettSMS.php");
        //$Mobile = "+91".$Mobile;
        // Declare variables.
        $Username = "kobirh10@gmail.com";
        $Password = "b4pih";
        $MsgSender = "+8801988150641";
        $DestinationAddress = "+8801911355206";
        $Message = "hey";
 
        // Create ViaNettSMS object with params $Username and $Password
        $ViaNettSMS = new ViaNettSMS($Username, $Password);
        try
        {
            // Send SMS through the HTTP API
            $Result = $ViaNettSMS->SendSMS($MsgSender, $DestinationAddress, $Message);
            // Check result object returned and give response to end user according to success or not.
            if ($Result->Success == true)
                $Message = "Message successfully sent!";
            else
                $Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
        }
        catch (Exception $e)
        {
            //Error occured while connecting to server.
            $Message = $e->getMessage();
        }
        ?>