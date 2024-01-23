<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Wrapper for the navbar -->
    <div id="navbar-wrapper" class="w-100 bg-white px-3 position-fixed">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg w-100 mx-auto py-0 d-flex justify-content-between">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand py-3">
                <img id="logo" src="/images/dc-logo.png" alt="DC logo">
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Spacer -->
                <div class="w-100"></div>

                <!-- Navbar Links -->
                <ul class="navbar-nav mb-2 mb-lg-0 justify-self-end">
                    <!-- Loop through navbarLinks array -->
                    @foreach ($links as $link)
                    <li class="nav-item fw-bold">
                        <!-- Individual Navbar Link -->
                        <a aria-current="page" href="#">{{ $link['title'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <div id="navbar-spacer"></div>
</body>

</html>

<style>
    /* CSS for the navbar wrapper */
    #navbar-wrapper {
        position: relative;
        z-index: 99;
        transition: all 0.3s ease-in-out;
    }

    /* Spacer height for the navbar */
    #navbar-spacer {
        height: 135px;
    }

    /* CSS for images with transition and width */
    img {
        transition: all 0.3s ease-in-out;
        width: 103px;
    }

    /* Styles for the navigation bar */
    nav {
        max-width: 1400px;
        display: flex !important;
        justify-content: space-between !important;
    }

    /* Styles for the unordered list */
    ul {
        gap: 30px !important;
        height: 100% !important;
    }

    li {
        height: 1.3em;
        overflow: hidden;
    }

    /* Styles for the links in the list items */
    li a {
        color: #484c51;
        text-decoration: none;
        border-bottom: 6px solid transparent;
        transition: all 0.3s ease-in-out;
    }

    /* Styles for the links when hovered */
    li a:hover {
        color: #0c7cec;
    }

    /* Styles for the active link */
    li a.active {
        color: #0c7cec;
        border-color: transparent;
    }

    /* Media query for screens larger than 992px */
    @media screen and (min-width: 992px) {

        li {
            height: auto;
            overflow: visible;
        }

        /* Additional styles for the links in the media query */
        li a {
            padding-top: 58px;
            padding-bottom: 53px;
        }

        /* Additional styles for the links when hovered in the media query */
        li a:hover {
            color: #0c7cec;
        }

        /* Additional styles for the active link in the media query */
        li a.active {
            color: #0c7cec;
            border-color: #0c7cec;
        }
    }
</style>