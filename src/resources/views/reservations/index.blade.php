<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .bill-section {
            margin-bottom: 20px;
        }
        .bill-header {
            background-color: yellow;
            padding: 10px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #0074D9;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($data as $bill)
            <div class="bill-section">
                <div class="bill-header">
                    Bill Receiver: {{ $bill['bill_receiver'] }}
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Guest Name</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Checkin Date</th>
                            <th>Checkout</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bill['reservations'] as $reservation)
                            <tr>
                                <td>{{ $reservation['guest_name'] }}</td>
                                <td>{{ $reservation['arrival'] }}</td>
                                <td>{{ $reservation['departure'] }}</td>
                                <td>{{ $reservation['checkin_date'] }}</td>
                                <td>{{ $reservation['checkout'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</body>
</html>
