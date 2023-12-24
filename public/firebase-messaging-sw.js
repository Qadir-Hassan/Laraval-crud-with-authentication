// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBAD23vkX-iiClONwxdID5yL45UHtF5PQY",
  authDomain: "laraval-crud.firebaseapp.com",
  projectId: "laraval-crud",
  storageBucket: "laraval-crud.appspot.com",
  messagingSenderId: "976811095853",
  appId: "1:976811095853:web:f793da4b142d9d8b7845a4",
  measurementId: "G-RFLGW27MBQ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);