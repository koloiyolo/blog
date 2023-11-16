<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="comments/comments.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="comment_section">
        <div class="comments">
            comment
            <br>
            <br>
            <div id="publish_comment">
                <h2>Publish Your Comment</h2>
                <form action='comments/controller.php' method='post'
                    onsubmit="captcha(event)">
                    <input class='name' type='text' name='name' placeholder="Your name">
                    <br>
                    <input type='text' name='text' placeholder="Your comment">
                    <br>
                    <input type='submit' value='Public'>
                </form>
                <div class="capdiv">
                    <p id="cap"></p>
                    <input type='text' id='captcha' placeholder="Your answer">
                </div>
            </div>
        </div>
    </div>
</body>
<script>


    let var1 = getRandomInt(10);
    let var2 = getRandomInt(10);
    let operator = getRandomInt(4);
    let output = "captcha: ";
    let answer;

    switch (operator) {
        case 1:
            output += var1 + " + " + var2 + " =   ";
            answer = var1 + var2;
            break;
        case 2:
            output += var1 + " - " + var2 + " =   ";
            answer = var1 - var2;
            break;
        case 3:
            output += var1 + " * " + var2 + " =   ";
            answer = var1 * var2;
            break;
        case 4:
            output += "floor(" + var1 + " / " + var2 + ") =   ";
            answer = Math.floor(var1 / var2);
            break;
    }

    document.getElementById('cap').textContent = output;

    function getRandomInt(max) {
        return Math.floor(Math.random() * max) + 1;
    }

    function captcha() {
        let captcha = document.getElementById('captcha').value;
        if (parseInt(captcha) === answer) {
            alert('Validation sucessfull');
        } else {
            alert('frick you');
            event.preventDefault();
        }
    }
</script>

</html>