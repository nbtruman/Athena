const testForm = document.getElementById("testForm");
const statuses = [
    document.getElementById("boxOne"),
    document.getElementById("boxTwo"),
    document.getElementById("boxThree")
];

function submit(){
    testForm.submit();
}

statuses.forEach(element => {
    element.addEventListener("change", setTimeout(submit, 5000));
});
