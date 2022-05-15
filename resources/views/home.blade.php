{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head> --}}

@extends('layouts.userLayout')
@section('content')

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            background-color: white;
            margin: 0px;
            overflow-x: hidden;

        }

        .nav-bar {
            background: #0597F2;
            display: flex;
            justify-content: space-between;
            height: 70px;
            align-items: center;
            width: 100vw;
        }

        .nav-bar a {
            color: white;
            font-family: Lato;
            font-size: 24px;
            font-weight: 500;
        }

        .logo {
            margin-left: 40px;
            margin-right: 20px;
        }

        .logo a {
            font-family: Roboto;
            font-size: 24px;
            font-weight: 900;
        }

        .logo a span {
            color: #F2A81D;
        }

        .inner-nav-bar {
            display: flex;
            justify-content: center;
        }

        .inner-nav-bar div {
            margin-left: 20px;
            margin-right: 20px;
        }

        .inner-nav-bar div a:link {
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }


        .inner-nav-bar div a:hover {
            text-decoration: underline;
        }

        .auth-redirect-button {
            margin-right: 40px;
        }

        .auth-redirect-button button {
            padding: 12px 28px;
            border-radius: 15px;
            background: #F2A81D;
            color: white;
            text-transform: none;
            border: none;
            font-family: Lato;
            font-size: 14px;
            font-weight: 700;
        }

        .auth-redirect-button button:hover {
            padding: 12px 28px;
            border-radius: 15px;
            background: #C28819;
            color: white;
            text-transform: none;
            border: none;
            font-family: Lato;
            font-size: 14px;
            font-weight: 700;
        }

        .above-the-fold {
            width: 100vw;
            height: 80vh;
            background: url("../../images/homepage/above-the-fold-bg.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        .above-the-fold svg {
            align-self: flex-end;
        }

        .main-content {
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            padding-left: 100px;
            padding-top: 100px;
        }

        .main-content h1 {
            font-family: Roboto;
            font-size: 25px;
            font-weight: 700;
            color: white;
        }

        .main-content h1 span {
            font-family: Roboto;
            font-size: 25px;
            font-weight: 700;
            color: #2171A3;
        }

        .main-content p {
            font-family: Roboto;
            font-size: 14px;
            font-weight: 700;
            color: white;
        }

        .main-content-buttons {
            margin-top: 30px;
        }

        .main-content button {
            padding: 12px 28px;
            border-radius: 15px;
            background: #F2A81D;
            color: white;
            text-transform: none;
            border: none;
            font-family: Lato;
            font-size: 14px;
            font-weight: 700;
        }

        .watch-button {
            margin-left: 30px;
        }

        .double-chevron {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .below-fold-heading {
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .below-fold-heading h1 {
            font-family: Roboto;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            color: #2171A3;
        }

        .below-fold-heading h1 span {
            font-family: Roboto;
            font-size: 20px;
            font-weight: 700;
            color: #F2A81D;
        }

        .below-fold-content {
            padding-left: 400px;
            padding-right: 400px;
            margin-bottom: 70px;
        }

        .below-fold-content p {
            font-family: Roboto;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            color: #A3A3A3;
        }

        .card-holder {
            display: flex;
            justify-content: space-between;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: 100px;
        }

        .card {
            background-color: #F6F6F6;
            border-radius: 20px;
            margin-left: 40px;
            margin-right: 40px;
            width: 500px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .card h2 {
            font-family: Roboto;
            font-size: 16px;
            font-weight: 700;
            color: #2171A3;
            text-align: center;
        }

        .card p {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 700;
            color: #A3A3A3;
            text-align: center;
        }

        .card button {
            margin-top: 15px;
            padding: 12px 28px;
            border-radius: 15px;
            background: #F2A81D;
            color: white;
            text-transform: none;
            border: none;
            font-family: Lato;
            font-size: 14px;
            font-weight: 700;
        }

        .footer {
            display: flex;
            flex-direction: column;
        }

        .curve {
            background-color: #014773;
            width: 100vw;
        }

        .below-the-fold-2 {
            background-color: #014773;
            display: flex;
            justify-content: space-around;
        }

        .curve-2 {
            background: rgba(76, 175, 80, 0);
            width: 100vw;
        }

        .double-chevron-div {
            background-color: white;
            width: 100vw;
        }

        .footer-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 50px;
        }

        .footer-section p {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 700;
            color: white;
            text-align: center;
        }

        .about-us-li {
            display: flex;
            align-items: center;
        }

        h3 {
            font-family: Roboto;
            font-size: 18px;
            font-weight: 700;
            color: white;
            text-align: center;
        }

        .about-us-li a {
            font-family: Roboto;
            font-size: 10px;
            font-weight: 700;
            color: white;
            text-align: left;
            margin-left: 20px;
        }

        .footer-section a {
            font-family: Roboto;
            font-size: 10px;
            font-weight: 700;
            color: white;
            text-align: left;
            margin-left: 20px;
        }

        .second-footer-section {
            align-items: flex-start;
        }
    </style>

    {{-- <div class="nav-bar">
        <div class="logo"><a>E-s<span>o</span>ma</a></div>
        <div class="inner-nav-bar">
            <div><a href="">Home</a></div>
            <div><a href="">E-library</a></div>
            <div><a href=" {{ url('/eclassroom') }}">E-classroom</a></div>
            <div><a href="">About Us</a></div>
            <div><a href="">Blog</a></div>
        </div>
        <div class="auth-redirect-button">
            <button>Get started</button>
        </div>
    </div> --}}

    <div class="above-the-fold">
        <div class="main-content">
            <div>
                <h1><span>Studying</span> online is now much easier</h1>
            </div>
            <div>
                <p>E-soma is an interesting platform that will teach you in an interactive way</p>
            </div>
            <div class="main-content-buttons">
                <button class="join-button">Join for free</button>
                <button class="watch-button">Watch how it works</button>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,224L60,229.3C120,235,240,245,360,240C480,235,600,213,720,224C840,235,960,277,1080,272C1200,267,1320,213,1380,186.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>

    </div>

    <div class="double-chevron-div">
        <svg class="double-chevron" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
            <path fill="#0597F2"
                d="M15.1746043,8.1203717 C15.3842672,7.94066062 15.6999172,7.96494139 15.8796283,8.17460431 C16.0593394,8.38426723 16.0350586,8.69991723 15.8253957,8.8796283 L12.3253957,11.8796283 C12.1381508,12.0401239 11.8618492,12.0401239 11.6746043,11.8796283 L8.17460431,8.8796283 C7.96494139,8.69991723 7.94066062,8.38426723 8.1203717,8.17460431 C8.30008277,7.96494139 8.61573277,7.94066062 8.82539569,8.1203717 L12,10.8414611 L15.1746043,8.1203717 Z M15.1746043,12.1203717 C15.3842672,11.9406606 15.6999172,11.9649414 15.8796283,12.1746043 C16.0593394,12.3842672 16.0350586,12.6999172 15.8253957,12.8796283 L12.3253957,15.8796283 C12.1381508,16.0401239 11.8618492,16.0401239 11.6746043,15.8796283 L8.17460431,12.8796283 C7.96494139,12.6999172 7.94066062,12.3842672 8.1203717,12.1746043 C8.30008277,11.9649414 8.61573277,11.9406606 8.82539569,12.1203717 L12,14.8414611 L15.1746043,12.1203717 Z" />
        </svg>
    </div>

    <div class="below-the-fold-1">
        <div class="below-fold-heading">
            <h1>All-in-one <span>Educational Platform</span></h1>
        </div>
        <div class="below-fold-content">
            <p>We have provided a platform to enable Kenyan students to easily access learning materials. We offer an
                e-classroom service to allow teachers to better manage their students and classes. In addition, we offer
                an e-library service that allows students to access and download revision material as well as topical
                notes for all classes from PP1 to form 4.</p>
        </div>
        <div class="below-fold-heading">
            <h1>What does E-soma have to offer?</h1>
        </div>
        <div class="card-holder">
            <div class="card">
                <div class="icon-1">
                    <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M95 47.5C95 73.7335 73.7335 95 47.5 95C21.2665 95 0 73.7335 0 47.5C0 21.2665 21.2665 0 47.5 0C73.7335 0 95 21.2665 95 47.5Z"
                            fill="#0597F2" />
                        <path
                            d="M66 53.5625V29.9375C66 27.7629 64.2243 26 62.0357 26H36.9286C32.5497 26 29 29.5257 29 33.875V60.125C29 64.4743 32.5497 68 36.9286 68H63.3571C64.8165 68 66 66.8245 66 65.4488C66 64.4874 65.4543 63.6835 64.6786 63.2258V56.5517C65.4879 55.7609 66 54.7273 66 53.5625ZM40.8185 36.5H56.6757C57.4768 36.5 58.0714 37.0906 58.0714 37.8125C58.0714 38.5344 57.4768 39.125 56.75 39.125H40.8185C40.1661 39.125 39.5714 38.5344 39.5714 37.8125C39.5714 37.0906 40.1661 36.5 40.8185 36.5ZM40.8185 41.75H56.6757C57.4768 41.75 58.0714 42.3406 58.0714 43.0625C58.0714 43.7844 57.4768 44.375 56.75 44.375H40.8185C40.1661 44.375 39.5714 43.7844 39.5714 43.0625C39.5714 42.3406 40.1661 41.75 40.8185 41.75ZM60.7143 62.75H36.9286C35.4692 62.75 34.2857 61.5745 34.2857 60.125C34.2857 58.6755 35.4692 57.5 36.9286 57.5H60.7143V62.75Z"
                            fill="white" />
                    </svg>
                </div>
                <div>
                    <h2>E-library service</h2>
                </div>
                <div>
                    <p>E-soma offers students the opportunity to download academic content ranging from past papers to
                        revision notes from the comfort of their own homes.</p>
                </div>
                <div>
                    <button>Check it out</button>
                </div>
            </div>
            <div class="card">
                <div class="icon-2">
                    <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M95 47.5C95 73.7335 73.7335 95 47.5 95C21.2665 95 0 73.7335 0 47.5C0 21.2665 21.2665 0 47.5 0C73.7335 0 95 21.2665 95 47.5Z"
                            fill="#2171A3" />
                        <path
                            d="M48.725 36.5814C47.7892 36.5386 46.9429 37.2085 46.8808 38.1135C46.8172 39.0195 47.5398 39.8003 48.4938 39.8003C54.241 40.1556 59.218 44.8743 59.5938 50.3196C59.6536 51.1887 60.4169 51.8557 61.3238 51.8557C61.3611 51.8557 61.3995 51.8536 61.4378 51.8514C62.3932 51.7937 63.118 51.0104 63.0559 50.1051C62.5783 43.1355 56.1467 37.0403 48.725 36.5814ZM49.1875 30C47.9084 30 46.875 30.98 46.875 32.1915C46.875 33.403 47.9106 34.3831 49.1875 34.3831C58.1123 34.3831 65.375 41.2658 65.375 49.7238C65.375 50.9353 66.4106 51.9153 67.6875 51.9153C68.9644 51.9153 70 50.9353 70 49.7238C70 38.8483 60.6633 30 49.1875 30ZM45.4514 45.5325C44.3963 45.3339 43.4062 46.1488 43.4062 47.1624V50.612C43.4062 51.314 43.9213 51.8701 44.6167 52.0571C45.9269 52.5194 46.8757 53.7267 46.8757 55.0773C46.8757 56.8921 45.322 58.3029 43.4062 58.3029C41.4912 58.3029 39.9368 56.8305 39.9368 55.0773V38.2182C39.9368 37.3108 39.1599 36.6362 38.2017 36.6362L34.7322 36.6367C33.7769 36.576 33 37.3142 33 38.2182V55.141C33 61.2704 38.9359 66.1123 45.6465 64.7769C49.5763 63.9893 52.748 60.9759 53.5812 57.264C54.8387 51.6482 50.9074 46.5598 45.4514 45.5325Z"
                            fill="white" />
                    </svg>
                </div>
                <div>
                    <h2>Educational website blog</h2>
                </div>
                <div>
                    <p>Get the latest local academic news from the E-soma blog which is maintained daily by our amazing
                        and devoted staff.</p>
                </div>
                <div>
                    <button>Check it out</button>
                </div>
            </div>
            <div class="card">
                <div class="icon-3">
                    <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M95 47.5C95 73.7335 73.7335 95 47.5 95C21.2665 95 0 73.7335 0 47.5C0 21.2665 21.2665 0 47.5 0C73.7335 0 95 21.2665 95 47.5Z"
                            fill="#F2A81D" />
                        <path
                            d="M47.5 32.75C48.2288 32.75 48.825 33.3547 48.825 34.0937V35.4375H50.15C50.8788 35.4375 51.475 36.0422 51.475 36.7812C51.475 37.5203 50.8788 38.125 50.15 38.125H47.5C46.7713 38.125 46.175 37.5203 46.175 36.7812V34.0937C46.175 33.3547 46.7713 32.75 47.5 32.75ZM60.485 30.2355L70.8863 32.5064C72.7081 32.9935 74 34.6228 74 36.5125V60.9687C74 63.1943 72.2195 65 70.025 65H24.975C22.7796 65 21 63.1943 21 60.9687V36.5125C21 34.6228 22.2944 32.9935 24.1129 32.5064L34.515 30.2355L46.0259 22.4513C46.8458 21.8496 48.0797 21.8496 48.9741 22.4513L60.485 30.2355ZM42.2 65H52.8V56.9375C52.8 53.9728 50.4233 51.5625 47.5 51.5625C44.5767 51.5625 42.2 53.9728 42.2 56.9375V65ZM28.95 38.125C28.2179 38.125 27.625 38.7297 27.625 39.4687V44.8437C27.625 45.5828 28.2179 46.1875 28.95 46.1875H31.6C32.3288 46.1875 32.925 45.5828 32.925 44.8437V39.4687C32.925 38.7297 32.3288 38.125 31.6 38.125H28.95ZM62.075 44.8437C62.075 45.5828 62.6713 46.1875 63.4 46.1875H66.05C66.7788 46.1875 67.375 45.5828 67.375 44.8437V39.4687C67.375 38.7297 66.7788 38.125 66.05 38.125H63.4C62.6713 38.125 62.075 38.7297 62.075 39.4687V44.8437ZM28.95 48.875C28.2179 48.875 27.625 49.4797 27.625 50.2187V55.5937C27.625 56.3328 28.2179 56.9375 28.95 56.9375H31.6C32.3288 56.9375 32.925 56.3328 32.925 55.5937V50.2187C32.925 49.4797 32.3288 48.875 31.6 48.875H28.95ZM62.075 55.5937C62.075 56.3328 62.6713 56.9375 63.4 56.9375H66.05C66.7788 56.9375 67.375 56.3328 67.375 55.5937V50.2187C67.375 49.4797 66.7788 48.875 66.05 48.875H63.4C62.6713 48.875 62.075 49.4797 62.075 50.2187V55.5937ZM47.5 29.3906C43.4753 29.3906 40.2125 32.6996 40.2125 36.7812C40.2125 40.8629 43.4753 44.1719 47.5 44.1719C51.5247 44.1719 54.7875 40.8629 54.7875 36.7812C54.7875 32.6996 51.5247 29.3906 47.5 29.3906Z"
                            fill="white" />
                    </svg>
                </div>
                <div>
                    <h2>E-Classroom and Learning Management System (LMS) Service</h2>
                </div>
                <div>
                    <p>With our LMS service, teachers are able to manage their students academic progress with ease as
                        well as maintain organized student and class records.</p>
                </div>
                <div>
                    <button>Check it out</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#014773" fill-opacity="1"
                d="M0,96L40,96C80,96,160,96,240,117.3C320,139,400,181,480,176C560,171,640,117,720,96C800,75,880,85,960,101.3C1040,117,1120,139,1200,128C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>

        {{-- <div class="below-the-fold-2">
            <div class="footer-section">
                <div class="logo"><a>E-s<span>o</span>ma</a></div>
                <div>
                    <p>© 2018 - 2021 Esoma Solutions. All Rights Reserved</p>
                </div>
            </div>
            <div class="footer-section second-footer-section">
                <div>
                    <h3>About Esoma-KE</h3>
                </div>
                <div class="about-us-li">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.5 6.75C13.5 10.4779 10.4779 13.5 6.75 13.5C3.02208 13.5 0 10.4779 0 6.75C0 3.02208 3.02208 0 6.75 0C10.4779 0 13.5 3.02208 13.5 6.75ZM7.5 3.75C7.5 4.16421 7.16421 4.5 6.75 4.5C6.33579 4.5 6 4.16421 6 3.75C6 3.33579 6.33579 3 6.75 3C7.16421 3 7.5 3.33579 7.5 3.75ZM7.5 10.5V6H6V10.5H7.5Z"
                            fill="white" />
                    </svg>
                    <div><a>About us</a></div>
                </div>
                <div class="about-us-li">
                    <svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 6.00003L5.71249 7.71252C5.86123 7.86126 6.10886 7.83674 6.22554 7.66172L8.66666 4.00003M6.26261 0.779245L10.2055 2.46907C10.4786 2.5861 10.6413 2.86972 10.6044 3.16452L10.1958 6.43378C10.07 7.44018 9.56656 8.36122 8.7874 9.01052L6.42679 10.9777C6.17955 11.1837 5.82044 11.1837 5.57321 10.9777L3.21259 9.01052C2.43343 8.36122 1.93002 7.44018 1.80421 6.43378L1.39556 3.16452C1.35871 2.86971 1.52138 2.5861 1.79446 2.46907L5.73738 0.779245C5.90508 0.707374 6.09491 0.707374 6.26261 0.779245Z"
                            stroke="white" stroke-width="1.33333" stroke-linecap="round" />
                    </svg>
                    <div><a>Privacy Policy</a></div>
                </div>
                <div class="about-us-li">
                    <svg width="14" height="14" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.0625 10H9C10.1785 10 10.7678 10 11.1339 9.63388C11.5 9.26777 11.5 8.67851 11.5 7.5V4.375C11.5 3.19649 11.5 2.60723 11.1339 2.24112C10.7678 1.875 10.1785 1.875 9 1.875H4C2.82149 1.875 2.23223 1.875 1.86612 2.24112C1.5 2.60723 1.5 3.19649 1.5 4.375V11.5625C1.5 10.6996 2.19956 10 3.0625 10ZM9.78921 6.41421C10.5703 5.63317 10.5703 4.36684 9.78921 3.58579C9.00817 2.80474 7.74184 2.80474 6.96079 3.58579L5.86557 4.68101C5.08051 4.05869 3.93629 4.11028 3.21079 4.83579C2.42974 5.61683 2.42974 6.88316 3.21079 7.66421L3.75368 8.20711C4.92525 9.37868 6.82475 9.37868 7.99632 8.20711L9.78921 6.41421Z"
                            fill="white" />
                        <path
                            d="M11.5 13.125H5.25M3.0625 10H9C10.1785 10 10.7678 10 11.1339 9.63388C11.5 9.26777 11.5 8.67851 11.5 7.5V4.375C11.5 3.19649 11.5 2.60723 11.1339 2.24112C10.7678 1.875 10.1785 1.875 9 1.875H4C2.82149 1.875 2.23223 1.875 1.86612 2.24112C1.5 2.60723 1.5 3.19649 1.5 4.375V11.5625C1.5 10.6996 2.19956 10 3.0625 10ZM9.78921 6.41421C10.5703 5.63317 10.5703 4.36684 9.78921 3.58579C9.00817 2.80474 7.74184 2.80474 6.96079 3.58579L5.86557 4.68101C5.08051 4.05869 3.93629 4.11028 3.21079 4.83579C2.42974 5.61683 2.42974 6.88316 3.21079 7.66421L3.75368 8.20711C4.92525 9.37868 6.82475 9.37868 7.99632 8.20711L9.78921 6.41421Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <div><a>Our Terms of Service</a></div>
                </div>
            </div>
            <div class="footer-section second-footer-section">
                <div>
                    <h3>Our Socials</h3>
                </div>
                <div>
                    <a>Facebook</a>
                </div>
                <div>
                    <a>Youtube</a>
                </div>
                <div>
                    <a>Twitter</a>
                </div>
                <div>
                    <a>Mail</a>
                </div>
            </div>
            <div class="footer-section">
                <div>
                    <h3>Get in touch</h3>
                </div>
                <div>
                    <div><a>0716 858 334</a></div>
                </div>
                <div>
                    <div><a>admin@esomake.co.ke</a></div>
                </div>
            </div>
        </div> --}}
    </div>

</body>

@endsection