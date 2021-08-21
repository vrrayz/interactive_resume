<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;500&display=swap" rel="stylesheet">

    <title>My Portfolio!</title>
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
            font-weight: lighter;
            background-color: rgb(245, 245, 245);
            color: rgb(78, 78, 78);
        }

        .intro-section {
            margin-top: 25vh !important;
        }

        .profile-details {
            font-size: 16px;
        }

        .intro {
            height: 100vh;
            background-image: url('vic.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
        }

        .about-me-title{
            position: relative;
        }
        .about-me-title::before {
            content: "";
            position: absolute;
            height: 3px;
            background-color: rgb(0, 120, 255);
            width: 50px;
            bottom: -12px;
        }

        @media (max-width: 1024px) {
            .profile-details {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid mx-3 mx-md-5">
            <a class="navbar-brand" href="#">
                <img src="/zuri.jpeg" alt="logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid bg-light intro py-5 mb-5">
            <div class="container-fluid py-5 my-5 mx-md-0 text-center intro-section">
                <p class="display-4 text-light fw-bold"> <span id="introText"></span> </p>
                <p class="text-light h4"><span id="subIntroText"></span></p>
            </div>
        </div>
        <div class="container">
            <div class="card mb-5" id="about">
                <div class="card-body py-5">
                    <div class="row mx-1 my-3 mx-lg-4">
                        <div class="col-md-6 fs-6 mb-3">
                            <div class="row mb-3 profile-details">
                                <div class="col-md-6 pe-0">
                                    <img src="short_pic.jpeg" alt="profile" class="img-fluid img-thumbnail mb-3"
                                        width="150" height="150">
                                </div>
                                <div class="col-md-6 ps-lg-0">
                                    <p class="card-text fw-light"><span class="fw-bold">Name: </span>Victor Okonkwo</p>
                                    <p class="card-text fw-light"><span class="fw-bold">Profile: </span>Fullstack Web
                                        Developer</p>
                                    <p class="card-text fw-light"><span class="fw-bold">Email:
                                        </span>emmyvic98@gmail.com</p>
                                    <p class="card-text fw-light"><span class="fw-bold">Phone: </span>+2348112212981</p>
                                </div>
                            </div>
                            <div class="d-md-none">
                                <h5 class="fw-bold mb-3">Skill</h5>
                                HTML
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                                CSS
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                </div>
                                JavaScript
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                </div>
                                PHP
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                                MYSQL
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h3 class="about-me-title">About me</h3>
                            <p class="card-text fw-light mt-4">
                                I have a very good knowledge of basic web development
                                technologies.
                                I love teamwork, i'm fun to be around.
                                Currently an Intern at HNGi8
                            </p>
                        </div>
                        <div class="col-md-8 mx-auto d-none d-md-block">
                            <h5 class="fw-bold mb-3">Skill</h5>
                            HTML
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                            CSS
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                            </div>
                            JavaScript
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                            </div>
                            PHP
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                            MYSQL
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3" id="work">
                <h3 class="text-center">PORTFOLIO</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/test-files/campuslodges.png" class="card-img-top" alt="campuslodges">
                            <div class="card-body">
                                <h5 class="card-title">CampusLodges</h5>
                                <p class="card-text">Simple way to grant accomodation to students</p>
                                <a href="https://campuslodges.com" target="_blank" class="btn btn-primary">View Live Link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/test-files/home-intrusion-system.png" class="card-img-top" alt="home-intrusion-system">
                            <div class="card-body">
                                <h5 class="card-title">Home Intrusion System</h5>
                                <p class="card-text">Monitor your home from anywhere!</p>
                                <a href="https://github.com/vrrayz/Home-Intrusion-System" target="_blank" class="btn btn-primary">View Code Base</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="/test-files/fund-my-laptop.png" class="card-img-top" alt="fund-my-laptop">
                            <div class="card-body">
                                <h5 class="card-title">Fund My Laptop</h5>
                                <p class="card-text">Contributions to one the Hngi7 projects</p>
                                <a href="https://github.com/vrrayz/Fund-My-Laptop-BE" target="_blank" class="btn btn-primary">View Code
                                    Base</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="card">
                    <div class="card-body py-5">
                            <h3 class="about-me-title">Contact Me</h3>
                        <form class="mt-5">
                            <div class="mb-3">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="inputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="inputSubject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="inputSubject">
                            </div>
                            <div class="mb-3">
                                <label for="inputSubject" class="form-label">Message</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-light text-center py-3 mt-3">
        GrimSavage 2021
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script>
        function typeWrite(intro, isHeaderText = false, speed = 100, id) {
            var fullText = ''
            var i = 0;
            var txt = intro
            let count = 0
            setInterval(() => {
                if (Array.isArray(intro)) {
                    txt = intro[count]
                }
                if (i < txt.length) {
                    document.getElementById(id).innerHTML += txt.charAt(i);
                    fullText += txt.charAt(i);
                    i++;
                }
                if (isHeaderText == false) {
                    if (i == txt.length) {
                        fullText = fullText.replace(fullText, fullText.substring(0, fullText.length - 1))
                        document.getElementById(id).innerHTML = fullText;
                    }
                    if (fullText == '' && i >= txt.length) {
                        i = 0
                        count++;
                        if (Array.isArray(intro) && count >= intro.length) {
                            count = 0
                        }
                    }
                }
                // console.log(count)
            }, speed);
        }
        let arrayOfWords = ['Fullstack Web Dev ', 'Intern at HNGi8 ', 'Backend Developer at Campuslodges.com ']
        typeWrite('I am Victor Okonkwo ', true, 100, 'introText')
        setTimeout(function () { typeWrite(arrayOfWords, false, 140, 'subIntroText') }, 2000)
    </script>
</body>

</html>