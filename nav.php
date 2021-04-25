<html>
<head>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="images/logo2.png" alt="icon" width="86">
    
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><svg class="lnr lnr-menu"><use xlink:href="#lnr-menu"></use></svg></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-about">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-prices">
          <a class="nav-link active" aria-current="page" href="#">Prices</a>
        </li>
        <li class="nav-portfolio">
          <a class="nav-link active" aria-current="page" href="#">Portfolio</a>
        </li>
        <li class="nav-team">
          <a class="nav-link active" aria-current="page" href="#">Team</a>
        </li>
        <li class="nav-cont">
          <a class="nav-link active" aria-current="page" href="#">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#"><span class="lnr lnr-user"></span>Login</a></li>
            <li><a class="dropdown-item disabled" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item disabled" href="#">Quit</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<style>
@import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');

.d-flex input {
  width: 240px;
  font-family: 'Blinker', sans-serif;
  font-size: 18px;
  padding: 16px;
  border: 0;
  border-radius: 20px;
}

.btn {
  color: white;
  width: 108px;
  border-radius: 16px;
  border: 2px solid cyan;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
}

.form-control:focus {
  transition: .2s ease-out;
  width: 272px;
  background: black;
  color: white;
  border-bottom: 2px solid white;
  border-radius: 0;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  outline: none;
}
.form-control {
  transition: .1s ease-out;
  width: 128px;
  outline: none;
}

.btn:hover {
background: cyan;
color: black;
border: 2px solid cyan;
}

.navbar-toggler {
  background: black;
}

.navbar-toggler-icon {
  color: white;
}

.navbar-nav {
  background: black;
  margin: 0;
  padding: 32px;
  border-radius: 16px;
}

.navbar .dropdown-menu {
border-radius: 16px;
font-family: 'Poppins', sans-serif;
font-size: 18px;
padding: 24px;

}

.navbar .dropdown-menu a {
  transition: .2s ease-out;
}

.navbar .dropdown-menu li {
  margin-bottom: 16px;
}

.navbar {
    position: fixed;
    height: 100px;
    width: 100%;
    animation-name: navAppear;
    animation-duration: 1s;
    z-index: 9999999999;
    background-color:black;
}

.navbar .dropdown-menu a:hover {
  color: rgb(132, 0, 255);
  font-size: 20px;
  transition: .2s ease-out;
}

@keyframes navAppear {
    0% {
        opacity: 0;
        margin-top: -100px;
    }
}

.container-fluid {
    
}


.navbar .nav-link {
    font-family: 'Blinker', sans-serif;
    font-size: 22px;
    margin-left: 16px;
    color:white;

   background-image: linear-gradient(cyan 50%, cyan 50%), linear-gradient(black 50%, black 50%);
   background-position: center bottom;
   background-repeat: no-repeat;
   background-size: 0 2px, 100% 2px;
   padding-bottom: 10px;
   transition: .5s ease-in-out;
}

.navbar .nav-link:hover {
    transition: .1s ease-out;
    color: white;
    background-size: 100% 2px, 100% 2px;
   color: cyan;
}
</style>
</html>