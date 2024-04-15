<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Government of Dominica | Success</title>
    <style>
        @@font-face {
            font-family: 'Inter';
            src: url('../Content/fonts/Inter/Inter-Regular.ttf');
        }
        @@font-face {
            font-family: 'InterB';
            src: url('../Content/fonts/Inter/Inter-Bold.ttf');
        }

        .appBox {
            width: 731px;
            height: 120px;
            margin: 56px 124px 91px 125px;
            padding: 5px 29.9px 23px 21px;
            border-radius: 10px;
            border: solid 1px #a1cf5f;
        }
        .container {
            display: grid;
            grid-template-columns: 5% 50% 20% 20%;
            grid-gap: 10px;
            align-items: center; /* aligns the items vertically in the center of each column */
        }

        .androidL {
            /*        width: 116.1px;
            height: 39.6px;*/
            margin: 0 0 0.4px 14.7px;
            object-fit: contain;
        }

        .appleL {
            /*        width: 138.2px;
            height: 39.8px;*/
            margin: 0.2px 14.7px 0 0;
            object-fit: contain;
        }

        .The-Official-Tourism {
            width: 313px;
            height: 34px;
            margin: 1px 19px 3px 19px;
            font-family: Inter;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: 0.84px;
            color: #000;
        }

        .imgx1024 {
            padding-top: 15px;
            width: 60px;
            height: 60px;
            margin: 2px 19px 0 0;
            object-fit: contain;
        }
        .checkM {

            width: 60px;
            height: 60px;
            margin: 2px 19px 0 0;
            object-fit: contain;
        }
        .Download-Explore-Dom {
            width: 300px;
            height: 24px;
            margin: 0 0 0 0;
            font-family: Inter;
            font-size: 20px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: 1.2px;
            color: #000;
        }
    /*    .appBox {
            width: 731px;
            height: 80px;
            margin: 56px 124px 91px 125px;
            padding: 5px 29.9px 23px 21px;
            border-radius: 10px;
            border: solid 1px #a1cf5f;
            background-color: rgba(0, 0, 0, 0.4);
        }*/

        .required{
            width: 698px;
            height: 40px;
            margin: 25px 0 0;
            font-family: Inter;
            font-size: 16px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: 0.96px;
            text-align: center;
            color: #000;
        }

            .required .text-style-1 {
                color: #3aaf4a;
            }
        .thankyou {
            width: 640px;
            height: 98px;
            margin: 24px 29px 25px;
            font-family: InterB;
            font-size: 40px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: 2.4px;
            text-align: center;
            color: #000;
        }
        .grid-container {
            display: grid;
          place-items: center;
            /*  margin: 0 240px 1px;
           position: relative;*/
            top: 130px;
        }
    </style>
</head>
<body>
    <div class="">
        <div class="card-body" style="text-align:center">
            <img src='{{ asset('Content/Images/logoAB.png') }}' style="width: 20%" /> </br/>
            <h3 style="padding-top:15px"> </h3>
        </div>
        <body>

            <div style="text-align:center">
                <span class="">
                    <img src="{{ asset('Content/pinkCheck.png') }}" class="checkM" />
                </span>
            </div>
            <div class="grid-container">
                <span class="thankyou">
                    Thank you for completing your immigration form!
                </span>
                <span class="required">
                    Thank you for completing your immigration form. Please note a receipt has been downloaded and sent to your email.
                    <span class="text-style-1">
                        Please print or save
                    </span> on your phone to present to the Immigration officer upon arriving at your destination.
                    Alternatively, your receipt can be downloaded by <a href="{{ route('pdf-download') }}" target="_blank">" clicking here. </a>

                    Enjoy your trip!
                </span>
                <div class="appBox">
                    <div class="container">
                        <img src="{{ asset('Content/exploreDomLogo.png') }}" class="imgx1024" />
                        <span class="The-Official-Tourism"><p class="Download-Explore-Dom">Download Explore Dominica</p>The Official Tourism App of Dominica to Start your Adventure Now!</span>
                        <img src="{{ asset('Content/apple.png') }}" class="appleL" width="150px">
                        <img src="{{ asset('Content/google.png') }}" class="androidL" width="155px">
                    </div>
                </div>
            </div>


        </body>

    </div>
</body>
</html>
