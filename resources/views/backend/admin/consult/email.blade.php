<body style="background: #0484c2">
<div style="border-bottom: 1px solid #eee; padding: 30px 35px 35px 35px; margin: auto;display: block;width:500px;
    box-shadow: 0 0 22px #848181;background: #fff;margin-top:40px">
    <h3 style="color: #848484;
font-family: 'Open Sans', sans-serif;font-size: 16px;font-weight: 400;text-align: center;">
       Hello!! {{$email}}, You got a reply for Prescription uploaded
    </h3>
    <hr>

    <div><a href="{{url('/')}}" target="_blank" style="text-decoration: none"><button style="background: #0879ba;
    padding: 12px 35px;
    color: #fff;
    margin: auto;
    display: block;
    box-shadow: 0 0 6px #c3c3c3;
    border: 0;
    border-radius: 20px;
    margin-top: 20px;
    font-size: 15px;">Visit Website</button></a></div>
    <p style="color: #737373; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 28px; font-weight: 400; text-align: left; margin: 40px 0 0 0;">
    <table id="customers" style=" font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;">







    <tr>

        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; "> The medicine you are taking:</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; text-align:justify;">{{$medicine_name}}</th>

    </tr>

    <tr>

        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; ">What this medicine does to your body ? :</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;text-align:left"> {{$medicine_cause}}</th>

    </tr>
    <tr>

        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; "> How you should take this medication?</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;text-align:left"> {{$medicine_routine}}</th>

    </tr>

    <tr>

        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;">What precautions to be taken:</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;text-align:left"> {{$precaution}}</th>

    </tr>
    <tr>


        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; ">Food you should take/avoid:</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;text-align: justify;">  {{$diet}}</th>

    </tr>
    <tr>


        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400; ">What if you miss the dose?</th>
        <th style="
        padding: 8px;
        color: #757575;
        font-size: 12px;
        font-weight: 400;text-align: justify;"> {{$if_dose_missed}}</th>

    </tr>
    </table>

    </p>
    <hr>
    <ul style="color: #464646; margin-left: 0px;font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 28px; font-weight: 400; text-align: center; margin: 35px 0 0 0; padding: 0; list-style: none;">

        <li style="text-align: center;font-size: 15px">Copyrights © {{ date('Y') }}. All Rights Reserved by MeroPharmacist</li>

    </ul>
</div>

</body>











