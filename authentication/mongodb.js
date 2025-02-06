const mongoose = require('mongoose');
mongoose.connect("mongodb://localhost:27017/LoginSignUp")
.then(()=>{
console.log("mongodb connected");
})
.catch(()=>{
    console.log("failed to connect")
})

const LoginInShema=new mongoose.Schema({
    name:{
        type:String,
        required:true
    },
    password:{
        type:string,
        required:true
    }
})

const collection=new mongoose.mode("Collection1",LoginInShema)
module.exports=collection