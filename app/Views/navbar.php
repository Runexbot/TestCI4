<!-- <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a href="/" class="navbar-brand">
            <!-- Logo Image -->
            <img src="https://www.dewacloud.com/wp-content/uploads/2022/11/8-dewacloud-vertical-logo-flat-version-tagline-dark-bg.png" width="100" alt="" class="d-inline-block align-middle mr-2">
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse fs-5" style="margin-left: 200px;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Wordpress as a Service</a></li>
                        <li><a class="dropdown-item" href="#">Kubernetes as a Service</a></li>
                        <li><a class="dropdown-item" href="#">Moodle LMS as a Service</a></li>
                    </ul>
                </li>
                <li class="nav-item active"><a href="#" class="nav-link text-white">Features</a></li>
                <li class="nav-item"><a href="<?= base_url('/support'); ?>" class="nav-link text-white">Support</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Contact Us</a></li>
                <button type="button" class="btn btn-primary text-white" style="width: 100px; height: 45px; margin-left: 250px;">Sign In</button>
            </ul>
        </div>
    </div>
</nav>