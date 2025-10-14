<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Report Page</title>
    <style>
        @page {
            margin: 0;
            size: A4 portrait;
        }
        body {
          font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9fd3af; /* light green background */
            color: #000;
        }

        .container {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            text-align: center;
            position: relative;
        }

        .circle-image {
            width: 100%;
        }

        .circle-image img {
           width: 40%;
           margin-top:50px;
        }

        .quote {
            font-size: 20px;
            font-style: italic;
            font-weight: bold;
            margin-bottom: 75px;
            margin-top: 40px;
        }

        .brand {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .info-box {
            width: 100%;
            max-width: 500px;
            margin: 0 auto 30px auto;
            text-align: left;
            font-size: 14px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #00000020;
        }

        .footer {
            position: absolute;
            bottom: 0px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
        }

        .footer .link {
            display: inline-block;
            margin: 0 15px;
        }

        .page-number {
            position: absolute;
            bottom: 60px;
            width: 100%;
            text-align: center;
            font-size: 12px;
        }
        .content-container{
            padding-right:175px;
            padding-left:175px;
        }
        .info-title{
            text-align:left;
            font-size:16px;
            font-weight:bold;
            margin-left:5px;
            margin-bottom:20px;
        }
        .info-data{
            text-align:left;
            font-size:16px;
            margin-bottom:20px;
        }
        .info-image img{
        width: 20px;
        height: 20px;
        margin-bottom:20px;
}
      .footer-color-cards {
    width: 75%;
    margin: auto;
    display: flex;
    margin-top: 15px;
}
.footer-color-cards div {
    width: 25%;
}
.footer-color-cards .orange {
    height: 25px;
    background: #f1935d;
    border-top-left-radius: 25px;
}
.footer-color-cards .blue {
    height: 25px;
    background: #9ae4e3;
}
.footer-color-cards .white {
    height: 25px;
    background: #fff;
}
.footer-color-cards .yellow {
    height: 25px;
    background: #f6c94c;
    border-top-right-radius: 25px;
}
    </style>
</head>
<body style="width:100%">
    <div class="container">
        <!-- Circle image -->
        <div class="circle-image">
            <img src="{{ public_path('assets/images/report_image1.png') }}" >
        </div>

        <!-- Quote -->
        <div class="quote">
            “Life isn’t about finding yourself<br>
            It’s about Creating Yourself”
        </div>

        <div class="content-container" style="text-align:left;">
           <img src="{{ public_path('assets/images/report_image2.png') }}" style="width:125px;margin-bottom:15px;"> 
        </div>
        <hr style="width:3px;width:75%;margin:auto;">

        <!-- User details -->
        <div class="content-container" style="margin-top:15px;">
            <table style="width:100%;margin:auto;">
            <tr style="vertical-align: middle;">
                <td style="width:5%;">
                  <div class="info-image">
                        <img src="{{ public_path('assets/images/report_image3.png') }}">
                    </div>
                </td>
                <td style="width:45%;">
                  <div class="info-title">
                        Brain Blueprint User:
                    </div>
                </td>
                <td style="width:50%;text-align:center;margin:5px;">
                   <div class="info-data">{{ $user_details['display_name'] ?? 'Sample Name' }}</div>
                </td>
            </tr>
             <tr style="vertical-align: middle;">
                <td style="width:5%;">
                  <div class="info-image">
                        <img src="{{ public_path('assets/images/report_image4.png') }}">
                    </div>
                </td>
                <td style="width:45%;">
                  <div class="info-title">
                        Date of Birth:
                    </div>
                </td>
                <td style="width:50%;text-align:center;margin:5px;">
                   <div class="info-data">{{ $user_details['date_of_birth'] ?? 'Sample Name' }}</div>
                </td>
            </tr>
            <tr style="vertical-align: middle;">
                <td style="width:5%;">
                  <div class="info-image">
                        <img src="{{ public_path('assets/images/report_image5.png') }}">
                    </div>
                </td>
                <td style="width:45%;">
                  <div class="info-title">
                       Age:
                    </div>
                </td>
                <td style="width:50%;text-align:center;margin:5px;">
                   <div class="info-data">{{ $user_details['age'] ?? 'Sample Name' }}</div>
                </td>
            </tr>
            <tr style="vertical-align: middle;">
                <td style="width:5%;">
                  <div class="info-image">
                        <img src="{{ public_path('assets/images/report_image6.png') }}">
                    </div>
                </td>
                <td style="width:45%;">
                  <div class="info-title">
                       Date of Assessment:
                    </div>
                </td>
                <td style="width:50%;text-align:center;margin:5px;">
                   <div class="info-data">{{ $user_details['created_at'] ?? 'Sample Name' }}</div>
                </td>
            </tr>
             <tr style="vertical-align: middle;">
                <td style="width:5%;">
                  <div class="info-image">
                        <img src="{{ public_path('assets/images/report_image7.png') }}">
                    </div>
                </td>
                <td style="width:45%;">
                  <div class="info-title">
                      Report Code::
                    </div>
                </td>
                <td style="width:50%;text-align:center;margin:5px;">
                   <div class="info-data">#{{ $user_details['id'] ?? 'Sample Name' }}</div>
                </td>
            </tr>
            </table>
            <!--<div class="info-row"><strong>Brain Blueprint User:</strong> <span>{{ $user_details['name'] ?? 'Sample Name' }}</span></div>-->
            <!--<div class="info-row"><strong>Date of Birth:</strong> <span>{{ $user_details['dob'] ?? '02/02/2025' }}</span></div>-->
            <!--<div class="info-row"><strong>Age:</strong> <span>{{ $user_details['age'] ?? '18' }}</span></div>-->
            <!--<div class="info-row"><strong>Date of Assessment:</strong> <span>{{ $user_details['assessment_date'] ?? '08/08/2025' }}</span></div>-->
            <!--<div class="info-row"><strong>Report Code:</strong> <span>{{ $user_details['report_code'] ?? '#12499' }}</span></div>-->
        </div>


        <!-- Footer -->
        <div class="footer">
            <div class="link">📧 hello@mylimitlessbrain.com</div>
            <div class="link">🌐 www.mylimitlessbrain.com</div>
            <div class="link">📞 +971 58 5602 551</div>
            <div class="footer-color-cards">
        <div class="orange"></div>
        <div class="blue"></div>
        <div class="white"></div>
        <div class="yellow"></div>
    </div>
        </div>
    </div>
</body>
</html>
