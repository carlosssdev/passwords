# Password Manager App

This is a web application for managing passwords. It allows the user to create, store, and export passwords.

## Technologies Used

The application uses the following technologies:

- HTML
- CSS
- JavaScript
- PHP

and tools being:

- jQuery
- CryptoJS
- Firebase

## Usage

To run the application, simply open the `index.html` file in a web browser.

On the home page, there are two buttons: "Create Database" and "Load Database". 

- The "Create Database" button allows the user to create a new password database. Once clicked, the button will disappear and the password manager will appear, allowing the user to manage their passwords.
- The "Load Database" button allows the user to load an existing password database. Upon clicking the button, the user will be prompted to select a JSON file to upload. After the user selects the file, they will be prompted to enter their master password. If the password is correct, the password database will be loaded and the user will be able to manage their passwords.

Once a password database is loaded or created, the user can add, view, and edit passwords. The password manager also allows the user to export the password database as a JSON file for backup purposes.

## Code Explanation

The first section of the code imports the required technologies, including jQuery, CryptoJS, and Firebase.

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
```

The next section initializes Firebase and sets up the password manager functionality. This section includes functions for rendering passwords, copying passwords to the clipboard, encrypting and decrypting password data, saving data to the Firebase database, and downloading password data as a JSON file.

The `config.php` file is included to provide the Firebase configuration. Note that the Firebase credentials provided in the `config.php` file are for testing purposes only and should not be used in a production environment.

```html
<script>
$(document).ready(function() {
    // Initialize Firebase
    $.ajax({
        url: 'config.php',
        dataType: 'json',
        success: function(config) {
            firebase.initializeApp(config);

            // function definitions here...

        },
        error: function() {
            alert("Error fetching Firebase configuration.");
        }
    });
});
</script>
```

Finally, the HTML and CSS for the password manager app are defined. The app includes a container for the main content, buttons for creating and loading password databases, and a container for displaying passwords.

```html
<body>
  <div class="container">
    <h1>Password Manager</h1>
    <div id="buttons-container">
         <button id="create-button">Create Database</button>
   	 <button id="load-button">Load Database</button>
    </div>
    <div id="content-container" data-simplebar></div>
  </div>
  <!-- scripts go here -->
</body>
```

```css
body {
    font-family: Arial, sans-serif;
    background-color: #24292e;
    color: #fff;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 30px;
}

#buttons-container {
    margin-bottom: 30px;
}

#buttons-container button {
    margin-right: 10px;
    background-color: #0366d6;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 5px;
}

#buttons-container button:hover {
    background-color: #0058a3;
}

#content-container {
    display: none;
}

/* etc. */
```
