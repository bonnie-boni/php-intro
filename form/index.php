<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <style>
        form{
            margin: 1rem 4rem;
        }
    </style>
</head>
<body>
    
    <form action="form.php" method="post">

        <h1> Contact </h1>

        <label for="title"> Name </label> <br><br>
        <input type="text" name="name" id="name" placeholder="Enter your name...">
        <br><br>

        <label for="title"> Message </label> <br><br>
        <textarea name="text" id="text" cols="50" rows="10" placeholder="Enter your Message..."></textarea> <br><br>

        <label for="title"> Priority </label> <br><br>
        <select name="priority" id="priority">
            <option> High </option>
            <option> Medium </option>
            <option> Low </option>
        </select>
        <br><br>

        <fieldset>
            <legend> Type </legend>
                <label><input type="radio" value="Complaint" id="Complaint" name="radio"> Complaint </label> <br>
                <label><input type="radio" value="Suggestion" id="Suggestion" name="radio"> Suggestion </label> <br>
        </fieldset>
        <br><br>

        <input type="checkbox" id="terms" name="terms" required> <label> I agree to the terms and conditions </label>
        <br><br>

        <input type="submit" value="Send">


    </form>
</body>
</html>