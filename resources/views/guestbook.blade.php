<!DOCTYPE html>
<html>
    <head>
        <title>Guest Book</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
        
        <div id="guestbook">
            
            <article v-repeat="messages">
                <h3> @{{ name }} </h3>
                <div> @{{ message }}</div>
            </article>
            
            <pre>
                @{{ $data | json }}
            </pre>
            
        </div>
        <script src="/js/vendor.js"></script>
        <script src="/js/guestbook.js"></script>
    </body>
</html>
