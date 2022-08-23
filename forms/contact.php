<?php
define('TITLE', 'Citrio Solutions');
define('COMPANY_URL', 'www.citriosolutions.com');
define('COMPANY_LOGO', '');
define('FROM_MAIL', 'info@citriosolutions.com');


  extract($_POST);

  $to = 'admin@citriosolutions.com'; //change to ur mail address
  $strSubject = TITLE." -Site Contact Enquiry";

  $mail_title  = 'Enquiry Mail';
  $company_name = TITLE; // from config page
  $company_link = COMPANY_URL;
  $company_logo = COMPANY_LOGO;
  
  $html_msg =' <tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Name</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$name.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr><tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Company Name</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$cname.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr><tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Mobile</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$mobile.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr><tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Email ID</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"> '.$email.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr><tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Subject</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"> '.$subject.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr>
            <tr>
            <td width="30"></td>
            <td align="left" valign="middle">
              <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Message</h3>
              
            </td>
            <td >
              <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
              <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"> '.$message.'</div>
              <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
            </td>
            <td width="30"></td>
           </tr> ';

  $htmlContent ='<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
            <tbody>
              <tr>
                <td>
                  <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                  <tbody>
                    <tr>
                      <td>
                        <table width="900" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                        <tbody>
                          <tr>
                            <td colspan="3" height="80" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="padding:0;margin:0;font-size:0;line-height:0">
                              <table width="900" align="center" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td width="30"></td>
                                  <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0;text-align:center"><a href="'.$company_link.'" target="_blank"><img src="'.$company_logo.'" alt="'.$company_name.'" ></a></td>
                                  <td width="30"></td>
                                </tr>
                              </tbody>
                              </table>
                            </td>
                          </tr>
                          
                        
                        <tr bgcolor="#ffffff">
                          <td width="30" bgcolor="#eeeeee"></td>
                          <td>
                            <table width="800" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td colspan="4" align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="4" align="center"><h2 style="font-size:24px;text-transform:upper">'.$mail_title.'</h2></td>
                              </tr>
                              <tr>
                                <td colspan="4">&nbsp;</td>
                              </tr>
                              
                              '.$html_msg.'
                              
                              <tr>
                                <td colspan="5" height="40" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                              </tr>
                              
                            </tbody>
                            </table>
                            <table width="800" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td>
                                  <h2 style="color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0">&nbsp;</h2>
                                  <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$mail_title." at ".$company_name.'</div>
                                </td>
                              </tr>
                              <tr>
                                <td align="center">
                                  <div style="text-align:center;width:100%;padding:40px 0">
                                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0">
                                    <tbody>
                                      <tr>
                                        <td align="center" style="margin:0;text-align:center"><a href="'.$company_link.'" style="font-size:18px;font-family:HelveticaNeue-Light,Arial,sans-serif;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#00a3df;padding:14px 40px;display:block" target="_blank">Visit Now!</a></td>
                                      </tr>
                                    </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr><tr><td>&nbsp;</td>
                              </tr></tbody></table></td>
                          <td width="30" bgcolor="#eeeeee"></td>
                        </tr>
                        </tbody>
                        </table>
                        <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                        <tbody>
                          <tr>
                            <td>
                              <table width="900" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                              <tbody>
                                <tr><td colspan="2" height="30"></td></tr>
                                <tr>
                                  <td width="360" valign="top">
                                    <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2020  '. $company_name.'. All rights reserved.</div>
                                    <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                    <!--<div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">Made in India</div> -->
                                  </td>
                                  
                                </tr>
                                <tr><td colspan="2" height="5"></td></tr>
                                 
                              </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
            </table>
          </div>';  

  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
  $headers .= "From: ".FROM_MAIL; 
   
  $mail_sent=mail($to, $strSubject, $htmlContent, $headers); 
  if($mail_sent)
    echo "OK";
  else
    echo "Sorry.Request not send";
  
?>
