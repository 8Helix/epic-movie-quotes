<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin: 0;">
    <div style="background: linear-gradient(187.16deg, #181623 0.07%, #191725 51.65%, #0D0B14 98.75%); width: 100%; height: 723px; font-family: Helvetica Neue;">
        <div style="text-align: center; padding-top: 80px;">
            <svg style="text-align: center" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11C22 16.3158 17.0748 20.625 11 20.625C9.91052 20.6265 8.82556 20.485 7.77287 20.2043C6.96987 20.6112 5.126 21.3923 2.024 21.901C1.749 21.945 1.54 21.659 1.64863 21.4032C2.13538 20.2537 2.57538 18.722 2.70738 17.325C1.023 15.6338 0 13.42 0 11C0 5.68425 4.92525 1.375 11 1.375C17.0748 1.375 22 5.68425 22 11ZM9.89175 9.30325C9.80112 9.16798 9.6965 9.04262 9.57963 8.92925C9.39586 8.74001 9.17677 8.58866 8.93475 8.48375L8.92375 8.47825C8.59811 8.32705 8.24327 8.24914 7.88425 8.25C6.567 8.25 5.5 9.27575 5.5 10.5421C5.5 11.8071 6.567 12.8329 7.88425 12.8329C8.35588 12.8329 8.7945 12.7022 9.16438 12.4754C8.976 13.0103 8.62813 13.5809 8.05062 14.1529C7.99623 14.206 7.95328 14.2696 7.92442 14.34C7.89556 14.4103 7.8814 14.4858 7.88281 14.5618C7.88423 14.6378 7.90119 14.7127 7.93265 14.7819C7.96412 14.8511 8.00941 14.9131 8.06575 14.9641C8.30363 15.1841 8.68038 15.1772 8.91 14.9504C10.7443 13.123 10.7937 11.1581 10.2039 9.85462C10.1172 9.66195 10.0127 9.47781 9.89175 9.30463V9.30325ZM15.125 12.4754C14.938 13.0103 14.5887 13.5809 14.0112 14.1529C13.9569 14.2061 13.9141 14.2698 13.8853 14.3402C13.8566 14.4106 13.8426 14.4861 13.8441 14.5621C13.8457 14.6381 13.8628 14.7129 13.8943 14.7821C13.9259 14.8512 13.9713 14.9132 14.0278 14.9641C14.2642 15.1841 14.641 15.1772 14.8706 14.9504C16.7049 13.123 16.7544 11.1581 16.1659 9.85462C16.0788 9.66192 15.9738 9.47778 15.8524 9.30463C15.7618 9.16886 15.6572 9.04304 15.5402 8.92925C15.3565 8.73999 15.1374 8.58863 14.8954 8.48375L14.8844 8.47825C14.5592 8.32725 14.2048 8.24934 13.8462 8.25C12.5304 8.25 11.462 9.27575 11.462 10.5421C11.462 11.8071 12.5304 12.8329 13.8462 12.8329C14.3179 12.8329 14.7565 12.7022 15.1264 12.4754H15.125Z" fill="#D9D9D9"/>
            </svg>
            <p style="font-size: 12px; font-weight: 500; color: #DDCCAA;">Movie quotes</p>
        </div>
        <div style="margin-top: 73px; margin-left: 11.9%;  color: #fff;">
            <p>Hola {{ $username }}!</p>
            <p style="margin-top: 24px;">Thanks for joining Movie quotes! We really appreciate it. Please click the button below to verify your account:</p>
            <a href="{{ $url }}" style="margin-top: 32px;">
                <button style="padding: 7px 13px; background-color: #E31221; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Verify account</button>
            </a>
            <p style="margin-top: 40px;">If clicking doesn't work, you can try copying and pasting it to your browser:</p>
            <p style="margin-top: 24px; color: #DDCCAA">{{ $url }}</p>
            <p style="margin-top: 40px;">If you have any problems, please contact us: support@moviequotes.ge</p>
            <p style="margin-top: 24px;">MovieQuotes Crew</p>
        </div>
   </div>
</body>
</html>
