<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Requested quote</h1>
    <table>
        <tr>
            <td>
                <b>Name: </b>{{ $name }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Email: </b>{{ $email }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Business Name: </b>{{ $business }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Product Name: </b>{{ $product }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Post Code: </b>{{ $postcode }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Message: </b>{{ $enquiry }}
            </td>
        </tr>
    </table>
</body>

</html>
