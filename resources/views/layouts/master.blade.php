<!DOCTYPE html>
<html>
<head>
	<title>Scrabble Calculator: Calculate your Word Score!</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="css/scrabble.css" type='text/css'>
    @stack('head')
</head>
<body>
	<header>
	    <h1>Scrabble Calculator: Find out your Word Score!</h1>
		<br>
		<img src="image/scrabble.png" alt="scrabble">
        <br>
        <br>
	</header>
    <form method='GET' action='/calculate'>
        <label for='word'>Your Word: </label>
        <input type='text' name='word' id='word' value=''>
        <br>
        <br>
        <label> Bonus Points: </label>
        <br>
        <input type='radio' name='bonus' value='none' checked> None
        <br>
        <input type='radio' name='bonus' value='double'> Double Word Score
        <br>
        <input type='radio' name='bonus' value='triple'> Triple Word Score
        <br>
        <br>
        <label for='bingo'>Include 50 point bingo? </label>
        <input type='checkbox' name='bingo' value='false' id='bingo'>
        <br>
        <br>
        <input type='submit' class='button' value='Calculate'>
    </form>
        @stack('body')
    <footer>
            @yield('footer')
    </footer>
</body>

</html>
