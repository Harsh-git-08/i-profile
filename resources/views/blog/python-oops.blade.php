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

    <title>Python-oops</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('resources/css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <style>
        pre{
            background-color: #eee;
        }
    </style>
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
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Python OOPs</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Introduction to <br> Python-oops</h2>

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


                </header>
                    <div class="topics-detail-section section-padding">
                        <header class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12 m-auto">


                                    <h1 class="entry-title" itemprop="name headline">Python-oops</h1>
                                    <aside class="post-meta">
                                        <a href="https://harshgadhiya.in/author/admin/" title="Posts by Harsh"
                                            rel="author">Harsh</a> on
                                        August 28, 2023
                                    </aside>
                        
                        <div class="post-content">
                            <p>Understanding Object-Oriented <a
                                    href="https://harshgadhiya.in/what-is-programming/">Programming</a>
                                in Python<br>
                                When it comes to writing code, there are two main approaches:</p>
                            <p>1) Procedural-Oriented Programming (POPs)<br>
                                This is function-based programming, where code is organized into functions. It lacks
                                concepts like
                                virtual functions and function hiding.</p>
                            <p>2) Object-Oriented Programming (OOPs)<br>
                                OOP revolves around objects. It’s a more advanced form of programming where the program
                                is
                                structured around objects. OOP introduces concepts like virtual functions and function
                                hiding, and
                                it stands on four pillars:</p>
                            <p>A) Inheritance<br>
                                B) Encapsulation<br>
                                C) Abstraction<br>
                                D) Polymorphism</p>
                            <p>In this blog, we’ll delve into Python’s implementation of object-oriented programming.
                            </p>
                            <p>What Exactly is Object-Oriented Programming?<br>
                                OOP is in high demand, especially in larger companies, due to its ability to elegantly
                                solve complex
                                problems. One standout feature is code reusability, allowing functions to be easily
                                added, removed,
                                updated, or deleted. It aligns perfectly with the “DRY” (Don’t Repeat Yourself)
                                principle, enabling
                                code to be reused without redundancy.</p>
                            <p>At the core of OOP is the concept of an object, which is an instance of a class. A class
                                serves as a
                                blueprint for methods or data storage. Multiple objects, each an entity of the same
                                class, can be
                                created to efficiently manage and organize code.</p>
                            <p>By harnessing OOP principles in Python, you can create more organized, efficient, and
                                maintainable
                                code for tackling complex problems.</p>
                            <p><strong>Real <a href="https://harshgadhiya.in/">World</a> Example:</strong></p>
                            <p>Imagine you’re developing a game similar to PUBG. In this game, there’s a main player and
                                99 enemies,
                                all with the same abilities like running, walking, firing, and jumping. Now, instead of
                                creating all
                                100 players individually every time the game starts, you can take a smarter approach.
                            </p>
                            <p>You can design a blueprint of a player, which includes all the common methods and
                                functionalities
                                they share (like running, walking, firing, and jumping). This blueprint is like a
                                template or a set
                                of instructions. Then, when the game begins, you use this blueprint to create 100
                                instances of
                                players. Each instance follows the same set of instructions but represents a separate
                                player in the
                                game.</p>
                            <p>This concept is called Object-Oriented Programming (OOP). It allows you to create a
                                single design
                                (the blueprint) and reuse it multiple times (the instances) to make the game’s
                                development more
                                organized, manageable, and efficient.</p>
                            <h5>Creating an blueprint of player that holds all common methods and data.</h5>
                            <pre>class Player:
    name = 'Adam'
    def to_run(self):
        print(f'{self.name} is running')

    def to_fire(self):
        print(f'{self.name} is firing')

    def to_jump(self):
        print(f'{self.name} is jumping')</pre>
                            <p>We set the Adam as default name. We use ‘self’ keyword as a parameter while making
                                functions into
                                the class. In above code snippet, We have successfully created a player blueprint that
                                holds some
                                methods. </p>
                            <p>Creating instance / entity of class. and executing the different methods, we created in
                                the class.
                            </p>
                            <pre>Adam = Player()
Adam.to_run()
Adam.to_fire()
Adam.to_jump()</pre>
                            <h2>Output</h2>
                            <pre>Adam is running
Adam is firing
Adam is jumping
</pre>
                            <p class="py-3"><em>Note:- About self keyword:</em><br>
                                <strong>The self keyword in refers to the instance of the class that a method is being
                                    called on.
                                    It’s used within methods of a class to access the instance variables and other
                                    attributes of
                                    that particular instance. In other words, self allows you to refer to the object
                                    itself that the
                                    method is operating on. In addition, we can replace self keyword with
                                    anyword.</strong>
                            </p>
                            <h5>As mentioned before we can create multiple instances of a class. and even execute those
                                methods with
                                new instances. In below code, we have changed the defualt name ‘Adam’ into Instance
                                player name.
                            </h5>
                            <pre>Player_two = Player()
Player_two.name = 'Eve'
Player_three = Player()
Player_three.name = 'Kelly'
Player_four = Player()
Player_four.name = 'John'
Player_two.to_fire()
Player_three.to_jump()
Player_four.to_run()  
</pre>
                            <h2>Output</h2>
                            <pre>Eve is firing
Kelly is jumping
John is running
</pre>
                            <p><em>Note:- If have written Player.name() instead of self.name(), The name would have not
                                    been
                                    changed. We will see default set name everytime.</em></p>
                            <h1 style="text-align: center;">Inheritance</h1>
                            <p>In the realm of Object-Oriented Programming (OOP), inheritance reflects the real-world
                                concept quite
                                aptly. Just as you inherit traits from your parents, in OOP, you can establish a
                                hierarchy of
                                classes that share attributes and behaviors.</p>
                            <p>Imagine a base class called Player, encompassing methods like run, jump, and fire. Now,
                                envision
                                introducing specialized classes: MalePlayer and FemalePlayer. These subclasses possess
                                unique
                                attributes – such as height and hair length – yet they still share the core methods from
                                the Player
                                class.</p>
                            <p>The beauty here lies in not needing to rewrite common methods for each subclass. Through
                                inheritance,
                                both MalePlayer and FemalePlayer can effortlessly access the methods present in the
                                Player class.
                            </p>
                            <pre>
class MalePlayer(Player):
    def height(self):
        print('Male character has longer height.')
    
class FemalePlayer(Player):
    def hair(self):
        print('Female character has longer hair.')
    
    
samual = MalePlayer()
marry = FemalePlayer()
    
samual.height()
samual.to_fire()
marry.hair()
marry.to_jump()
</pre>
                            <h2>Output</h2>
                            <pre>Male character has longer height.
Adam is firing
Female character has longer hair.
Adam is jumping
</pre>
                            <p><em>Note:- The Methods from MalePlayer can’t be Inherited from FemalePlayer as we have
                                    only inherited
                                    the class ‘Player’.</em></p>
        </header>
        </div>
        </div>
        </div>
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
