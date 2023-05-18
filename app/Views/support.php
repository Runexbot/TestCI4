<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="support p-3 d-flex justify-content-center">

    <div class="row d-flex justify-content-center" style="width: 100%;">
        <h1 class="text-white">Frequently Asked Question</h1>

        <div class="card mt-5">
            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                <h4>Apa itu Dewacloud?</h4>
            </div>
            <div class="card-body collapse" id="collapseExample1">
                <blockquote class="blockquote mb-0">
                    <p>DEWACLOUD adalah platform cloud next generation untuk para Developers dan DevOps yang menyukai kemudahan (simplicity) dalam melakukan pekerjaannya. Dengan perkembangan teknologi application development dan CI/CD yang semakin canggih dan juga mengarah ke multi cloud dan hybrid deployments, kompleksitas semakin bertambah dan resources yang dibutuhkan untuk mengelola ini semakin banyak dan mahal.

                        DEWACLOUD menyediakan solusi untuk menjawab tantangan ini dengan memberikan kemudahan, fleksibitas dan full control untuk para Developers dan DevOps dalam mengelola application development lifecycle dalam satu integrated dashboard yang intuitif dan user-friendly.

                        DEWACLOUD didukung oleh salah satu provider cloud hosting terbaik di Indonesia yaitu DEWAWEB yang sudah tersertifikasi ISO 27001 untuk standard keamanan informasi kelas dunia dan juga terkenal dengan kualitas layanannya maupun teknologi cloud yang mumpuni dan high performance.</p>
                </blockquote>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                <h4>Apa kelebihan Dewacloud dibanding dengan AWS, GCP, Azure atau Alibaba Cloud?</h4>
            </div>
            <div class="card-body collapse" id="collapseExample2">
                <blockquote class="blockquote mb-0">
                    <p>Ada 8 kelebihan Dewacloud dibanding cloud hyperscalers lain:

                        Developer Friendly GUI and CLI
                        Cost Efficient & No Hidden Charge
                        Free Unlimited Bandwidth Inbound & Outbound
                        Easy Automatic Vertical & Horizontal Scaling
                        Powerful DevOps Automation
                        Free Premium Anti-DDoS Network Protection
                        Monitored 24×7 by Dewaguard SOC Team
                        Fast & Friendly Local Support 24×7</p>
                </blockquote>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                <h4>Apakah teknologi container di Dewacloud sudah aman?</h4>
            </div>
            <div class="card-body collapse" id="collapseExample3">
                <blockquote class="blockquote mb-0">
                    <p>Ya, Dewacloud menggunakan Certified Managed Containers, berisi pre-configured managed software stacks spt Java, PHP, Node.js, Python, web servers, databases, load balancers, dll. Setiap software stack ini sudah diamankan secara optimal dan Anda pun bisa melakukan upgrade versi dengan mudah hanya dengan beberapa click saja.

                        Mengamankan Docker container bukan hal yang mudah. Dengan Dewacloud, security hardening ini sudah dilakukan secara otomatis sehingga menghemat waktu Anda. Konfigurasi firewall di setiap container juga bisa dilakukan dengan mudah.</p>
                </blockquote>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                <h4>Apakah Dewacloud menyediakan SSL gratis?</h4>
            </div>
            <div class="card-body collapse" id="collapseExample4">
                <blockquote class="blockquote mb-0">
                    <p>Ya, Dewacloud menyediakan gratis Let’s Encrypt SSL yang bisa di-install dengan hanya satu kali klik dan akan di-renew secara otomatis. Anda juga bisa melakukan instalasi SSL berbayar dengan mudah dari dashboard Dewacloud.</p>
                </blockquote>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>