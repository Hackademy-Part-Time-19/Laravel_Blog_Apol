
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const containerKER = document.getElementById("Kericontainer");

signUpButton.addEventListener("click", () => {
    containerKER.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
    containerKER.classList.remove("right-panel-active");
});



function calamar(){
    document.getElementById("calamar").style.display="none"
}


function OpenLogin() {
    document.getElementById("RegistrazioneUtente").style.display = "flex";
};

function CloseLogin() {
    document.getElementById("RegistrazioneUtente").style.display = "none";
};



