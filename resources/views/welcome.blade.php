<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    <div>
    </div>
        <div id="app">
              <app :fooditems="{{$fooditems}}"></app>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.4.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.4.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

 <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
 <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>

</html>
