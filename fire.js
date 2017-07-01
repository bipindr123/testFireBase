// Initialize Firebase
var config = {
    apiKey: "AIzaSyDi1w-MHCTSWtxDZU8AloQexBCWpHNxOcY",
    authDomain: "testphp-e136c.firebaseapp.com",
    databaseURL: "https://testphp-e136c.firebaseio.com",
    projectId: "testphp-e136c",
    storageBucket: "",
    messagingSenderId: "603290260630"
};
firebase.initializeApp(config);

// Get a reference to the database service
var database = firebase.database();