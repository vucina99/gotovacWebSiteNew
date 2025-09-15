<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>GOTOVAC WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <link rel="stylesheet" href="{{asset("css/mail.css")}}">
</head>
<body>
<table class="wrapper tabelica" width="100" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td class="header">
                        <a href="{{env("APP_URL")}}" class="site-title">GOTOVAC WEBSITE</a>
                    </td>
                </tr>
                <!-- Email Body -->
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <!-- Body content -->
                            <tr>
                                <td class="content-cell">
                                    <h1>Pozdrav,</h1>
                                    <p>Primili ste novu poruku preko kontakt forme na sajtu <strong>advokatigotovac.com</strong>.</p>
                                    <hr>
                                    <p><strong>Ime  pošiljaoca:</strong> {{ $name }} </p>
                                    <p><strong>Email pošiljaoca:</strong> {{ $email }}</p>
                                    <p><strong>Poruka pošiljaoca:</strong><br> {{ $userMessage }}</p>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td class="content-cell" align="center">
                                    <p>© 2025 Gotovac & Saradnici. All rights reserved.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
