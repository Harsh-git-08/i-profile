<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>blockchain</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('resources/css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Blockchain</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Introduction to <br> Blockchain</h2>

                        <div class="d-flex align-items-center mt-5">
                            <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read
                                More</a>

                            <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="topics-detail-block bg-white shadow-lg">
                            <img src="{{ asset('resources/img/topics/undraw_Remote_design_team_re_urdx.png') }}"
                                class="topics-detail-block-image img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 m-auto">
                        <div class="post-content">
				
                            <p>What is Blockchain <a href="https://harshgadhiya.in/">technology</a>?</p>
                            
                            
                            
                            <p>Today, We are going to explore what the term “Blockchain” actually stands for.</p>
                            
                            
                            
                            <p>It simply means “a chain of blocks”. Let’s explore this definition. For example, we all use social media like Instagram, Facebook, and Twitter. we might be thinking that our personal pieces of information like email-password are safe. but there is a 99% chance that the admin of the database may change anyone’s id-password. This is a point where blockchain technology comes into the picture. Imagine Someone wants to change your information but he needs a majority of permissions to make his intention succeed. actually, this is called a blockchain. It was a higher idea but in technical terms, <br><br>” blockchain technology is a distributed database management system of a growing list of records called blocks. Each block has a timestamp and hash to the previous block. “</p>
                            
                            
                            
                            <p>or</p>
                            
                            
                            
                            <p>“Blockchain is a technology that allows data to be stored in a decentralized manner. meaning that no one has the authority to control the data.”</p>
                            
                            
                            
                            <p>Let’s clarify this with an example. RBI has the authority to control Indian ruppe world-widely. But Bitcoin is not controlled by any authority as it is dependent on blockchain technology which is decentralized.<br>Every block in the chain is made of three parts.<br>1) Data to be stored.<br>2) Hash (To make it unique)<br>3) previous Hash (To be linked with chain)<br>characteristics of blockchain technology:</p>
                            
                            
                            
                            <p>1) Security: As mentioned earlier that each block is linked to the previous block, meaning that if someone wants to change your details, Each block has to be changed, because if one makes changes there, means the chain has been broken. so this makes the whole system decentralized. That’s why it can be considered as secure.</p>
                            
                            
                            
                            <p>2) immutability: immutable means unchangeable. meaning that once data is added to the chain, it can not be removed or changed. And it will be always accurate and reliable.</p>
                            
                            
                            
                            <p>3) Transparency: Since your data is distributed, it is transparent, which is proof of your security. All transactions on a blockchain are recorded in a public ledger, which means that anyone can view them. This provides transparency and accountability.</p>
                            
                            
                            
                            <p>Use-cases of blockchain technology.</p>
                            
                            
                            
                            <p>1) hospital management system:<br>In the healthcare sector, blockchain can be used to store medical data, because patient data should not be stored in a centralized manner. So it will have more accessibility and reliability.</p>
                            
                            
                            
                            <p>2) Trading: When suppliers and consumers have trust issues with each other, smart contracts of blockchain can be used here. These contracts are based on blockchain.</p>
                            
                            
                            
                            <p>3)Government database management: Blockchain can be used to create secure and transparent records of government transactions. This could help to reduce corruption and improve accountability.</p>
                                                            </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="h-6">
            @include('layout.footer')
        </div>
    </main>


    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('resources/blog-listing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/blog-listing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resources/blog-listing/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('resources/blog-listing/js/custom.js') }}"></script>

</body>

</html>
