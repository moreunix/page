<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{url('css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/index.css')}}">
    <title>more unix</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand">
            <a class="navbar-brand" href="/" id="home">more unix</a>
            <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/about">About</a>
        </nav>

        <h1 class="message">more freedom, more education, more humanity and more unix.</h1>

        <br/>

        <h2>Check this: <a href="/blog/lpi4noobs">lpi4noobs</a>!</h2>

        <br/>

        <h3>Follow us clicking <a href="https://twitter.com/moreunix">here</a>.</h3>
    </div>
    <script>
        function typeWrite(element){
            const textoArray = element.innerHTML.split('');
                element.innerHTML = ' ';
                textoArray.forEach(function(letter, i){   
                
                setTimeout(function(){
                    element.innerHTML += letter;
                }, 75 * i)

            });
        }
        
        const title = document.querySelector('.message');
        typeWrite(title);
    </script>
</body>
</html>