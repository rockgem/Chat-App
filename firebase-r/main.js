


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


const db = firebase.database();
const msgRef = db.ref("/msgs"); 
//to store data in the msgs folder by creating a reference in database


const msgScreen = document.getElementById("messages"); //the <ul> that displays all the <li> msgs
const msgForm = document.getElementById("messageForm"); //the input form
const msgInput = document.getElementById("msg-input"); //the input element to write messages
const msgBtn = document.getElementById("msg-btn"); //the Send button



let n="";
function init() {
  n = prompt("Please enter your name");
}

document.addEventListener('DOMContentLoaded', init);

function sendMessage(e){
  e.preventDefault();
  const text = msgInput.value;

    if(!text.trim()) return alert('Please type a message'); //no msg submitted
    const msg = {
        name: n,
        text: text
    };

    msgRef.push(msg);
    msgInput.value = "";
}

const updateMsgs = data =>{
  const {dataName, text} = data.val(); //get name and text

  //load messages, display on left if not the user's name. Display on right if it is the user.
  const msg = `<li class="${dataName == n ? "msg my": "msg"}"><span class = "msg-span">
    <i class = "name">${n}: </i>${text}
    </span>
  </li>`

  msgScreen.innerHTML += msg; //add the <li> message to the chat window

  //auto scroll to bottom
  document.getElementById("chat-window").scrollTop = document.getElementById("chat-window").scrollHeight;
}

msgRef.on('child_added', updateMsgs);