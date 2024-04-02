/* information.html */
/************information******************/
let infoc1 = document.querySelector("#info__block1c");
let buttonc1 = document.querySelector("#but1c");

let infoc2 = document.querySelector("#info__block2c");
let buttonc2 = document.querySelector("#but2c");

let infoc3 = document.querySelector("#info__block3c");
let buttonc3 = document.querySelector("#but3c");

let infoc4 = document.querySelector("#info__block4c");
let buttonc4 = document.querySelector("#but4c");

buttonc1.onclick = function(){
    infoc1.classList.remove('d_none');
    infoc2.classList.add('d_none');
    infoc3.classList.add('d_none');
    infoc4.classList.add('d_none');

    buttonc1.classList.add('active__point');
    buttonc2.classList.remove('active__point');
    buttonc3.classList.remove('active__point');
    buttonc4.classList.remove('active__point');
}

buttonc2.onclick = function(){
    infoc2.classList.remove('d_none');
    infoc1.classList.add('d_none');
    infoc3.classList.add('d_none');
    infoc4.classList.add('d_none');

    buttonc2.classList.add('active__point');
    buttonc1.classList.remove('active__point');
    buttonc3.classList.remove('active__point');
    buttonc4.classList.remove('active__point');
}

buttonc3.onclick = function(){
    infoc3.classList.remove('d_none');
    infoc1.classList.add('d_none');
    infoc2.classList.add('d_none');
    infoc4.classList.add('d_none');

    buttonc3.classList.add('active__point');
    buttonc1.classList.remove('active__point');
    buttonc2.classList.remove('active__point');
    buttonc4.classList.remove('active__point');
}

buttonc4.onclick = function(){
    infoc4.classList.remove('d_none');
    infoc1.classList.add('d_none');
    infoc2.classList.add('d_none');
    infoc3.classList.add('d_none');

    buttonc4.classList.add('active__point');
    buttonc1.classList.remove('active__point');
    buttonc2.classList.remove('active__point');
    buttonc3.classList.remove('active__point');
}
