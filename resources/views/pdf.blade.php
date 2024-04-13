<!DOCTYPE html>
<html>
<head>
    <title>Report PDF</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Passport Number</th>
                <th>Full Name</th>
                <th>Arrival Date</th>
                <th>Home Country</th>
                <th>Arriving By</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $record)
                <tr>
                    <td>{{ $record->passportNum }}</td>
                    <td>{{ $record->firstName }} {{ $record->lastName }}</td>
                    <td>{{ $record->intendedDateArriv }}</td>
                    <td>{{ $record->countryHome }}</td>
                    <td>{{ optional($record->arrivalMean)->arrivingBY }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
