<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f5f5; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="600" cellpadding="20" cellspacing="0"
                       style="background:#ffffff; border-radius:8px;">

                    <tr>
                        <td style="text-align:center; border-bottom:1px solid #ddd;">
                            <h2 style="margin:0; color:#333;">New Contact Message</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p><strong>Name:</strong> {{ $data['name'] }}</p>
                            <p><strong>Email:</strong> {{ $data['email'] }}</p>
                            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

                            <hr>

                            <p><strong>Message:</strong></p>
                            <p style="line-height:1.6;">
                                {{ $data['message'] }}
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center; font-size:12px; color:#777;">
                            Sent from Masar Arabia website contact form
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
