<html>

<head>

    <title>Reply to Prescription</title>

</head>

<body>

<table>

<!--    <tr>-->
<!--        <td align="center"><img src="logo.jpg"></td>-->
<!--    </tr>-->

    <tr>

        <td>
            Thank you {{$email}} for Contacting Us
            <table>
                <tr>

                    <td>
                        The medicine you are taking<br>
                        {{$medicine_name}}<br>
                    </td><br>

                    <td>What this medicine does to your body ?<br>
                        {{$medicine_cause}}<br>
                    </td><br>
                    <td>
                        How you should take this medication?<br>
                        {{$medicine_routine}}<br>
                    </td><br>
                    <td>
                        What precautions to be taken:<br>
                        {{$precaution}}<br>
                    </td><br>
                    <td> Food you should take/avoid:<br>
                        {{$diet}}<br>
                    </td><br>
                    <td>What if you miss the dose?<br>
                        {{$if_dose_missed}}<br>
                    </td>

                </tr>

            </table>

        </td>

    </tr>

    <tr>

        <td align="center"></td>

    </tr>

</table>

</body>

</html>








