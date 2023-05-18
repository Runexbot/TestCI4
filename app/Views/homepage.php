<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="base mt-2 p-5">
    <div class="text-white" style="width: 53%;">
        <h2>Secure & Cost-Efficient Cloud Platform for Business. ISO 27001 Certified.</h2>
        <h4>Cut Downtime, Cost and Complexity with Dewacloud.</h4>
    </div>

    <div class="form mt-5">
        <form class="row g-3">
            <div class="col-auto">
                <input type="text" class="form-control form-control-lg" id="inputemail" placeholder="Enter Your Email">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-lg mb-3">Start Free Trial</button>
            </div>
        </form>
    </div>

    <div class="card mt-3">
        <div class="row bg-black">
            <div class="col-sm-6 mb-3 mb-sm-0 bg-black" style="border-color: black;">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-title text-primary">HOT DEAL!</h5>
                        <h3 class="card-subtitle mb-2 text-black">Free Credits Up to IDR 5 Million!</h3>
                        <p class="card-text">Mulai jalankan aplikasi Anda di Dewacloud dengan saldo kredit GRATIS hingga IDR 5 juta. Yuk klaim saldo kreditmu sekarang!</p>
                        <a href="#" class="card-link text-success">Claim Now >></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0 bg-black">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-title text-primary">NEED CONSULTATION?</h5>
                        <h3 class="card-subtitle mb-2 text-black">Free Consultation with Our Specialist</h3>
                        <p class="card-text">Konsultasikan kebutuhan cloud Anda dengan tim spesialis dari Dewacloud untuk mendapatkan solusi terbaik bagi bisnis Anda.</p>
                        <a href="#" class="card-link text-success">Consult now >></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?= $this->endSection() ?>