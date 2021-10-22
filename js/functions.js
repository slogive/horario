
function DivSize() {
    let DivHorario = document.getElementById("Horario");
    let DivHorarioBotton = document.getElementById("HorarioBotton");
    let DivSizeCalc = DivHorario.scrollWidth + "px";
    DivHorarioBotton.style.width = DivSizeCalc; 
    console.log(DivSizeCalc);
} 

function openHorario() {
    window.open("horario","_top");
}
