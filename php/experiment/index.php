<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMX Search Demo</title>
    <!-- Include HTMX library -->
<script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    <style>
    body {
    font-family: system-ui, sans-serif;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.lecturer {
    background: rgba(0,0,0,0.1);
    border-radius: 1000000px;
    padding-left: 1rem;
    padding-right: 1rem;
}
#search-results {
display: flex;
justify-content: center;
flex-direction: column;
gap: 35px;
max-width: 850px;
margin-left: auto;
margin-right: auto;
margin-bottom: 3rem;
}
    </style>
</head>
<body>

<h1>Automatický vyhledávací systém lektorů™ 2.0</h1>

<!-- Search form with htmx attributes -->
<form hx-get="search.php" hx-trigger="submit" hx-target="#search-results">
    <input type="text" id="search" name="q" required>
    <button type="submit">🔎</button>
</form>
<!-- Container to display search results -->
<div id="search-results">
    <!-- Results will be displayed here -->
</div>
<a href="slimshadex.html">njoooooo</a>

</body>
</html>
