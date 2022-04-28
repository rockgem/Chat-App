import { getDatabase, ref, set } from "firebase/database";
import { initializeApp } from 'firebase/app';

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAI6ly_ZksyUtERGLSXwK1pFJIEogyNoJ8",
  authDomain: "chat-app-50fbc.firebaseapp.com",
  databaseURL: "https://chat-app-50fbc-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "chat-app-50fbc",
  storageBucket: "chat-app-50fbc.appspot.com",
  messagingSenderId: "450379239219",
  appId: "1:450379239219:web:2706ed1e6eef7bab627846",
  measurementId: "G-4MTNZ6X860"
};
  
firebase.initializeApp(firebaseConfig);
var database = firebase.database();


function sendMessage() {
  console.log('hello');
    // get message
    var message = document.getElementById("message").value;

    // save in database
    firebase.database().ref("messages").push().set({
        "sender": myName,
        "message": message
    });

    // prevent form from submitting
    return false;
}