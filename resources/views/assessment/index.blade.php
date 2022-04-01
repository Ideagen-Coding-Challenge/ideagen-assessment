<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ideagen Assessment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
            <div class="p-3">

                <h2>SECTION I: Candidate Related</h2>
                <p>
                   <b>Question: - 1</b> 
                    How much experience in Laravel? Are you Beginner, Expert or Intermediate?
                    </p>
                    <p>
                        3 Years ++, Im an expert.
                    </p>
    
                   <hr>
    
                <p>
                   <b>Question: - 2</b> 
                    How much experience in Front End? Are you Aware of Bootstrap, Jquery, Javascript e.t.c? 
                    </p>
    
                <p>Yes, mostly used those stack to develop industrial project and other framewrok that i love is Flutter.</p>
    
                <hr>
    
                <p>
                   <b>Question: - 3</b> 
                    Have you experience in programming language other than PHP-Laravel?
                    </p>
    
                <p>Yes, during training in Honda, i used to develop in ASP .Net, and during my professional career i used flutter to build cross platform Android and IOS for Industrial and SME`s project.</p>
    
                <hr>

                <h2>SECTION II: Theoretical/Logical</h2>
                <form action="{{URL::to('assessment/similarDoubleChar')}}" method="post">
                @csrf
    
                <input type="text" class="form-control" name="string_arr">
    
                <button type="submit">GO!</button>
    
                </form>
    
                <div>
                    {{isset($count) ? ''.$count.' doubles array are in array' : ''}}
                </div>
    
                <hr>
    
                <form action="{{URL::to('assessment/vowelConsonant')}}" method="post">
                @csrf
    
                <input type="text" class="form-control" name="string_char">
    
                <button type="submit">GO!</button>
    
                </form>
    
                <div>
                    {{isset($countVowel) ? ''.$countVowel.' Vowel in array' : ''}}
                </div>
    
                <div>
                    {{isset($countConsonant) ? ''.$countConsonant.' Consonant in array ' : ''}}
                </div>
                <hr>
    
    
    
                <form action="{{URL::to('assessment/integerPattern')}}" method="post">
                @csrf
    
                <input type="text" class="form-control" name="string_integer">
    
                <button type="submit">GO!</button>
    
                </form>
    
                <div>
                    {{isset($lisPattern) ? ''.$lisPattern.'' : ''}}
                </div>
    
                <hr>
    
            
                <p><b>Question 4 - </b> what is eloquent?</p>
                <p>Eloquent is an object relational mapper (ORM) that comes with the Laravel framework by default. </p>
                <hr>
                <p><b>Question 5 - </b> Define Laravel guard.</p>
                <p>Guards is used to determine how users are authenticated. In laravel, guard can be customize according to our database table name. By default laravel use Users table as the guard in the framework to work with authentication. </p>
                <hr>
                <p><b>Question 6 - </b> What is named route?</p>
                <p>Named route can be a pointer to controller, view and route. It used to redirects to the specific routes</p>
                <hr>
    
    <h2>SECTION III: Analytical </h2>
               <p> <b>Question: - 1</b> 
    Apply any arithmetic operation, there can be more than one solution.
    1.	0 0 0 = 6
    2.	1 1 1 = 6
    3.	2 2 2 = 6
    4.	3 3 3 = 6
    5.	4 4 4 = 6
    6.	5 5 5 = 6
    7.	6 6 6 = 6
    8.	7 7 7 = 6
    9.	8 8 8 = 6
    10.	9 9 9 = 6
    
    Example: 2+2+2 = 6</p>
    <p></p>
    
    <p><b>Question: - 2</b> 
    How much equal slices we will get by cutting a cake three times?</p>
    <p>3</p>
    
    <p><b>Question: - 3</b> 
    There are two jackets and three persons, how each person will wear it for 20 days per each month?</p>
    <p>Only 2 ways, because there is only 2 jackets</p>
    
    <p><b>Question: - 4</b> 
    There is a room with three lamps, with three switches outside. How do you find which switch matches which lamp if you can only enter the room once?</p>
    <p>Switch on only one switch and observe which lamp is turn on.</p>

            </div>
            


          
        </div>
    </body>
    <script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </script>
</html>
