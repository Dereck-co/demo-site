<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/js/scripts.min.js"></script>
</head>

<body>
    <form name="loginForm">
        <input type="text" name="user">
        <input type="text" name="pass">
        <input type="submit" value="ok">
        <button type="submit">click</button>
    </form>

    <script>
        // loginForm.addEventListener('submit', function(event) {
        //     console.log('on submit!!');

        //     event.preventDefault();
        // });
        function doResult(res) {
            console.log('doResult:', res);
        }


        loginForm.onsubmit = function(event) {
            let form = event.target;
            console.log('form', form);
            let formData = new FormData(form);
            let postData = Object.fromEntries(formData);
            console.log('postData', postData);
            fetch('/test/tesfetch', {
                body: JSON.stringify(postData),
                cache: 'no-cache',
                method: 'POST',
                headers: {
                    'content-type': 'application/json ',
                    "X-Requested-With": "XMLHttpRequest"
                },
            }).then(response => response.json()).then(doResult);
            event.preventDefault();
        }

    </script>

</body>

</html>