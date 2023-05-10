const testForm = document.getElementById("testForm");
const boxOne = document.getElementById("boxOne");
const boxTwo = document.getElementById("boxTwo");
const boxThree = document.getElementById("boxThree");
function submit(){
    testForm.submit();
}

boxOne.addEventListener("change", submit);
boxTwo.addEventListener("change", submit);
boxThree.addEventListener("change", submit);