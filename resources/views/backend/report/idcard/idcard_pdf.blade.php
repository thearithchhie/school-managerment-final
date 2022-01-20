<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>


    <table id="customers">
        <tr>
            <td>
                <h2>
                    <?php $image_path = '/image/logo_3.png'; ?>
                    <img src="{{ public_path() . $image_path }}" width="200" height="100">

                </h2>
            </td>
            <td>
                <h2>School SQ5</h2>
                <p>No. 86A, Street 110, Russian Federation Boulevard,
                    Sangkat Teuk Laak I, Khan Toul Kork, Phnom Penh, Cambodia</p>
                <p>Phone : 081 67 09 09</p>
                <p>Email : ornbona861@gmail.com</p>
                <br>
                <p> <b>Student ID Card </b> </p>

            </td>
        </tr>


    </table>

    @foreach ($allData as $value)
        <table id="customers">

            <tr>
                <td>IMAGE</td>
                <td>Easy School </td>
                <td> Student Id Card</td>

            </tr>

            <tr>
                <td>Name : {{ $value['student']['name'] }}</td>
                <td>Session : {{ $value['student_year']['name'] }}</td>
                <td> Class : {{ $value['student_class']['name'] }}</td>

            </tr>


            <tr>
                <td>Roll : {{ $value->roll }} </td>
                <td>ID No : {{ $value['student']['id_no'] }}</td>
                <td> Mobile:{{ $value['student']['mobile'] }} </td>

            </tr>



        </table>
    @endforeach

    <br> <br>
    <i style="font-size: 10px; float: right;">Print Data : {{ date('d M Y') }}</i>

    <hr style="border: dashed 2px; width: 95%; color: #000000; margin-bottom: 50px">




</body>

</html>
