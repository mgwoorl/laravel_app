<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>firstLaravelProject</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14pt;
            background-color: #F8F8FF;
            color: #2F4F4F;
        }
        header {
            padding: 10px;
            text-align: center; 
        }
        ul {
            list-style-type: none;
            
            display: flex; 
            flex-direction: row;
            justify-content: center;
        }

        .menu a {
            text-decoration: none; 
            margin: 0 10px; 
            color: #2F4F4F;
            font-size: 16pt;
        }

        .menu a:hover {
            color: #FF4500; 
        }

    
        footer {
            text-align: center; 
  	    position: fixed;
 	    left: 0;
  	    bottom: 0;
  	    width: 98%;
  	    height: 50px;
	    padding: 10px;

        }
        
        .form{
            margin: 20px;
            padding-bottom: 16px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ADD8E6;
        }

        th {
            background-color: #ADD8E6;
            font-weight: bold;
            padding: 10px;
        }
        
        button {
            background-color: #2F4F4F;
            color: #F8F8FF;
            border: 0px;
            border-radius: 10px;
            width: 110px;
            height: 30px;
        }
        
        button:active {
            background-color: #FF4500;
        }

	.block {
	    border: 1px solid #2F4F4F;
	    border-radius: 8px;
	    padding: 10px;
	    margin-top: 5px;
	}
</style>
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>