<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <title>Mail-Sender</title>
    </head>
    <body class="antialiased">
        <h1>Mail Sender 2000!</h1>

        <form action="{{ route('send') }}" method="POST">
            @method('POST')
            @csrf
            <input required type="email" name="email" placeholder="Target email"><br>
            <input type="text" name="link" placeholder="Link of the post"><br>
            <input required type="text" name="subject" placeholder="Subject"><br>
            <button id="submit" type="submit">OK</button>
        </form>
    </body>
    <script>
        let link = location.href
        let splited = link.split('/send');
        
        if (link.indexOf('/send') > -1){
            location.href = splited[0];
        }
    </script>
</html>
