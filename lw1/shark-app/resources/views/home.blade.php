<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>Geometry Dash</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="css/img/logo.jpg">
        </div>
        <div class="text">
            <b>
                <p>{{ $logotext }}</p>
            </b>
        </div>
    </header>
    <aside>
        <div class="container">
            <table cellspacing="10" cellpadding="0" width="100%" border="0">
                <tbody>
                    <tr>
                        <td valign="top" width="10%">
                            <div class="demon">
                                <b>
                                    <p>{{ $demon }}</p>
                                </b>
                            </div>
                            <div class="demonlist">
                                <b>
                                    <p>{{ $demonlist }}</p>
                                </b>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container2">
            <table cellspacing="10" cellpadding="0" width="100%" border="0">
                <tbody>
                    <tr>
                        <td valign="top" width="10%">
                            <div class="creator">
                                <b>
                                    <p>{{ $creator }}</p>
                                </b>
                            </div>
                            <div class="creatorlist">
                                <b>
                                    <p>{{ $creatorlist }}</p>
                                </b>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container3">
            <table cellspacing="10" cellpadding="0" width="100%" border="0">
                <tbody>
                    <tr>
                        <td valign="top" width="10%">
                            <div class="level">
                                <b>
                                    <p>{{ $level }}</p>
                                </b>
                            </div>
                            <div class="levellist">
                                <b>
                                    <p>{{ $levellist }}</p>
                                </b>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container4">
            <table cellspacing="10" cellpadding="0" width="100%" border="0">
                <tbody>
                    <tr>
                        <td valign="top" width="10%">
                            <div class="part">
                                <b>
                                    <p>{{ $part }}</p>
                                </b>
                            </div>
                            <div class="partlist">
                                <b>
                                    <p>{{ $partlist }}</p>
                                </b>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>
</body>

</html>