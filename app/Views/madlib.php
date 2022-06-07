<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MadLib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 36px;
            line-height: 2.0;
        }
        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 64px;
        }
        .blank {
            background: rgba(0,128,128, 0.1);
            padding: 0.25em 0.5em;
            border-bottom: 4px solid rgba(0,128,128,1.00);
        }
        .container {
            padding: 3rem 10rem;
        }
    </style>
</head>
<body>
    <div class="container border mt-5 shadow">

        <h1 class="text-center">&#9753; MadLib &#10087;</h1>

        <p>Today I went to my favorite Taco Stand called the <span class="blank">{{ adjective }}</span>
            <span class="blank">{{ animal }}</span>. Unlike most food stands, they cook and prepare the food in a
            <span class="blank">{{ ride-in }}</span> while you comment. The best thing on the menu
            is the <span class="blank">{{ color }}</span> <span class="blank">{{ noun }}</span>. Instead of
            ground beef they fill the taco with <span class="blank">{{ foods-2 }}</span>, cheese, and top
            it off with a salsa made from <span class="blank">{{ foods-1 }}</span>. If that doesn't make
            your mouth water, then it's just like <span class="blank">{{ person }}</span> always says:
            <span class="blank">{{ saying }}</span>!
        </p>
    </div>
</body>
</html>
