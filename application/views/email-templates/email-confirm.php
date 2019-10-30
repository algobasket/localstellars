<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet" type="text/css">
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
        <style>
            * {
                font-family: 'Poppins', sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet" type="text/css">
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 22px;
            color:#526283;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

</head> 

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: darkslateblue;">
	<center style="width: 100%; background-color: darkslateblue;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="darkslateblue">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="<?php echo base_url();?>">
                                        <img style="width:150px" src="<?php echo base_url();?>public/landing-2/images/logo.png" alt="logo">
                                    </a>
                                    <p style="font-size: 14px; color: #16a1fd; padding-top: 12px;">Thanks for registering with Ixinium.io</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;border:1px solid #e3edf8;border-bottom:4px solid #16a2fd;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px 30px 15px 30px;">
                                    <h2 style="font-size: 18px; color: #16a1fd; font-weight: 600; margin: 0;">Confirm Your E-Mail Address</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Hi <?php echo $user;?>,</p>
                                    <p style="margin-bottom: 10px;">Welcome! <br> You are receiving this email because you have registered on our site.</p>
                                    <p style="margin-bottom: 10px;">Click the link below to active your Ixinium account.</p>
                                    <p style="margin-bottom: 25px;">This link will expire in 24 hours and can only be used once.</p>
                                    <a href="<?php echo base_url();?>verify-email/<?php echo $token;?>" style="background-color:#16a1fd;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:44px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0 30px" target="__blank">Verify Email</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 30px">
                                    <h4 style="font-size: 15px; color: #000000; font-weight: 600; margin: 0; text-transform: uppercase; margin-bottom: 10px">or</h4>
                                    <p style="margin-bottom: 10px;">If the button above does not work, paste this link into your web browser:</p>
                                    <a href="<?php echo base_url();?>verify-email/<?php echo $token;?>" target="__blank" style="color: #16a1fd; text-decoration:none;word-break: break-all;"><?php echo base_url();?>verify-email/<?php echo $token;?></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 30px 40px">
                                    <p>If you did not make this request, please contact us or ignore this message.</p>
                                    <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at  office@ixinium.io</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">Copyright © 2018 Ixinium. <br> Template Made By <a style="color: #16a1fd; text-decoration:none;" href="https://blog.algobasket.com">Algobasket</a> &amp; Handcrafted by Algobasket.</p>
                                    <ul style="margin: 10px -4px 0;padding: 0;">
                                        <li style="display: inline-block; list-style: none; padding: 4px;">
                                            <a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://web.facebook.com/ixinium">
                                            <img style="width: 30px" src="<?php echo base_url();?>public/images/email_template/brand-b.png" alt="brand">
                                            </a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://twitter.com/OIxinium"><img style="width: 30px" src="<?php echo base_url();?>public/images/email_template/brand-e.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://youtube.com/ixinium"><img style="width: 30px" src="<?php echo base_url();?>public/images/email_template/brand-d.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://bitcointalk.org/index.php?topic=5160309.0"><img style="width: 30px" src="<?php echo base_url();?>public/images/email_template/brand-a.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://medium.com/ixinium"><img style="width: 30px" src="<?php echo base_url();?>public/images/email_template/brand-c.png" alt="brand"></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>